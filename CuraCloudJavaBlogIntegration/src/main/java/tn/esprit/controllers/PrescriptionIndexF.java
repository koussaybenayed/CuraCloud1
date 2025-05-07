package tn.esprit.controllers;
import tn.esprit.models.Prescription;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ListView;
import javafx.stage.Stage;
import tn.esprit.services.PrescriptionService;

import java.io.IOException;
import java.util.List;

public class PrescriptionIndexF {

    @FXML
    private ListView<Prescription> listPF;

    private PrescriptionService prescriptionService = new PrescriptionService();


    @FXML
    public void initialize() {
        // Set custom cell factory
        listPF.setCellFactory(new PrescriptionListCellFactory2());

        loadPrescriptions();

        // Set a listener for item selection
        listPF.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue != null) {
                openPrescriptionDetailsWindow(newValue);
            }
        });
    }


    private void openPrescriptionDetailsWindow(Prescription prescription) {
        System.out.println("Selected Prescription ID: " + prescription.getId()); // Debug
        try {
            // Load PrescriptionDetails.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsPrescriptionF.fxml"));
            Parent root = loader.load();

            // Get the controller
            PrescriptionDetailsF controller = loader.getController();

            // Pass the selected prescription to the controller
            controller.initData1(prescription);

            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the ShowPrescription window
            Stage currentStage = (Stage) listPF.getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void loadPrescriptions() {
        List<Prescription> prescriptions = prescriptionService.getAllPrescriptionsByUserId();
        listPF.getItems().setAll(prescriptions);
    }

    private void redirectToPrescriptionScene(String fxmlPath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
            Parent root = loader.load();

            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current window
            ((Stage) listPF.getScene().getWindow()).close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void tocheckout(ActionEvent actionEvent) {
        try {
            // Load checkout.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/checkout.fxml"));
            Parent root = loader.load();

            // Create a new stage for checkout scene
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current window
            Stage currentStage = (Stage) listPF.getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    public void navigatetohome(ActionEvent actionEvent) {
        try {
            // Load checkout.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
            Parent root = loader.load();

            // Create a new stage for checkout scene
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current window
            Stage currentStage = (Stage) listPF.getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }


}
