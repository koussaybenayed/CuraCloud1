package tn.esprit.interfaces;

import java.util.List;
import tn.esprit.models.Meds;

public interface MedsInterface {
    // Create
    void addMeds(Meds meds);

    // Read
    Meds getMedsById(Long id);
    List<Meds> getAllMeds();

    // Update
    void updateMeds(Meds meds);

    // Delete
    void deleteMeds(Long id);
}
