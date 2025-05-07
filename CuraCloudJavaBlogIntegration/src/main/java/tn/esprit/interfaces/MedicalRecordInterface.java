package tn.esprit.interfaces;

import javafx.collections.ObservableList;
import tn.esprit.models.MedicalRecord;
import tn.esprit.models.User;

import java.util.List;
public interface MedicalRecordInterface {


    void addMedicalRecord(MedicalRecord mr);

    List<MedicalRecord> fetchMedicalRecords();

    void updateMedicalRecord(MedicalRecord mr);

    void deleteMedicalRecord(int id);

    ObservableList<User> fetchClients();

    boolean isMedicalRecordExists(int patientId);

    List<MedicalRecord> fetchMedicalRecordByPatientId(int patientId);
}
