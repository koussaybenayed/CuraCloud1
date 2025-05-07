package tn.esprit.interfaces;
import java.util.List;
import tn.esprit.models.Prescription;

public interface PrescriptionInterface {
    // Create
    void addPrescription(Prescription prescription);

    // Read
    Prescription getPrescriptionById(long id);
    List<Prescription> getAllPrescriptions();
    List<Prescription> getAllPrescriptions1();

    // Update
    void updatePrescription(Prescription prescription);

    // Delete
    void deletePrescription(long id);


}
