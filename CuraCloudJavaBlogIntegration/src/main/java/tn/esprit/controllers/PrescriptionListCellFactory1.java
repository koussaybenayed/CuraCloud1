package tn.esprit.controllers;
import tn.esprit.models.Meds;
import tn.esprit.models.Prescription;
import javafx.scene.control.ListCell;
import javafx.scene.control.ListView;
import javafx.util.Callback;

public class PrescriptionListCellFactory1 implements Callback<ListView<Prescription>, ListCell<Prescription>> {
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
                    StringBuilder stringBuilder = new StringBuilder();
                    stringBuilder.append("Your medications: ");
                    for (Meds med : prescription.getMedications()) {
                        stringBuilder.append(med.getName()).append(", ");
                    }
                    stringBuilder.delete(stringBuilder.length() - 2, stringBuilder.length()); // Remove the last comma and space
                    float totalPrice = prescription.getMedications().stream().map(Meds::getPrice).reduce(0f, Float::sum);
                    stringBuilder.append(" and their estimated price: $").append(totalPrice);
                    setText(stringBuilder.toString());
                }
            }
        };
    }
}
