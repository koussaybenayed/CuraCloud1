package tn.esprit.controllers.portalController;

import de.jensd.fx.glyphs.fontawesome.FontAwesomeIcon;
import de.jensd.fx.glyphs.fontawesome.FontAwesomeIconView;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
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
import java.util.HashSet;
import java.util.List;
import java.util.Optional;
import java.util.Set;

public class AppointmentListPatientController {

    @FXML
    private Button DashboardBtnId;

    @FXML
    private Button addAppointmentButton;

    @FXML
    private GridPane gridPaneContainer;

    @FXML
    private VBox completedAppointmentsContainer;

    @FXML
    private Button CalendarButton;

    private Set<Integer> completedAppointmentIds = new HashSet<>(); // Store unique completed appointment IDs



    private final AppointmentService appointmentService = new AppointmentService();
    private  final UserService us = new UserService();
    @FXML
    public void initialize() {
        String session =Session.getInstance().getUserSession().get("email").toString();
        int id = appointmentService.getUserIDByEmail(session);
        // Fetch appointments for the desired time range
        List<Appointment> appointments = appointmentService.fetchAppointmentsByPatientId(id);
        int rowIndex = 0;
        for (Appointment appointment : appointments) {
            // Create an appointment card
            AnchorPane appointmentCard = createAppointmentCard(appointment);
            // Set the constraints for the GridPane
            gridPaneContainer.addRow(rowIndex++, appointmentCard); // Add to a new row for each card
            initializeCompletedAppointments();

        }
    }
    @FXML
    public void initializeCompletedAppointments() {
        String session =Session.getInstance().getUserSession().get("email").toString();
        int id = appointmentService.getUserIDByEmail(session);
        List<Appointment> completedAppointments = appointmentService.fetchCompletedAppointments(id);

        for (Appointment appointment : completedAppointments) {
            // Check if the appointment ID already exists in the set
            if (!completedAppointmentIds.contains(appointment.getId())) {
                // Create a completed appointment card
                AnchorPane completedAppointmentCard = createCompletedAppointmentCard(appointment);

                // Add the appointment card to the VBox
                completedAppointmentsContainer.getChildren().add(completedAppointmentCard);

                // Add the appointment ID to the set
                completedAppointmentIds.add(appointment.getId());
            }
        }
    }

    private AnchorPane createAppointmentCard(Appointment appointment) {
        AnchorPane appointmentCard = new AnchorPane();
        appointmentCard.setPrefHeight(100.0); // Set preferred height explicitly

        // Achieve full width by setting AnchorPane constraints to stretch
        AnchorPane.setTopAnchor(appointmentCard, 0.0);
        AnchorPane.setLeftAnchor(appointmentCard, 0.0);
        AnchorPane.setRightAnchor(appointmentCard, 0.0);

        appointmentCard.getStyleClass().add("card");

        // Add the details to the appointment card
        Label descriptionLabel = new Label(appointment.getDescription());
        descriptionLabel.setLayoutX(10);
        descriptionLabel.setLayoutY(10.0);

        // Display start date and end date individually on the same line
        Label dateLabel = new Label();
        DateTimeFormatter format = DateTimeFormatter.ofPattern("dd/MM/yyyy 'at' HH:mm");  // Customize the date format pattern
        String formattedDate ="From "+ format.format(appointment.getStartDate()) +
                " to " +
                format.format(appointment.getEndDate());
        dateLabel.setText(formattedDate);
        dateLabel.setLayoutX(10.0);
        dateLabel.setLayoutY(30.0);

        Label statusLabel = new Label("Status: " + appointment.getStatus());
        statusLabel.setLayoutX(10.0);
        statusLabel.setLayoutY(50.0);

        if (appointment.getRating() != 0) {
            Label ratingLabel = new Label( + appointment.getRating() + " Stars");
            ratingLabel.setLayoutX(10.0);
            ratingLabel.setLayoutY(70.0);
            appointmentCard.getChildren().add(ratingLabel);
        }

        // Edit Button
        Button editButton = new Button("");
        editButton.setGraphic(new FontAwesomeIconView(FontAwesomeIcon.PENCIL_SQUARE));
        editButton.getStyleClass().add("icon-button");
        editButton.setLayoutX(490);
        editButton.setLayoutY(10.0);
        editButton.setPrefWidth(30);
        editButton.setOnAction(event -> editAppointment(appointment));

        // Delete button
        Button deleteButton = new Button("");
        deleteButton.setGraphic(new FontAwesomeIconView(FontAwesomeIcon.TRASH));
        deleteButton.getStyleClass().add("icon-button");
        deleteButton.setLayoutX(530);
        deleteButton.setLayoutY(10.0);
        deleteButton.setPrefWidth(30);
        deleteButton.setOnAction(event -> deleteAppointment(appointment));

        // Add the labels and buttons to the card
        appointmentCard.getChildren().addAll(descriptionLabel, dateLabel, statusLabel, editButton, deleteButton);

        return appointmentCard;
    }
    private AnchorPane createCompletedAppointmentCard(Appointment appointment) {
        AnchorPane appointmentCard = new AnchorPane();
        appointmentCard.setPrefHeight(100.0); // Set preferred height explicitly

        // Achieve full width by setting AnchorPane constraints to stretch
        AnchorPane.setTopAnchor(appointmentCard, 0.0);
        AnchorPane.setLeftAnchor(appointmentCard, 0.0);
        AnchorPane.setRightAnchor(appointmentCard, 0.0);

        appointmentCard.getStyleClass().add("card");

        // Add the details to the appointment card
        Label descriptionLabel = new Label(appointment.getDescription());
        descriptionLabel.setLayoutX(10.0);
        descriptionLabel.setLayoutY(10.0);

        // Display start date and end date individually on the same line
        Label dateLabel = new Label();
        DateTimeFormatter format = DateTimeFormatter.ofPattern("dd/MM/yyyy 'at' HH:mm");  // Customize the date format pattern
        String formattedDate = "From " + format.format(appointment.getStartDate()) +
                " to " +
                format.format(appointment.getEndDate());
        dateLabel.setText(formattedDate);
        dateLabel.setLayoutX(10.0);
        dateLabel.setLayoutY(30.0);

        // Add rating stars
        HBox ratingStars = new HBox();
        ratingStars.setLayoutX(425);
        ratingStars.setLayoutY(10);

        ToggleGroup ratingGroup = new ToggleGroup(); // Create a ToggleGroup

        // Method to update star colors based on the appointment's rating
        Runnable updateStarColors = () -> {
            int appointmentRating = appointment.getRating();
            ratingStars.getChildren().forEach(node -> {
                if (node instanceof ToggleButton) {
                    ToggleButton starButton = (ToggleButton) node;
                    int starValue = (int) starButton.getUserData();
                    if (starValue <= appointmentRating) {
                        starButton.setTextFill(Color.GOLD); // Apply gold color for filled stars
                    } else {
                        starButton.setTextFill(Color.LIGHTGRAY); // Apply light gray color for empty stars
                    }
                }
            });
        };

        // Add stars and attach action listener
        for (int i = 1; i <= 5; i++) {
            ToggleButton starButton = new ToggleButton("★");
            starButton.setUserData(i); // Set the rating as user data
            starButton.setOnAction(event -> {
                int selectedRating = (int) starButton.getUserData();
                // Update the appointment's rating
                updateAppointmentRating(appointment, selectedRating);
                // Refresh star colors
                updateStarColors.run();
                refreshAppointmentsGrid();
            });
            starButton.setToggleGroup(ratingGroup); // Add button to the ToggleGroup
            starButton.getStyleClass().add("star"); // Apply the star class
            ratingStars.getChildren().add(starButton);
        }

        // Add the labels and rating stars to the card
        appointmentCard.getChildren().addAll(descriptionLabel, dateLabel, ratingStars);

        // Update star colors initially
        updateStarColors.run();

        return appointmentCard;
    }

