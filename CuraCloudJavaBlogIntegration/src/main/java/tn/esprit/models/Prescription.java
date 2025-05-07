package tn.esprit.models;
import java.util.Date;
import java.util.List;

public class Prescription {

    private long id;
    private String duration;
    private Date creationDate;
    private List<Meds> medications;// List of medications associated with this prescription

    private int user_id;

    public Prescription(String duration, Date creationDate, List<Meds> medications) {
        this.duration = duration;
        this.creationDate = creationDate;
        this.medications = medications;
    }

    public Prescription(String duration, Date creationDate, List<Meds> medications, int user_id) {
        this.duration = duration;
        this.creationDate = creationDate;
        this.medications = medications;
        this.user_id = user_id;
    }

    // Getters and setters...

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public String getDuration() {
        return duration;
    }

    public void setDuration(String duration) {
        this.duration = duration;
    }

    public Date getCreationDate() {
        return creationDate;
    }

    public void setCreationDate(Date creationDate) {
        this.creationDate = creationDate;
    }

    public List<Meds> getMedications() {
        return medications;
    }

    public void setMedications(List<Meds> medications) {
        this.medications = medications;
    }

    public int getUser_id() {
        return user_id;
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }

    @Override
    public String toString() {
        return "Prescription{" +
                "id " + id +
                ", duration '" + duration + '\'' +
                ", creationDate " + creationDate +
                ", Medications " + medications +
                '}';
    }
}
