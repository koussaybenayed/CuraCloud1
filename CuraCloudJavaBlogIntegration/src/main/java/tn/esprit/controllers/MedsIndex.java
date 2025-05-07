package tn.esprit.controllers;

import tn.esprit.models.Meds;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ListView;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;

import java.io.IOException;
import java.util.List;

public class MedsIndex {

    @FXML
    private ListView<Meds> listM;
    private final MedsService ms = new MedsService();

    @FXML
    public void initialize() {
        loadMeds();
        // Set a listener for item selection
        listM.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue != null) {
                openMedsDetailsWindow(newValue);
            }
        });
    }


    private void openMedsDetailsWindow(Meds meds) {
        System.out.println("Selected Medication ID: " + meds.getId()); // Debug
        try {
            // Load MedsDetails.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DetailsMeds.fxml"));
            Parent root = loader.load();

            // Get the controller
            MedsDetails controller = loader.getController();

            // Pass the selected meds to the controller
            controller.initData2(meds);

            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the ShowPrescription window
            Stage currentStage = (Stage) listM.getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }

        }


    void loadMeds() {
        // Clear the ListView before adding items to it
        listM.getItems().clear();
        List<Meds> meds = ms.getAllMeds();
        listM.getItems().addAll(meds);
    }

    private void redirectToMedsScene(String fxmlPath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
            Parent root = loader.load();

            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();

            // Close the current window
            ((Stage) listM.getScene().getWindow()).close();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void toaddmedication(ActionEvent actionEvent) {redirectToMedsScene("/AddMeds.fxml");;
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
            Stage stage = (Stage) listM.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
