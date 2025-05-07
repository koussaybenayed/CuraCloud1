package tn.esprit.controllers;
import tn.esprit.models.Meds;
import tn.esprit.models.Prescription;
import javafx.scene.control.ListCell;
import javafx.scene.control.ListView;
import javafx.util.Callback;

import java.text.SimpleDateFormat;

public class PrescriptionListCellFactory2 implements Callback<ListView<Prescription>, ListCell<Prescription>> {
    @Override
    public ListCell<Prescription> call(ListView<Prescription> listView) {
        return new ListCell<Prescription>() {
            @Override
            protected void updateItem(Prescription prescription, boolean empty) {
                super.updateItem(prescription, empty);
                if (empty || prescription == null) {
                    setText(null);
                } else {
                    // Customize the display for each Prescription item
                    SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
                    StringBuilder stringBuilder = new StringBuilder();
                    stringBuilder.append("Your Prescription was created at: ")
                            .append(dateFormat.format(prescription.getCreationDate()))
                            .append(", and contains: ");
                    for (Meds med : prescription.getMedications()) {
                        stringBuilder.append(med.getName()).append(", ");
                    }
                    if (!prescription.getMedications().isEmpty()) {
                        stringBuilder.delete(stringBuilder.length() - 2, stringBuilder.length()); // Remove the last comma and space
                    }
                    setText(stringBuilder.toString());
                }
            }
        };
    }
}
