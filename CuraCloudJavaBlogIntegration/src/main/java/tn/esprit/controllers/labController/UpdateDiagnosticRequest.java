package tn.esprit.controllers.labController;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.stage.Stage;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.services.DiagnosticRequestService;

import java.util.ArrayList;
import java.util.List;

public class UpdateDiagnosticRequest {
    @FXML
    private Label AnalyseTypeTextId;

    @FXML
    private DatePicker CreationDateId;

    @FXML
    private TextArea DoctorNotesId;

    @FXML
    private ComboBox<String> StatusId;

    @FXML
    private Button SubmitDiagnosticBtn;

    @FXML
    private ComboBox<String> TypeId;

    @FXML
    private ComboBox<String> analyseTypeId;

    @FXML
    private ComboBox<String> radiotypeid;
    private String [] typeList ={"Analyse","Radiologie"};
    private String [] analyseList ={"Complete Blood Count (CBC)","Basic Metabolic Panel (BMP)","Comprehensive Metabolic Panel (CMP)" +
            "Lipid Panel","Thyroid Function Tests","Blood Gas Tests","Electrolyte Panel"};
    private String [] statusList = {"Done","In Progress","Canceled"};
    private String [] radioList = {"Magnetic Resonance Imaging (MRI)","Ultrasound (Sonography)",
            "Fluoroscopy", "Angiography",};

    public void addDiagnosticTypeList(){
        List<String> typeL = new ArrayList<>();
        for(String data : typeList){
            typeL.add(data);
        }
        ObservableList observableList = FXCollections.observableList(typeL);
        TypeId.setItems(observableList);

    }
    public void addDiagnosticAnalyseList(){
        List<String> analyseL = new ArrayList<>();
        for(String data : analyseList){
            analyseL.add(data);
        }
        ObservableList observableList = FXCollections.observableList(analyseL);
        analyseTypeId.setItems(observableList);

    }
    public void addDiagnosticStatusList(){
        List<String> satusL = new ArrayList<>();
        for(String data : statusList){
            satusL.add(data);
        }
        ObservableList observableList = FXCollections.observableList(satusL);
        StatusId.setItems(observableList);

    }
    public void addDiagnosticRadioList(){
        List<String> radioL = new ArrayList<>();
        for(String data : radioList){
            radioL.add(data);
        }
        ObservableList observableList = FXCollections.observableList(radioL);
        radiotypeid.setItems(observableList);

    }

    // Variable pour stocker le diagnostic actuel
    private DiagnosticRequest currentDiagnostic;

    @FXML
    public void initialize() {
        //ComboBox :
        addDiagnosticTypeList();
        addDiagnosticAnalyseList();
        addDiagnosticStatusList();
        addDiagnosticRadioList();

    }

    public void fillFormWithDiagnostic(DiagnosticRequest diagnosticRequest) {
        // Assurez-vous que le diagnostic n'est pas nul
        if (diagnosticRequest != null) {
            currentDiagnostic = diagnosticRequest; // Stockez le diagnostic actuel

            // Remplissez les champs du formulaire avec les données du diagnostic
           // AnalyseTypeTextId.setText(diagnosticRequest.getAnalyseType());
            CreationDateId.setValue(diagnosticRequest.getCreationDate().toLocalDate());
            DoctorNotesId.setText(diagnosticRequest.getDoctorNotes());
            StatusId.setValue(diagnosticRequest.getStatus());
            TypeId.setValue(diagnosticRequest.getType());
            analyseTypeId.setValue(diagnosticRequest.getAnalyseType());
            radiotypeid.setValue(diagnosticRequest.getRadioType());
        }
    }

    // Ajoutez ici des méthodes pour gérer l'action du bouton de soumission et toute autre logique nécessaire
    @FXML
    void UpadateDiagnostic(ActionEvent event) {
        int diagnosticId = currentDiagnostic.getId();

// Vérifiez d'abord si un diagnostic est sélectionné
        if (currentDiagnostic != null) {
            // Mettez à jour les champs du diagnostic avec les valeurs du formulaire
           // currentDiagnostic.setAnalyseType(AnalyseTypeTextId.getText());
            currentDiagnostic.setCreationDate(java.sql.Date.valueOf(CreationDateId.getValue()));
            currentDiagnostic.setDoctorNotes(DoctorNotesId.getText());
            currentDiagnostic.setStatus(StatusId.getValue());
            currentDiagnostic.setType(TypeId.getValue());
            currentDiagnostic.setAnalyseType(analyseTypeId.getValue());
            currentDiagnostic.setRadioType(radiotypeid.getValue());

            // Maintenant, vous devez mettre à jour ces données dans la base de données
            // Vous pouvez utiliser une méthode de votre modèle de données pour effectuer cette mise à jour
            // Par exemple, si vous avez une classe DAO pour les diagnostics, vous pouvez appeler sa méthode de mise à jour ici

            // Exemple fictif d'une classe DAO pour les diagnostics
            DiagnosticRequestService diagnosticDAO = new DiagnosticRequestService(); // À adapter selon votre conception
            boolean success = false;
            success = diagnosticDAO.updateDiagnostic(diagnosticId,currentDiagnostic);

            if (success) {
                // Affichez un message de succès ou effectuez d'autres actions nécessaires
                System.out.println("Diagnostic mis à jour avec succès !");
                showAlert(Alert.AlertType.INFORMATION, "Success", "Diagnostic updated successfully.");

                // Fermez la fenêtre
                Stage stage = (Stage) SubmitDiagnosticBtn.getScene().getWindow(); // Remplacez SubmitDiagnosticBtn par le nom de votre bouton
                stage.close();

            } else {
                // Affichez un message d'erreur ou gérez l'échec de la mise à jour
                System.out.println("Erreur lors de la mise à jour du diagnostic.");
                showAlert(Alert.AlertType.ERROR, "Error", "Failed to update diagnostic.");
            }
        } else {
            // Si aucun diagnostic n'est sélectionné, affichez un message d'erreur ou gérez cette situation
            System.out.println("Aucun diagnostic sélectionné pour la mise à jour.");
        }
    }

    // Méthode pour afficher une boîte de dialogue d'alerte
    private void showAlert(Alert.AlertType type, String title, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }



}

