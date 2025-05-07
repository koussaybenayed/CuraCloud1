package tn.esprit.controllers.portalController;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import tn.esprit.models.MedicalRecord;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;

public class MedicalRecordShowController {

    @FXML
    private Label patientNameLabel;

    @FXML
    private Label medicalHistoryLabel;

    @FXML
    private Label surgicalHistoryLabel;

    @FXML
    private Label familyHistoryLabel;

    @FXML
    private Label allergiesLabel;

    @FXML
    private Label heightLabel;

    @FXML
    private Label weightLabel;

    @FXML
    private Label bloodTypeLabel;

    @FXML
    private Label diseasesLabel;

    @FXML
    private Label medicationsLabel;

    @FXML
    private Label vaccinesLabel;
    private  final UserService us = new UserService();

    @FXML
    private void initialize() {
        // Initialize the labels
    }

    public void initialize(MedicalRecord medicalRecord) {
        patientNameLabel.setText(medicalRecord.getPatientName());
        medicalHistoryLabel.setText(medicalRecord.getMedicalHistory());
        surgicalHistoryLabel.setText(medicalRecord.getSurgicalHistory());
        familyHistoryLabel.setText(medicalRecord.getFamilyHistory());
        allergiesLabel.setText(medicalRecord.getAllergies());
        heightLabel.setText(medicalRecord.getHeight()+ "cm " );
        weightLabel.setText( medicalRecord.getWeight()+ "cm " );
        bloodTypeLabel.setText( medicalRecord.getBloodType());
        diseasesLabel.setText(medicalRecord.getDiseases());
        medicationsLabel.setText( medicalRecord.getMedications());
        vaccinesLabel.setText( medicalRecord.getVaccines());
    }


//navigation
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

    public void returnToDashboard(ActionEvent actionEvent) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsList.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) actionEvent.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }
}
