package tn.esprit.controllers;
import tn.esprit.models.Meds;
import tn.esprit.models.Prescription;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;
import tn.esprit.services.PrescriptionService;
import tn.esprit.util.MaConnexion;

import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class AddPrescription {

    @FXML
    private TextField MedsNotesPTF;

    @FXML
    private ListView<Meds> listPM;

    @FXML
    private DatePicker dateP;


    @FXML
    private TextField search;

    @FXML
    private TextField PatientEmailP;

    private final PrescriptionService ps = new PrescriptionService();
    private final MedsService ms = new MedsService();
    private ObservableList<Meds> selectedMeds = FXCollections.observableArrayList();
    Connection cnx = MaConnexion.getInstance().getCnx();

    @FXML
    void initialize() {
        // Set the current date to the DatePicker
        dateP.setValue(LocalDate.now());

        List<Meds> allMeds = ms.getAllMeds();
        ObservableList<Meds> observableMeds = FXCollections.observableArrayList(allMeds);
        listPM.setItems(observableMeds);

        // Set the selection mode to MULTIPLE
        listPM.getSelectionModel().setSelectionMode(SelectionMode.MULTIPLE);

        listPM.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue != null) {
                // Toggle selection state for the clicked item
                if (listPM.getSelectionModel().getSelectedItems().contains(newValue)) {
                    // If not already in selectedMeds, add it
                    if (!selectedMeds.contains(newValue)) {
                        selectedMeds.add(newValue);
                    }
                } else {
                    // If deselected, remove it from selectedMeds
                    selectedMeds.remove(newValue);
                }
            }
        });
    }






    @FXML
    void AddPrescription() {
        String duration = MedsNotesPTF.getText().trim();
        String email = PatientEmailP.getText().trim(); // Get the user's email from the UI

        try {
            int userId = getUserIdByEmail(email); // Fetch user ID from the database

            if (userId == -1) {
                showAlert("User not found", "User with the specified email not found.");
                return;
            }

            // Creating a Prescription object with user ID and other details
            Prescription prescription = new Prescription(duration, java.sql.Date.valueOf(LocalDate.now()),new ArrayList<>(selectedMeds), userId);
            ps.addPrescription(prescription);

            redirectToShowPrescription();
        } catch (SQLException ex) {
            ex.printStackTrace();
            showAlert("Error", "Failed to add prescription. Please try again.");
        }
    }

    private int getUserIdByEmail(String email) throws SQLException {
        // Query to fetch user ID based on email
        String query = "SELECT id FROM User WHERE email = ?";
        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setString(1, email);
            ResultSet resultSet = ps.executeQuery();
            if (resultSet.next()) {
                return resultSet.getInt("id");
            }
        }
        return -1; // User not found
    }

    @FXML
    void cancel() { redirectToShowPrescription(); }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private void redirectToShowPrescription() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowPrescription.fxml"));
            Parent root = loader.load();
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current stage
            Stage currentStage = (Stage) listPM.getScene().getWindow();
            currentStage.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }


    @FXML
    void Search(ActionEvent actionEvent) {
        String searchText = search.getText().trim();
        if (searchText.isEmpty()) {
            showAlert("Invalid Input", "Please enter a search term.");
            return;
        }

        // Search for medications by type
        List<Meds> foundMeds = ms.getMedsByType(searchText);

        // Update the list view with the search results
        ObservableList<Meds> observableMeds = FXCollections.observableArrayList(foundMeds);
        listPM.setItems(observableMeds);
    }

    void dashMedication(ActionEvent actionEvent) {
        redirectToScene1("/ShowMeds.fxml");
    }

    @FXML
    void dashPrescription(ActionEvent actionEvent) {
        redirectToScene1("/ShowPrescription.fxml");
    }

    private void redirectToScene1(String fxmlFilePath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFilePath));
            Parent root = loader.load();
            Stage stage = (Stage) listPM.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
