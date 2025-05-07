package tn.esprit.controllers;
import tn.esprit.models.Meds;
import tn.esprit.models.Prescription;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.control.ListView;
import tn.esprit.services.MedsService;
import tn.esprit.services.PrescriptionService;
import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.io.IOException;
import java.util.Optional;

public class PrescriptionDetails {

    @FXML
    private Label durationLabel;

    @FXML
    private Label creationDateLabel;

    @FXML
    private ListView<Meds> listPU;


    private final PrescriptionService ps = new PrescriptionService();
    private final MedsService ms = new MedsService();
    private Meds meds;
    private Prescription prescription;
    private Stage stage;

    // Method to initialize prescription data
    public void initData1(Prescription prescription) {
        this.prescription = prescription;
        displayPrescriptionDetails();
        displayMedications();
    }

    private void displayPrescriptionDetails() {
        if (prescription != null) {
            durationLabel.setText("Duration: " + prescription.getDuration());
            creationDateLabel.setText("Creation Date: " + prescription.getCreationDate());
        }
    }

    // Method to display medications associated with the prescription
    private void displayMedications() {
        if (prescription != null) {
            ObservableList<Meds> medications = FXCollections.observableArrayList(prescription.getMedications());
            listPU.setItems(medications);

            // Add event handler for each item in the list
            listPU.setOnMouseClicked(event -> {
                Meds selectedMeds = listPU.getSelectionModel().getSelectedItem();
                if (selectedMeds != null) {
                    redirectToMedsDetails(selectedMeds);
                }
            });
        }
    }
    @FXML
    void updatePrescription(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UpdatePrescription.fxml"));
            Parent root = loader.load();
            stage = (Stage) durationLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
            // Initialize prescription if not null
            UpdatePrescription controller = loader.getController();
            if (prescription != null) {
                controller.initData(prescription);
            }
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    void deletePrescription() {
        // Display a confirmation dialog to confirm deletion
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText("Delete Prescription");
        alert.setContentText("Are you sure you want to delete this prescription?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            // User confirmed deletion
            System.out.println("Deleting Prescription ID: " + prescription.getId()); // Debug
            // Perform deletion logic here, assuming ps is your PrescriptionService instance
            ps.deletePrescription(prescription.getId());

            // Redirect to ShowPrescription.fxml
            redirectToShowPrescription();
        }
    }

    private void redirectToShowPrescription() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowPrescription.fxml"));
            Parent root = loader.load();
            PrescriptionIndex controller = loader.getController();
            controller.loadPrescriptions(); // Reload prescriptions
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current stage
            ((Stage) durationLabel.getScene().getWindow()).close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }


    @FXML
    void cancel() {
        redirectToShowPrescription();
    }


    private void redirectToMedsDetails(Meds meds) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsMedsF.fxml"));
            Parent root = loader.load();
            MedsDetailsF controller = loader.getController();
            controller.initData2(meds); // Pass the selected medication to the MedsDetails controller
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }



    private void redirectToScene2(String fxmlFilePath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFilePath));
            Parent root = loader.load();
            Stage stage = (Stage) durationLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
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
            Stage stage = (Stage) durationLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}

