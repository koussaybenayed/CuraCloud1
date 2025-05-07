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

public class PrescriptionIndex {

        @FXML
        private ListView<Prescription> listP;

        private PrescriptionService prescriptionService = new PrescriptionService();

        @FXML
        public void initialize() {
                listP.setCellFactory(new PrescriptionListCellFactory3());
                loadPrescriptions();
                // Set a listener for item selection
                listP.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
                        if (newValue != null) {
                                openPrescriptionDetailsWindow(newValue);
                        }
                });
        }

        @FXML
        void toaddprescription(ActionEvent event) {
                redirectToPrescriptionScene("/AddPrescription.fxml");
        }

        private void openPrescriptionDetailsWindow(Prescription prescription) {
                System.out.println("Selected Prescription ID: " + prescription.getId()); // Debug
                try {
                        // Load PrescriptionDetails.fxml
                        FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsPrescription.fxml"));
                        Parent root = loader.load();

                        // Get the controller
                        PrescriptionDetails controller = loader.getController();

                        // Pass the selected prescription to the controller
                        controller.initData1(prescription);

                        Stage stage = new Stage();
                        stage.setScene(new Scene(root));
                        stage.show();
                        Stage currentStage = (Stage) listP.getScene().getWindow();
                        currentStage.close();
                } catch (IOException e) {
                        e.printStackTrace();
                }
        }

        public void loadPrescriptions() {
                List<Prescription> prescriptions = prescriptionService.getAllPrescriptions();
                listP.getItems().setAll(prescriptions);
        }

        private void redirectToPrescriptionScene(String fxmlPath) {
                try {
                        FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
                        Parent root = loader.load();

                        Stage stage = new Stage();
                        stage.setScene(new Scene(root));
                        stage.show();

                        // Close the current window
                        ((Stage) listP.getScene().getWindow()).close();
                } catch (IOException e) {
                        e.printStackTrace();
                }
        }

        @FXML
        void dashMedication(ActionEvent actionEvent) {
                redirectToScene("/ShowMeds.fxml");
        }

        @FXML
        void dashPrescription(ActionEvent actionEvent) {
                redirectToScene("/ShowPrescription.fxml");
        }
        @FXML
        void navigateToDashboard(ActionEvent actionEvent) {
                redirectToScene("/labInterface/Dashboard.fxml");
        }

        private void redirectToScene(String fxmlFilePath) {
                try {
                        FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFilePath));
                        Parent root = loader.load();
                        Stage stage = (Stage) listP.getScene().getWindow();
                        stage.setScene(new Scene(root));
                        stage.show();
                } catch (IOException e) {
                        e.printStackTrace();
                }
        }


}
