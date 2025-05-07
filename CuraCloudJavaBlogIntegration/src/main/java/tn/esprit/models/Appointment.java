package tn.esprit.models;

import java.time.LocalDateTime;

public class Appointment {
    private int id;
    private String description;
    private String status;
    private LocalDateTime startDate;
    private LocalDateTime endDate;
    private int rating;
    private int idPatient;
    private int idDoctor;

    public int getIdDoctor() {
        return idDoctor;
    }

    public void setIdDoctor(int idDoctor) {
        this.idDoctor = idDoctor;
    }

    public int getIdPatient() {
        return idPatient;
    }

    public void setIdPatient(int idPatient) {
        this.idPatient = idPatient;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public LocalDateTime getStartDate() {
        return startDate;
    }

    public void setStartDate(LocalDateTime startDate) {
        this.startDate = startDate;
    }

    public LocalDateTime getEndDate() {
        return endDate;
    }

    public void setEndDate(LocalDateTime endDate) {
        this.endDate = endDate;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public Appointment() {
    }

    public Appointment(int id) {
        this.id = id;
    }

    public Appointment(int id, String description, String status, LocalDateTime startDate, LocalDateTime endDate, int rating, int idPatient, int idDoctor) {
        this.id = id;
        this.description = description;
        this.status = status;
        this.startDate = startDate;
        this.endDate = endDate;
        this.rating = rating;
        this.idPatient = idPatient;
        this.idDoctor = idDoctor;
    }

    public Appointment(String description, String status, LocalDateTime startDate, LocalDateTime endDate, int rating, int idPatient, int idDoctor) {
        this.description = description;
        this.status = status;
        this.startDate = startDate;
        this.endDate = endDate;
        this.rating = rating;
        this.idPatient = idPatient;
        this.idDoctor = idDoctor;
    }

    @Override
    public String toString() {
        return "Appointment{" +
                "id=" + id +
                ", description='" + description + '\'' +
                ", status='" + status + '\'' +
                ", startDate=" + startDate +
                ", endDate=" + endDate +
                ", rating=" + rating +
                ", idPatient=" + idPatient +
                ", idDoctor=" + idDoctor +
                '}';
    }
}
