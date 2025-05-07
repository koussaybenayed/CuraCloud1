package tn.esprit.controllers.portalController;

import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import tn.esprit.models.Appointment;
import tn.esprit.models.User;
import tn.esprit.services.AppointmentService;
import tn.esprit.services.SMS;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.net.URLEncoder;
import java.nio.charset.StandardCharsets;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.time.format.DateTimeParseException;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;

public class AppointmentEditController {

    @FXML
    private Button DashboardBtnId;

    @FXML
    private TextField Description;

    @FXML
    private ListView<String> availableSlotsListView;

    @FXML
    private DatePicker appointmentDate;

    @FXML
    private ComboBox<User> doctorComboBox;

    @FXML
    private ComboBox<User> patientComboBox;

    @FXML
    private Spinner<String> startTimeSpinner;

    @FXML
    private Spinner<String> endTimeSpinner;
    @FXML


    private final AppointmentService ps = new AppointmentService();
    private final UserService userService = new UserService();
    private Appointment appointmentToEdit;

    public void initData(Appointment appointment) {
        this.appointmentToEdit = appointment;
        populateForm();
        populateAvailableSlots();
    }

    private void populateForm() {
        Description.setText(appointmentToEdit.getDescription());
        appointmentDate.setValue(appointmentToEdit.getStartDate().toLocalDate());
        startTimeSpinner.getValueFactory().setValue(appointmentToEdit.getStartDate().toLocalTime().format(DateTimeFormatter.ofPattern("HH:mm")));
        endTimeSpinner.getValueFactory().setValue(appointmentToEdit.getStartDate().toLocalTime().format(DateTimeFormatter.ofPattern("HH:mm")));

        // Select doctor and patient in ComboBoxes based on appointment data
        User selectedDoctor = doctorComboBox.getItems().stream()
                .filter(doctor -> doctor.getId() == appointmentToEdit.getIdDoctor())
                .findFirst()
                .orElse(null);

        if (selectedDoctor != null) {
            doctorComboBox.getSelectionModel().select(selectedDoctor);
        }

        patientComboBox.getSelectionModel().select(appointmentToEdit.getIdPatient());
    }

