package tn.esprit.controllers.portalController;

import com.calendarfx.model.Entry;
import com.calendarfx.view.CalendarView;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ChoiceBox;
import tn.esprit.models.Appointment;
import tn.esprit.services.UserService;

import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;


public class CalendarController implements Initializable {

    @FXML
    private CalendarView calendarView;
    @FXML
    private ChoiceBox<String> statusFilterChoiceBox;
    private  final UserService us = new UserService();
    // Public method to set appointments
    public void setAppointmentsPublic(List<Appointment> appointments) {
        setAppointments(appointments);
    }

    // Private method to set appointments
    private void setAppointments(List<Appointment> appointments) {
        for (Appointment appointment : appointments) {
            // Convert Appointment to CalendarFX Entry

            Entry<?> entry = new Entry<>(appointment.getDescription());
            entry.setInterval(appointment.getStartDate(), appointment.getEndDate());

            // Set other properties of the entry as needed

            // Add the entry to the calendar
            calendarView.getCalendarSources().get(0).getCalendars().get(0).addEntry(entry);
        }
    }


    @FXML
    private void initialize() {
        // Initialize the status filter choice box with options
        statusFilterChoiceBox.getItems().addAll("All", "Pending", "Confirmed", "Cancelled");

        // Set a default filter option
        statusFilterChoiceBox.setValue("All");
    }

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {

    }

}
