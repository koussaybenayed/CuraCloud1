package tn.esprit.controllers;

import tn.esprit.models.Meds;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;

import java.io.IOException;

public class MedsDetailsF {

    @FXML
    private Label doseLabel;

    @FXML
    private Label medicationLabel;

    @FXML
    private Label priceLabel;

    @FXML
    private Label typeLabel;

    private final MedsService ms = new MedsService();
    private Meds meds;
    private Stage stage;

    public void initData2(Meds meds) {
        this.meds = meds;
        displayMedsDetails();
    }

    private void displayMedsDetails() {
        if (meds != null) {
            medicationLabel.setText("Medication: " + meds.getName());
            typeLabel.setText("Type: " + meds.getType());
            doseLabel.setText("Dose: " + meds.getDose());
            priceLabel.setText("Price: " + meds.getPrice());
        }
    }


    private void redirectToPrescription() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsPrescription.fxml"));
            Parent root = loader.load();
            // Get the controller associated with ShowMeds.fxml
            PrescriptionDetails controller = loader.getController();
            // Load prescriptions again if needed
            Stage currentStage = (Stage) medicationLabel.getScene().getWindow();
            currentStage.setScene(new Scene(root));
            currentStage.show();

            // Close the current stage
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    public void cancelMF(ActionEvent actionEvent) {redirectToPrescription();}

    public void dashMedication(ActionEvent actionEvent) {
    }
}
