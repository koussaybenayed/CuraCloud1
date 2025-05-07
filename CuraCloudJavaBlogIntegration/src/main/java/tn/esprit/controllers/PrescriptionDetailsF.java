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
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.io.IOException;

public class PrescriptionDetailsF {

    @FXML
    private Label durationLabel;

    @FXML
    private Label creationDateLabel;

    @FXML
    private ListView<Meds> listPUF;


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
            listPUF.setItems(medications);

            // Add event handler for each item in the list
            listPUF.setOnMouseClicked(event -> {
                Meds selectedMeds = listPUF.getSelectionModel().getSelectedItem();
                if (selectedMeds != null) {
                    redirectToMedsDetails(selectedMeds);
                }
            });
        }
    }


    private void redirectToShowPrescription() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowPrescriptionF.fxml"));
            Parent root = loader.load();
            PrescriptionIndexF controller = loader.getController();
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

}

