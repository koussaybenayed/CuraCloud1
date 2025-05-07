package tn.esprit.models;


import java.sql.Date;
import java.util.ArrayList;
import java.util.List;

public class DiagnosticRequest {
    //Att
    private int id ;
    private String analyseType,status,doctorNotes,type,radioType;
    private Date creationDate;
    private int id_patient_id;

    private List<Bilan> bilans; // Liste des bilans associés


    //Constructor

    public DiagnosticRequest() {
        this.bilans = new ArrayList<>();
    }


    public DiagnosticRequest(int id, String analyseType, String status, String doctorNotes, String type, String radioType, Date creationDate) {
        this.id = id;
        this.analyseType = analyseType;
        this.status = status;
        this.doctorNotes = doctorNotes;
        this.type = type;
        this.radioType = radioType;
        this.creationDate = creationDate ;
    }
    public DiagnosticRequest(String type,String analyseType,String doctorNotes,String status,Date creationDate){

        this.analyseType = analyseType;
        this.status = status;
        this.doctorNotes = doctorNotes;
        this.type = type;
        this.creationDate = creationDate ;
    }

    public DiagnosticRequest(String analyseType, String status, String doctorNotes, String type, Date creationDate, int id_patient_id) {
        this.analyseType = analyseType;
        this.status = status;
        this.doctorNotes = doctorNotes;
        this.type = type;
        this.creationDate = creationDate;
        this.id_patient_id = id_patient_id;
    }

    public DiagnosticRequest(String analyseType, String status, String doctorNotes, String type, String radioType, Date creationDate) {
        this.analyseType = analyseType;
        this.status = status;
        this.doctorNotes = doctorNotes;
        this.type = type;
        this.radioType = radioType;
        this.creationDate = creationDate ;
    }



    //Getters + Setters

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getAnalyseType() {
        return analyseType;
    }

    public void setAnalyseType(String analyseType) {
        this.analyseType = analyseType;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getDoctorNotes() {
        return doctorNotes;
    }

    public void setDoctorNotes(String doctorNotes) {
        this.doctorNotes = doctorNotes;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getRadioType() {
        return radioType;
    }

    public void setRadioType(String radioType) {
        this.radioType = radioType;
    }

    public Date getCreationDate() {
        return creationDate;
    }

    public void setCreationDate(Date creationDate) {
        this.creationDate = creationDate;
    }

    public List<Bilan> getBilans() {
        return bilans;
    }

    public void setBilans(List<Bilan> bilans) {
        this.bilans = bilans;
    }
    public void addBilan(Bilan bilan) {
        this.bilans.add(bilan);
    }

    public void removeBilan(Bilan bilan) {
        this.bilans.remove(bilan);
    }

    public int getId_patient_id() {
        return id_patient_id;
    }

    public void setId_patient_id(int id_patient_id) {
        this.id_patient_id = id_patient_id;
    }

    //Display

    @Override
    public String toString() {
        return "DiagnosticRequest{" +
                "id=" + id +
                ", analyseType='" + analyseType + '\'' +
                ", status='" + status + '\'' +
                ", doctorNotes='" + doctorNotes + '\'' +
                ", type='" + type + '\'' +
                ", radioType='" + radioType + '\'' +
                ", creationDate=" + creationDate +
                '}';
    }
}
