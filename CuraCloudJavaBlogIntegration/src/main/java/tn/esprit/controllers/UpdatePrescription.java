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
import javafx.scene.control.Alert;
import javafx.scene.control.ListView;
import javafx.scene.control.SelectionMode;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import tn.esprit.services.PrescriptionService;
import tn.esprit.services.MedsService;

import java.io.IOException;
import java.util.List;

public class UpdatePrescription {

    @FXML
    private TextField MedsNotesPTFU;

    @FXML
    private ListView<Meds> listPMUP;


    @FXML
    private TextField search;

    private Prescription prescription;
    private final PrescriptionService ps = new PrescriptionService();
    private final MedsService ms = new MedsService();
    private Stage stage;
    private ObservableList<Meds> selectedMeds = FXCollections.observableArrayList();

    public void initData(Prescription prescription) {
        this.prescription = prescription;
        displayPrescriptionDetails();
        displayAllMedications();
    }

    @FXML
    void initialize() {
        // Set up the list view with all medications
        displayAllMedications();

        // Set the selection mode to MULTIPLE
        listPMUP.getSelectionModel().setSelectionMode(SelectionMode.MULTIPLE);

        // Listen for changes in selection
        listPMUP.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            // Handle selection change here
            if (newValue != null) {
                if (listPMUP.getSelectionModel().getSelectedItems().contains(newValue)) {
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

    // Method to display prescription details
    private void displayPrescriptionDetails() {
        if (prescription != null) {
            MedsNotesPTFU.setText(prescription.getDuration());
        }
    }

    // Method to display all medications
    private void displayAllMedications() {
        List<Meds> allMeds = ms.getAllMeds();
        ObservableList<Meds> observableMeds = FXCollections.observableArrayList(allMeds);
        listPMUP.setItems(observableMeds);
    }

    @FXML
    void updatePrescription(ActionEvent event) {
        String notes = MedsNotesPTFU.getText();

        if (!isValidString(notes)) {
            showAlert("Invalid Input", "Duration field must contain non-blank alphabetic characters only.");
            return;
        }

        // Update the prescription object with new values
        prescription.setDuration(notes);
        prescription.setMedications(selectedMeds);

        // Update the prescription in the database
        ps.updatePrescription(prescription);

        // Redirect back to PrescriptionDetails.fxml
        redirectToPrescriptionDetailsScene();
    }

    private boolean isValidString(String input) {
        // Regular expression to match non-blank strings with only alphabetic characters
        return input.matches("[a-zA-Z]+");
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    @FXML
    void cancelU(ActionEvent event) {
        redirectToPrescriptionDetailsScene();
    }

    private void redirectToPrescriptionDetailsScene() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsPrescription.fxml"));
            Parent root = loader.load();
            PrescriptionDetails controller = loader.getController();
            // Initialize prescription if not null
            if (prescription != null) {
                controller.initData1(prescription);
            }
            if (stage == null) {
                stage = (Stage) MedsNotesPTFU.getScene().getWindow();
            }
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
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
        listPMUP.setItems(observableMeds);
    }
    @FXML
    void dashMedication(ActionEvent actionEvent) {
        redirectToScene("/ShowMeds.fxml");
    }

    @FXML
    void dashPrescription(ActionEvent actionEvent) {
        redirectToScene("/ShowPrescription.fxml");
    }

    private void redirectToScene(String fxmlFilePath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFilePath));
            Parent root = loader.load();
            Stage stage = (Stage) MedsNotesPTFU.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
