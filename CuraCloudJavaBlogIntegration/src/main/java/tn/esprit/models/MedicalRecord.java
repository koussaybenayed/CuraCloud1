package tn.esprit.models;

public class MedicalRecord {
    private int id;
    private String medicalHistory;
    private String surgicalHistory;
    private String familyHistory;
    private String allergies; //class
    private float height;
    private float weight;
    private String bloodType;
    private String diseases;
    private String medications;
    private String vaccines;
    private String patientName;
    private int idPatient;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getMedicalHistory() {
        return medicalHistory;
    }

    public void setMedicalHistory(String medicalHistory) {
        this.medicalHistory = medicalHistory;
    }

    public String getSurgicalHistory() {
        return surgicalHistory;
    }

    public void setSurgicalHistory(String surgicalHistory) {
        this.surgicalHistory = surgicalHistory;
    }

    public String getFamilyHistory() {
        return familyHistory;
    }

    public void setFamilyHistory(String familyHistory) {
        this.familyHistory = familyHistory;
    }

    public String getAllergies() {
        return allergies;
    }

    public void setAllergies(String allergies) {
        this.allergies = allergies;
    }

    public float getHeight() {
        return height;
    }

    public void setHeight(float height) {
        this.height = height;
    }

    public float getWeight() {
        return weight;
    }

    public void setWeight(float weight) {
        this.weight = weight;
    }

    public String getBloodType() {
        return bloodType;
    }

    public void setBloodType(String bloodType) {
        this.bloodType = bloodType;
    }

    public String getDiseases() {
        return diseases;
    }

    public void setDiseases(String diseases) {
        this.diseases = diseases;
    }

    public String getMedications() {
        return medications;
    }

    public void setMedications(String medications) {
        this.medications = medications;
    }

    public String getVaccines() {
        return vaccines;
    }

    public void setVaccines(String vaccines) {
        this.vaccines = vaccines;
    }

    public String getPatientName() {
        return patientName;
    }

    public void setPatientName(String patientName) {
        this.patientName = patientName;
    }

    public MedicalRecord() {
    }

    public MedicalRecord(int id) {
        this.id = id;
    }

    public MedicalRecord(int id, String medicalHistory, String surgicalHistory, String familyHistory, String allergies, float height, float weight, String bloodType, String diseases, String medications, String vaccines, String patientName, int idPatient) {
        this.id = id;
        this.medicalHistory = medicalHistory;
        this.surgicalHistory = surgicalHistory;
        this.familyHistory = familyHistory;
        this.allergies = allergies;
        this.height = height;
        this.weight = weight;
        this.bloodType = bloodType;
        this.diseases = diseases;
        this.medications = medications;
        this.vaccines = vaccines;
        this.patientName = patientName;
        this.idPatient = idPatient;
    }

    public MedicalRecord(String medicalHistory, String surgicalHistory, String familyHistory, String allergies, float height, float weight, String bloodType, String diseases, String medications, String vaccines, String patientName, int idPatient) {
        this.medicalHistory = medicalHistory;
        this.surgicalHistory = surgicalHistory;
        this.familyHistory = familyHistory;
        this.allergies = allergies;
        this.height = height;
        this.weight = weight;
        this.bloodType = bloodType;
        this.diseases = diseases;
        this.medications = medications;
        this.vaccines = vaccines;
        this.patientName = patientName;
        this.idPatient = idPatient;
    }

    public int getIdPatient() {
        return idPatient;
    }

    public void setIdPatient(int idPatient) {
        this.idPatient = idPatient;
    }

    @Override
    public String toString() {
        return "MedicalRecord{" +
                "id=" + id +
                ", medicalHistory='" + medicalHistory + '\'' +
                ", surgicalHistory='" + surgicalHistory + '\'' +
                ", familyHistory='" + familyHistory + '\'' +
                ", allergies='" + allergies + '\'' +
                ", height=" + height +
                ", weight=" + weight +
                ", bloodType='" + bloodType + '\'' +
                ", diseases='" + diseases + '\'' +
                ", medications='" + medications + '\'' +
                ", vaccines='" + vaccines + '\'' +
                ", patientName='" + patientName + '\'' +
                ", idPatient='" + idPatient + '\'' +
                '}';
    }
}
