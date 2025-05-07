package tn.esprit.controllers;

import javafx.scene.control.Alert;
import tn.esprit.models.Meds;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;

import java.io.IOException;

public class UpdateMeds {

    @FXML
    private Button CancelUM;

    @FXML
    private TextField MedsDoseMFU;

    @FXML
    private TextField MedsPriceMFU;

    @FXML
    private TextField MedsTypeMFU;

    @FXML
    private Button UpdateMedication;

    @FXML
    private TextField medsnameMFU;

    private final MedsService ms = new MedsService();
    private Meds meds;
    private Stage stage;

    public void initData2(Meds meds) {
        this.meds = meds;
        displayMedsDetails();
    }

    private void displayMedsDetails() {
        if (meds != null) {
            medsnameMFU.setText(meds.getName());
            MedsTypeMFU.setText(meds.getType());
            MedsDoseMFU.setText(String.valueOf(meds.getDose())); // Convert to String
            MedsPriceMFU.setText(String.valueOf(meds.getPrice())); // Convert to String
        }
    }

    @FXML
    void UpdateMedication(ActionEvent event) {
        try {
            // Validate input
            String medication = medsnameMFU.getText().trim();
            String type = MedsTypeMFU.getText().trim();
            int dose = Integer.parseInt(MedsDoseMFU.getText().trim());
            float price = Float.parseFloat(MedsPriceMFU.getText().trim());

            if (!isValidName(medication) || !isValidName(type)) {
                showAlert("Error", "Name and Type must start with a capital letter.");
                return;
            }

            if (!isValidDose(dose)) {
                showAlert("Error", "Dose must be a positive integer.");
                return;
            }

            if (!isValidPrice(price)) {
                showAlert("Error", "Price must be a positive number.");
                return;
            }

            // If all input is valid, update medication
            meds.setName(medication);
            meds.setType(type);
            meds.setDose(dose);
            meds.setPrice(price);

            // Update the medication in the database
            ms.updateMeds(meds);

            showAlert("Success", "Medication updated successfully!");
            redirectToMedsDetailsScene();
        } catch (NumberFormatException e) {
            showAlert("Error", "Please enter valid numeric values for dose and price.");
        } catch (Exception e) {
            showAlert("Error", "Failed to update medication.");
            e.printStackTrace(); // Log the exception
        }
    }

    @FXML
    void CancelUM(ActionEvent actionEvent) {
        redirectToMedsDetailsScene();
    }

    private void redirectToMedsDetailsScene() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsMeds.fxml"));
            Parent root = loader.load();
            MedsDetails controller = loader.getController();
            // Initialize prescription if not null
            if (meds != null) {
                controller.initData2(meds);
            }
            if (stage == null) {
                stage = (Stage) medsnameMFU.getScene().getWindow();
            }
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Input validation methods
    private boolean isValidName(String name) {
        return !name.isEmpty() && Character.isUpperCase(name.charAt(0));
    }

    private boolean isValidDose(int dose) {
        return dose > 0;
    }

    private boolean isValidPrice(float price) {
        return price > 0;
    }
}