    private void updateAppointmentRating(Appointment appointment, int rating) {
        appointment.setRating(rating);
        // Call your service method to update the rating in the database
        appointmentService.updateAppointment(appointment);
    }
    private void deleteAppointment(Appointment appointment) {
        if (confirmDeletion()) {
            appointmentService.deleteAppointment(appointment.getId());
            System.out.println("Appointment with ID: " + appointment.getId() + " was deleted.");
            sendNotificationSMSForDeletedAppointment();
            refreshAppointmentsGrid();
        }
    }
    public void sendNotificationSMSForDeletedAppointment() {
        // Construct notification message with clear formatting
        String notificationMessage = "Réservation a été annulée.";

        // Send SMS using your preferred SMS library (implementation not provided)
        SMS.sendSMS("+21658732642", notificationMessage); // Replace with actual SMS sending logic
    }

    private boolean confirmDeletion() {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirm Deletion");
        alert.setHeaderText("Delete Appointment");
        alert.setContentText("Are you sure you want to delete this appointment?");

        ButtonType buttonTypeYes = new ButtonType("Yes", ButtonBar.ButtonData.YES);
        ButtonType buttonTypeNo = new ButtonType("No", ButtonBar.ButtonData.NO);

        alert.getButtonTypes().setAll(buttonTypeYes, buttonTypeNo);

        Optional<ButtonType> result = alert.showAndWait();
        return result.isPresent() && result.get() == buttonTypeYes;
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

    private void editAppointment(Appointment appointment) {
        try {
            // Load the FXML file for the edit appointment view
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/AppointmentModify.fxml"));
            AnchorPane editView = loader.load();

            // Pass the appointment ID or the entire appointment object to the edit view
            AppointmentEditController editController = loader.getController();
            editController.initData(appointment);

            // Get the Scene and Stage to set the scene
            Scene scene = new Scene(editView);
            Stage stage = (Stage) addAppointmentButton.getScene().getWindow(); // Assuming addAppointmentButton is in the same scene as editAppointment
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace(); // Log the exception
        }
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
            String session =Session.getInstance().getUserSession().get("email").toString();
            int id = appointmentService.getUserIDByEmail(session);
            // Fetch appointments for the desired time range
            LocalDate dateFocus = LocalDate.now(); // Or any other date you want to focus on
            List<Appointment> appointments = appointmentService.fetchAppointmentsByPatientId(id); // Or fetchAppointmentsForWeek depending on your requirements

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

    @FXML
    private void navigateToDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }


    public void NavigateToDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

    public void NavigateToLaboratoires(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
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
