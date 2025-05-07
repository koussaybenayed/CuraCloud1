package tn.esprit.interfaces;

import tn.esprit.models.Appointment;

import java.util.List;

public interface AppointmentInterface {

    public abstract void addAppointment(Appointment p);
    public List<Appointment> fetchAppointment();
    void updateAppointment(Appointment p);
    void deleteAppointment(int id);
}
