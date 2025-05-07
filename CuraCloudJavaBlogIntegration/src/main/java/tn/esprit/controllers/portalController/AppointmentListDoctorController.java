package tn.esprit.controllers.portalController;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import tn.esprit.models.Appointment;
import tn.esprit.services.AppointmentService;
import tn.esprit.services.SMS;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.List;

public class AppointmentListDoctorController {

    @FXML
    private Button DashboardBtnId;

    @FXML
    private Button addAppointmentButton;

    @FXML
    private GridPane gridPaneContainer;

    @FXML
    private Button CalendarButton;

    private final AppointmentService appointmentService = new AppointmentService();
    private  final UserService us = new UserService();
    @FXML
    public void initialize() {
        String session =Session.getInstance().getUserSession().get("email").toString();
        int id = appointmentService.getUserIDByEmail(session);
        List<Appointment> appointments = appointmentService.fetchAppointmentsByDoctorId(id);
        int rowIndex = 0;
        for (Appointment appointment : appointments) {
            // Create an appointment card
            AnchorPane appointmentCard = createAppointmentCard(appointment);

            // Set the constraints for the GridPane
            gridPaneContainer.addRow(rowIndex++, appointmentCard); // Add to a new row for each card
        }
    }


    private AnchorPane createAppointmentCard(Appointment appointment) {
        AnchorPane appointmentCard = new AnchorPane();
        appointmentCard.setPrefHeight(100.0); // Set preferred height explicitly

        appointmentCard.getStyleClass().add("card");

        // Add the details to the appointment card
        Label descriptionLabel = new Label("Description: " + appointment.getDescription());
        descriptionLabel.setLayoutX(10.0);
        descriptionLabel.setLayoutY(10.0);

        // Display start date and end date individually on the same line
        Label dateLabel = new Label("Start Date: " + formatDateTime(appointment.getStartDate()) +
                "    End Date: " + formatDateTime(appointment.getEndDate()));
        dateLabel.setLayoutX(10.0);
        dateLabel.setLayoutY(30.0);

        Label statusLabel = new Label("Status: " + appointment.getStatus());
        statusLabel.setLayoutX(10.0);
        statusLabel.setLayoutY(50.0);

        Label ratingLabel = new Label("Rating: " + appointment.getRating());
        ratingLabel.setLayoutX(10.0);
        ratingLabel.setLayoutY(70.0);

        // Accept Button
        Button acceptButton = new Button("Completed");
        acceptButton.setLayoutX(380.0);
        acceptButton.setLayoutY(10.0);
        acceptButton.setPrefWidth(75);
        acceptButton.setOnAction(event -> CompleteAppointment(appointment));

        // Deny button
        Button denyButton = new Button("Cancel");
        denyButton.setLayoutX(460.0);
        denyButton.setLayoutY(10.0);
        denyButton.setPrefWidth(60);
        denyButton.setOnAction(event -> CancelAppointment(appointment));

        // Add the labels and buttons to the card
        appointmentCard.getChildren().addAll(descriptionLabel, dateLabel, statusLabel, ratingLabel, acceptButton, denyButton);

        return appointmentCard;
    }
    private void CompleteAppointment(Appointment appointment) {
        appointment.setStatus("Completed");
        appointmentService.updateAppointment(appointment); // Update the appointment status in the database

        // Get the doctor's ID from the appointment
        int doctorID = appointment.getIdDoctor();

        // Get the doctor's name using the doctor's ID
        String doctorName = appointmentService.getDoctorNameByDoctorID(doctorID);

        // Construct notification message including the doctor's name
        String notificationMessage = "Réservation avec le docteur " + doctorName + " est terminée.";

        // Send SMS using your preferred SMS library (implementation not provided)
        SMS.sendSMS("+21658732642", notificationMessage); // Replace with actual SMS sending logic

        refreshAppointmentsGrid(); // Refresh the grid after updating the status
    }


    private void CancelAppointment(Appointment appointment) {
        appointment.setStatus("Cancelled");
        appointmentService.updateAppointment(appointment); // Update the appointment status in the database

        // Get the doctor's ID from the appointment
        int doctorID = appointment.getIdDoctor();

        // Get the doctor's name using the doctor's ID
        String doctorName = appointmentService.getDoctorNameByDoctorID(doctorID);

        // Construct notification message including the doctor's name
        String notificationMessage = "Réservation avec le docteur " + doctorName + " est annulée.";

        // Send SMS using your preferred SMS library (implementation not provided)
        SMS.sendSMS("+21658732642", notificationMessage); // Replace with actual SMS sending logic

        refreshAppointmentsGrid(); // Refresh the grid after updating the status
    }
    private void refreshAppointmentsGrid() {
        gridPaneContainer.getChildren().clear();
        initialize(); // Reload the appointments from the database and repopulate the grid
    }

    // Helper method to format LocalDateTime
    private String formatDateTime(LocalDateTime dateTime) {
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy HH:mm");
        return dateTime.format(formatter);
    }



    @FXML
    private void loadAddAppointmentView(ActionEvent event) {
        try {
            // Load the FXML file for the Add Appointment view
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/AppointmentAdd.fxml"));
            AnchorPane addView = loader.load();

            // Get the Scene and Stage to set the scene
            Scene scene = new Scene(addView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace(); // Log the exception
        }
    }
    @FXML
    private void loadCalendarView(ActionEvent event) {
        try {
            // Load the FXML file for the calendar view
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/Calendar.fxml"));
            Parent root = loader.load();

            // Get the controller instance
            CalendarController controller = loader.getController();
            String session = Session.getInstance().getUserSession().get("email").toString();
            int id = appointmentService.getUserIDByEmail(session);

            // Fetch appointments for the desired time range
            LocalDate dateFocus = LocalDate.now(); // Or any other date you want to focus on
            List<Appointment> appointments = appointmentService.fetchAppointmentsByDoctorId(id); // Or fetchAppointmentsForWeek depending on your requirements

            // Pass appointments to the controller
            controller.setAppointmentsPublic(appointments);

            // Create a new stage for the calendar view
            Stage stage = new Stage();
            stage.setTitle("Calendar View");
            stage.setScene(new Scene(root));

            // Show the stage
            stage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }


    @FXML
    private void navigateToAppointments(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/AppointmentListDoctor.fxml"));
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