    @FXML
    private void initialize() {
        String session =Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = ps.getUserIDByEmail(session);
        ObservableList<User> doctors = ps.fetchDoctors();
        ObservableList<User> clients = ps.fetchClients();
        initializeTimeSpinners();
        loadUsersIntoComboBox(doctorComboBox, doctors);
        loadUsersIntoComboBox(patientComboBox, clients);

        if (role.equals("[\"ROLE_DOCTOR\"]")) {
            doctorComboBox.setValue(doctors.stream().filter(user -> user.getId() == id).findFirst().orElse(null));
            doctorComboBox.setDisable(true); // Disable the ComboBox
            doctorComboBox.setStyle("-fx-opacity: 0.5;"); // Set opacity to gray out the ComboBox
        } else if (role.equals("[\"ROLE_PATIENT\"]")) {
            patientComboBox.setValue(clients.stream().filter(user -> user.getId() == id).findFirst().orElse(null));
            patientComboBox.setDisable(true); // Disable the ComboBox
            patientComboBox.setStyle("-fx-opacity: 0.5;"); // Set opacity to gray out the ComboBox
        }

        availableSlotsListView.setOnMouseClicked(event -> {
            if (event.getClickCount() == 2) {
                String selectedTime = availableSlotsListView.getSelectionModel().getSelectedItem();
                if (selectedTime != null) {
                    updateDateTimeFields(selectedTime);
                }
            }
        });
    }
    private void initializeTimeSpinners() {
        // Define a SpinnerValueFactory for strings representing time values with 30-minute steps
        SpinnerValueFactory<String> startTimeValueFactory = new SpinnerValueFactory<>() {
            {
                // Set the default value to 08:00
                setValue("08:00");
            }

            @Override
            public void decrement(int steps) {
                // Decrease the time by 30 minutes when decrementing
                LocalTime currentTime = LocalTime.parse(getValue(), DateTimeFormatter.ofPattern("HH:mm"));
                LocalTime newTime = currentTime.minusMinutes(30 * steps);
                // Ensure the time does not go below 08:00
                setValue(newTime.isBefore(LocalTime.parse("08:00")) ? "08:00" : newTime.format(DateTimeFormatter.ofPattern("HH:mm")));
            }

            @Override
            public void increment(int steps) {
                // Increase the time by 30 minutes when incrementing
                LocalTime currentTime = LocalTime.parse(getValue(), DateTimeFormatter.ofPattern("HH:mm"));
                LocalTime newTime = currentTime.plusMinutes(30 * steps);
                // Ensure the time does not go beyond 17:00
                setValue(newTime.isAfter(LocalTime.parse("16:30")) ? "16:30" : newTime.format(DateTimeFormatter.ofPattern("HH:mm")));
            }
        };

        // Set the value factory to the startTimeSpinner
        startTimeSpinner.setValueFactory(startTimeValueFactory);

        // Create a change listener for the start time spinner
        ChangeListener<String> startTimeChangeListener = new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                // Update the end time spinner value to be 30 minutes ahead of the new start time
                LocalTime newStartTime = LocalTime.parse(newValue, DateTimeFormatter.ofPattern("HH:mm"));
                LocalTime newEndTime = newStartTime.plusMinutes(30);
                // Ensure the new end time does not exceed 17:00
                if (newEndTime.isAfter(LocalTime.parse("17:00"))) {
                    endTimeSpinner.getValueFactory().setValue("17:00");
                } else {
                    endTimeSpinner.getValueFactory().setValue(newEndTime.format(DateTimeFormatter.ofPattern("HH:mm")));
                }
            }
        };

        // Add the change listener to the value property of the start time spinner
        startTimeSpinner.valueProperty().addListener(startTimeChangeListener);

        // Initialize the end time spinner with the default value 30 minutes ahead of the start time
        SpinnerValueFactory<String> endTimeValueFactory = new SpinnerValueFactory<>() {
            {
                // Set the default value to 08:30
                setValue("08:30");
            }

            @Override
            public void decrement(int steps) {
                // Decrease the time by 30 minutes when decrementing
                LocalTime currentTime = LocalTime.parse(getValue(), DateTimeFormatter.ofPattern("HH:mm"));
                LocalTime newTime = currentTime.minusMinutes(30 * steps);
                // Ensure the time does not go below 08:00
                setValue(newTime.isBefore(LocalTime.parse("08:00")) ? "08:00" : newTime.format(DateTimeFormatter.ofPattern("HH:mm")));
            }

            @Override
            public void increment(int steps) {
                // Increase the time by 30 minutes when incrementing
                LocalTime currentTime = LocalTime.parse(getValue(), DateTimeFormatter.ofPattern("HH:mm"));
                LocalTime newTime = currentTime.plusMinutes(30 * steps);
                // Ensure the time does not go beyond 17:00
                setValue(newTime.isAfter(LocalTime.parse("17:00")) ? "17:00" : newTime.format(DateTimeFormatter.ofPattern("HH:mm")));
            }
        };

        // Set the value factory to the endTimeSpinner
        endTimeSpinner.setValueFactory(endTimeValueFactory);
    }
    private void loadUsersIntoComboBox(ComboBox<User> comboBox, ObservableList<User> users) {
        comboBox.setItems(users);
        comboBox.setCellFactory(lv -> new ListCell<>() {
            @Override
            protected void updateItem(User user, boolean empty) {
                super.updateItem(user, empty);
                if (empty || user == null) {
                    setText(null);
                } else {
                    setText(user.getFirst_name() + " " + user.getLast_name());
                }
            }
        });
    }
    @FXML
    void editAppointment(ActionEvent event) {
        // Modify appointment based on user input
        try {
            if (validateInputs()) {
                String startTime1 = startTimeSpinner.getValue();
                String endTime1 = endTimeSpinner.getValue();
                LocalDateTime startDateTime = combineDateTime(appointmentDate.getValue(), startTime1);
                LocalDateTime endDateTime = combineDateTime(appointmentDate.getValue(), endTime1);
                int idDoctor = doctorComboBox.getValue().getId();
                int idPatient = patientComboBox.getValue().getId();
                String description = Description.getText();

                if (isTimeSlotAvailable(startDateTime, endDateTime, idDoctor)) {
                    // If time slot is available, update the appointment
                    appointmentToEdit.setDescription(description);
                    appointmentToEdit.setStartDate(startDateTime);
                    appointmentToEdit.setEndDate(endDateTime);
                    appointmentToEdit.setIdDoctor(idDoctor);
                    appointmentToEdit.setIdPatient(idPatient);

                    // Update appointment in the database
                    ps.updateAppointment(appointmentToEdit);
                    showAlert(Alert.AlertType.INFORMATION, "Success", "Appointment updated successfully.");
                    sendNotificationSMS();

                } else {
                    // If time slot is not available, show available slots
                    List<LocalDateTime> availableSlots = getAvailableSlots(appointmentDate.getValue());
                    populateListView(availableSlots);
                    showAlert(Alert.AlertType.INFORMATION, "Time Slot Unavailable", "Time slot already booked! Please choose from the available time slots below.");
                }
            }
        } catch (DateTimeParseException e) {
            showAlert(Alert.AlertType.ERROR, "Format Error", "Please check your date and time format.");
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Error", "An unexpected error occurred: " + e.getMessage());
        }
    }

    private boolean validateInputs() {
        LocalDate today = LocalDate.now();
        String startTime1 = startTimeSpinner.getValue();
        String endTime1 = endTimeSpinner.getValue();
        if (Description.getText().trim().isEmpty() || appointmentDate.getValue() == null || startTime1.trim().isEmpty() || endTime1.trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please ensure all fields are correctly filled.");
            return false;
        }

        if (appointmentDate.getValue().isBefore(today)) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Appointment date cannot be before today's date.");
            return false;
        }

        return true;
    }
    public void sendNotificationSMS() {
        String calendarLink = generateGoogleCalendarEventLink();
        String startTime1 = startTimeSpinner.getValue();
        String endTime1 = endTimeSpinner.getValue();
        // Construct notification message with clear formatting and placeholders
        String notificationMessage = "Réservation mise à jour avec les détails suivants :\n" +
                "- Description: %s\n" +
                "- Date de rendez-vous: %s\n" +
                "- De: %s\n" +
                "- À: %s\n" +
                "Cliquez pour ajouter à votre calendrier : %s";

        // Replace placeholders with actual values
        notificationMessage = String.format(notificationMessage,
                Description.getText(),
                appointmentDate.getValue(), // Use LocalDate directly
                startTime1,
                endTime1,
                calendarLink);

        // Send SMS using your preferred SMS library (implementation not provided)
        SMS.sendSMS("+21658732642", notificationMessage); // Replace with actual SMS sending logic
        }

    public String generateGoogleCalendarEventLink() {
        try {
            // Encode special characters for safe URL inclusion
            String encodedTitle = URLEncoder.encode(Description.getText(), StandardCharsets.UTF_8);
            String encodedDescription = URLEncoder.encode(Description.getText(), StandardCharsets.UTF_8);
            String encodedLocation = ""; // Assuming location is not provided
            String startTime1 = startTimeSpinner.getValue();
            String endTime1 = endTimeSpinner.getValue();

            // Parse appointment date and time (assuming combined method available)
            LocalDateTime startDateTime = combineDateTime(appointmentDate.getValue(), startTime1);
            LocalDateTime endDateTime = combineDateTime(appointmentDate.getValue(), endTime1);

            // Format date and time strings in yyyyMMdd'T'HHmmss format (Google Calendar format)
            String formattedStartDate = startDateTime.format(DateTimeFormatter.ofPattern("yyyyMMdd'T'HHmmss"));
            String formattedEndDate = endDateTime.format(DateTimeFormatter.ofPattern("yyyyMMdd'T'HHmmss"));

            // Construct the event link with encoded parameters
            return String.format("https://www.google.com/calendar/render?action=TEMPLATE&text=%s&dates=%s/%s&details=%s&location=%s",
                    encodedTitle, formattedStartDate, formattedEndDate, encodedDescription, encodedLocation);
        } catch (Exception e) {
            System.err.println("Error generating Google Calendar event link: " + e.getMessage());
            // Handle the exception according to your requirements
            return null; // Or any default value indicating failure
        }
    }
    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(content);
        alert.showAndWait();
    }
    private LocalDateTime combineDateTime(LocalDate date, String time) throws DateTimeParseException {
        LocalTime timePart = LocalTime.parse(time, DateTimeFormatter.ofPattern("HH:mm"));
        return LocalDateTime.of(date, timePart);
    }
    private void populateAvailableSlots() {
        LocalDate selectedDate = appointmentDate.getValue();
        List<LocalDateTime> availableSlots = getAvailableSlots(selectedDate);
        populateListView(availableSlots);
    }
    private boolean isTimeSlotAvailable(LocalDateTime startDateTime, LocalDateTime endDateTime, int idDoctor) {
        List<Appointment> existingAppointments = ps.fetchAppointment().stream()
                .filter(a -> a.getIdDoctor() == idDoctor)
                .collect(Collectors.toList());

        for (Appointment appointment : existingAppointments) {
            if (appointment.getEndDate().isAfter(startDateTime) && appointment.getStartDate().isBefore(endDateTime)) {
                return false;
            }
        }
        return true;
    }
    private List<LocalDateTime> getAvailableSlots(LocalDate date) {
        List<LocalDateTime> availableSlots = new ArrayList<>();
        LocalDateTime startOfDay = date.atTime(8, 0); // 8 AM start
        LocalDateTime endOfDay = date.atTime(17, 0); // 5 PM end
        LocalDateTime currentSlot = startOfDay;

        List<Appointment> existingAppointments = ps.fetchAppointment().stream()
                .filter(a -> a.getStartDate().toLocalDate().equals(date))
                .collect(Collectors.toList());

        while (currentSlot.isBefore(endOfDay)) {
            boolean isSlotAvailable = true;
            for (Appointment appointment : existingAppointments) {
                if (!currentSlot.plusHours(1).isBefore(appointment.getStartDate()) && !currentSlot.isAfter(appointment.getEndDate())) {
                    isSlotAvailable = false;
                    break;
                }
            }
            if (isSlotAvailable) {
                availableSlots.add(currentSlot);
            }
            currentSlot = currentSlot.plusMinutes(30); // Increment by 30 minutes for more granularity
        }
        return availableSlots;
    }

    private void populateListView(List<LocalDateTime> slots) {
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("HH:mm");
        availableSlotsListView.getItems().clear();
        availableSlotsListView.getItems().addAll(slots.stream()
                .map(slot -> slot.format(formatter))
                .collect(Collectors.toList()));
    }

    @FXML
    private void navigateToAppointments(ActionEvent event) {
        try {
            String session = Session.getInstance().getUserSession().get("email").toString();
            String userRole = userService.getUserRoleByEmail(session);

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

    private void updateDateTimeFields(String selectedTime) {
        startTimeSpinner.getValueFactory().setValue(selectedTime);

        LocalTime endTime = LocalTime.parse(selectedTime, DateTimeFormatter.ofPattern("HH:mm")).plusMinutes(30);
        endTimeSpinner.getValueFactory().setValue(endTime.format(DateTimeFormatter.ofPattern("HH:mm")));
    }
    
}
