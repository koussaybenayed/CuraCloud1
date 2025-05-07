package tn.esprit.controllers;
import tn.esprit.models.Meds;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;

import java.io.IOException;

public class AddMeds {

    @FXML
    private Button AddMedication;

    @FXML
    private TextField MedsDoseMF;

    @FXML
    private TextField MedsPriceMF;

    @FXML
    private TextField MedsTypeMF;

    @FXML
    private TextField medsnameMF;

    private final MedsService ms = new MedsService();

    @FXML
    void AddMedication(ActionEvent event) {
        try {
            // Validate input
            String medication = medsnameMF.getText().trim();
            String type = MedsTypeMF.getText().trim();
            int dose = Integer.parseInt(MedsDoseMF.getText().trim());
            float price = Float.parseFloat(MedsPriceMF.getText().trim());

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

            // If all input is valid, add medication
            Meds meds = new Meds(medication, type, dose, price);
            ms.addMeds(meds);

            showAlert("Success", "Medication added successfully!");
            closeStage();
        } catch (NumberFormatException e) {
            showAlert("Error", "Please enter valid numeric values for dose and price.");
        } catch (Exception e) {
            showAlert("Error", "Failed to add medication.");
            e.printStackTrace(); // Log the exception
        }
        redirectToMedsScene("/ShowMeds.fxml");
    }

    @FXML
    void cancel(ActionEvent event) {
        redirectToMedsScene("/ShowMeds.fxml");
    }

    private void closeStage() {
        Stage stage = (Stage) medsnameMF.getScene().getWindow();
        stage.close();
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private void redirectToMedsScene(String fxmlPath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
            Parent root = loader.load();

            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current stage
            ((Stage) medsnameMF.getScene().getWindow()).close();
        } catch (IOException e) {
            e.printStackTrace();
        }
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

    public void dashMedication(ActionEvent actionEvent) {
    }

    public void dashPrescription(ActionEvent actionEvent) {
    }
}
