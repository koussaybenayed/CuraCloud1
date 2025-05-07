package tn.esprit.util;

import com.calendarfx.model.Calendar;
import com.calendarfx.model.Entry;
import tn.esprit.models.Appointment;

public class AppointmentMapper {
    public static Entry<?> mapAppointmentToEntry(Appointment appointment) {
        Entry<?> entry = new Entry<>(appointment.getDescription());
        // Set other properties of the entry based on the appointment

        // Example: Set the calendar color based on the appointment status
        Calendar calendar = new Calendar(appointment.getStatus());
        if (appointment.getStatus().equals("Pending")) {
            calendar.setStyle(Calendar.Style.STYLE1);
        } else if (appointment.getStatus().equals("Confirmed")) {
            calendar.setStyle(Calendar.Style.STYLE2);
        } else {
            calendar.setStyle(Calendar.Style.STYLE3);
        }

        entry.setCalendar(calendar);
        return entry;
    }
}

