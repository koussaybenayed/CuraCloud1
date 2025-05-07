package tn.esprit.controllers.portalController;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import tn.esprit.models.MedicalRecord;
import tn.esprit.services.MedicalRecordService;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.util.List;
import java.util.Optional;

public class MedicalRecordListController {

    @FXML
    private Button DashboardBtnId;

    @FXML
    private Button addMedicalRecordButton;

    @FXML
    private GridPane gridPaneContainer;

    private final MedicalRecordService medicalRecordService = new MedicalRecordService();
    private  final UserService us = new UserService();
    @FXML
    public void initialize() {
        gridPaneContainer.getChildren().clear(); // Clear the existing children
        String session =Session.getInstance().getUserSession().get("email").toString();
        int id = medicalRecordService.getUserIDByEmail(session);
        List<MedicalRecord> medicalRecords = medicalRecordService.fetchMedicalRecordByPatientId(id);

        int rowIndex = 0;
        for (MedicalRecord medicalRecord : medicalRecords) {
            // Create a medical record card
            AnchorPane medicalRecordCard = createMedicalRecordCard(medicalRecord);

            // Set the constraints for the GridPane
            gridPaneContainer.addRow(rowIndex++, medicalRecordCard); // Add to a new row for each card
        }
    }


    private AnchorPane createMedicalRecordCard(MedicalRecord medicalRecord) {
        AnchorPane medicalRecordCard = new AnchorPane();
        medicalRecordCard.setPrefSize(554.0, 100.0);
        medicalRecordCard.getStyleClass().add("card");

        // Patient Name Label
        Label nameLabel = new Label("Name: " + medicalRecord.getPatientName());
        nameLabel.setLayoutX(10.0);
        nameLabel.setLayoutY(10.0);

        // Height Label
        Label heightLabel = new Label("Height: " + medicalRecord.getHeight() + " cm");
        heightLabel.setLayoutX(10.0);
        heightLabel.setLayoutY(30.0);

        // Weight Label
        Label weightLabel = new Label("Weight: " + medicalRecord.getWeight() + " kg");
        weightLabel.setLayoutX(10.0);
        weightLabel.setLayoutY(50.0);

        // Medications Label
        Label medicationsLabel = new Label("Medications: " + medicalRecord.getMedications());
        medicationsLabel.setLayoutX(10.0);
        medicationsLabel.setLayoutY(70.0);

        // Edit Button
        Button editButton = new Button("Edit");
        editButton.setLayoutX(380.0);
        editButton.setLayoutY(10.0);
        editButton.setPrefWidth(60);
        editButton.setOnAction(event -> editMedicalRecord(medicalRecord));

        // Delete Button
        Button deleteButton = new Button("Delete");
        deleteButton.setLayoutX(460.0);
        deleteButton.setLayoutY(10.0);
        deleteButton.setPrefWidth(60);
        deleteButton.setOnAction(event -> deleteMedicalRecord(medicalRecord));

        // Show Button
        Button showButton = new Button("Show");
        showButton.setLayoutX(300.0);
        showButton.setLayoutY(10.0);
        showButton.setPrefWidth(60);
        showButton.setOnAction(event -> showMedicalRecordDetails(medicalRecord));

        // Add the labels and buttons to the card
        medicalRecordCard.getChildren().addAll(nameLabel, heightLabel, weightLabel, medicationsLabel, showButton, editButton, deleteButton );

        return medicalRecordCard;
    }

    private void deleteMedicalRecord(MedicalRecord medicalRecord) {
        // Display a confirmation dialog to confirm deletion
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText("Delete Medical Record");
        alert.setContentText("Are you sure you want to delete this medical record?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            // User confirmed deletion
            medicalRecordService.deleteMedicalRecord(medicalRecord.getId());

            // Optionally, update the displayed medical record cards in the list after deleting
            // For example, you can reload the list of medical records from your data source and refresh the UI
            initialize(); // This will reload the medical records and update the UI
        }
    }


    private void editMedicalRecord(MedicalRecord medicalRecord) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsModify.fxml"));
            AnchorPane editView = loader.load();

            // Pass the medical record object to the edit view
            MedicalRecordEditController editController = loader.getController();
            editController.initData(medicalRecord);

            Scene scene = new Scene(editView);
            Stage stage = new Stage();
            stage.setScene(scene);
            stage.show(); // Show the edit window as a modal dialog

            // Optionally, update the displayed medical record cards in the list after editing
            // For example, you can reload the list of medical records from your data source and refresh the UI
            initialize(); // This will reload the medical records and update the UI
        } catch (IOException e) {
            e.printStackTrace(); // Log the exception
        }
    }


    private void showMedicalRecordDetails(MedicalRecord medicalRecord) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsShow.fxml"));
            AnchorPane showView = loader.load();

            // Pass the medical record object to the show view
            MedicalRecordShowController showController = loader.getController();
            showController.initialize(medicalRecord);

            Scene scene = new Scene(showView);
            Stage stage = new Stage();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace(); // Log the exception
        }
    }

    @FXML
    private void loadAddMedicalRecordView(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsAdd.fxml"));
            AnchorPane addView = loader.load();

            Scene scene = new Scene(addView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace(); // Log the exception
        }
    }

    @FXML
    private void returnToDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader();
            loader.setLocation(getClass().getResource("/Dashboard.fxml")); // Update this path to point to your dashboard FXML file
            AnchorPane dashboardView = loader.load();

            Scene scene = new Scene(dashboardView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }
    @FXML
    private void navigateToAppointments(ActionEvent event) {
        try {
            String session = Session.getInstance().getUserSession().get("email").toString();
            String userRole = us.getUserRoleByEmail(session);

            // Determine the FXML file to load based on the user's role
            String fxmlFile;
            switch (userRole) {
                case "[\"ROLE_PATIENT\"]":
                    fxmlFile = "/portalInterface/AppointmentListPatient.fxml";
                    break;
                case "[\"ROLE_DOCTOR\"]":
                    fxmlFile = "/portalInterface/AppointmentListDoctor.fxml";
                    break;
                case "Admin":
                    fxmlFile = "/portalInterface/AppointmentListAdmin.fxml";
                    break;
                default:
                    // Handle invalid or unknown role
                    System.out.println("Invalid user role: " + userRole);
                    return;
            }

            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFile));
            AnchorPane appointmentsView = loader.load();
            Scene scene = new Scene(appointmentsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

    @FXML
    private void navigateToMedicalRecords(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsList.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

}
