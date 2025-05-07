package tn.esprit.controllers.labController;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.stage.Stage;
import tn.esprit.models.Bilan;
import tn.esprit.services.BilanService;

public class UpdateBilan {
    @FXML
    private Label bilanIdLabel;

    @FXML
    private DatePicker realisationDateId;

    @FXML
    private TextArea labCommentsId;

    @FXML
    private TextField priceId;

    @FXML
    private TextArea resultId;

    @FXML
    private Button submitBilanBtn;

    private Bilan currentBilan;

    private final BilanService bilanService = new BilanService(); // Service pour gérer les opérations sur les bilans

    @FXML
    public void initialize() {
        // Initialisez les éléments de votre formulaire si nécessaire
    }

    public void fillFormWithBilan(Bilan bilan) {
        if (bilan != null) {
            currentBilan = bilan;

            //bilanIdLabel.setText(String.valueOf(bilan.getId()));

            realisationDateId.setValue(bilan.getRealisation_date().toLocalDate());
            labCommentsId.setText(bilan.getLab_comment());
            priceId.setText(String.valueOf(bilan.getPrice()));
            resultId.setText(bilan.getResult());
        }
    }


    @FXML
    void updateBilan(ActionEvent event) {

        int bilanId = currentBilan.getId();
        if (currentBilan != null) {
            // Mettez à jour les champs du bilan avec les valeurs du formulaire
            currentBilan.setRealisation_date(java.sql.Date.valueOf(realisationDateId.getValue()));
            currentBilan.setLab_comment(labCommentsId.getText());
            currentBilan.setPrice(Double.parseDouble(priceId.getText()));
            currentBilan.setResult(resultId.getText());


            // Mettez à jour le bilan dans la base de données en utilisant le service approprié
            boolean success = bilanService.updateBilan(bilanId,currentBilan);

            if (success) {
                showAlert(Alert.AlertType.INFORMATION, "Success", "Bilan updated successfully.");
                // Fermez la fenêtre après la mise à jour
                Stage stage = (Stage) submitBilanBtn.getScene().getWindow();
                stage.close();
            } else {
                showAlert(Alert.AlertType.ERROR, "Error", "Failed to update Bilan.");
            }
        } else {
            showAlert(Alert.AlertType.ERROR, "Error", "No Bilan selected for update.");
        }
    }

    private void showAlert(Alert.AlertType type, String title, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }
}
