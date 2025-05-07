package tn.esprit.controllers.labController;

import boofcv.struct.flow.ImageFlow;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.services.DiagnosticRequestService;
import tn.esprit.services.Session;
import tn.esprit.util.MaConnexion;

import java.sql.*;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class AddDiagnosticRequest {

    //Att

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
        private Label AnalyseTypeTextId;
        @FXML
        private Label radiologietypetextId;
        @FXML
        private TableColumn<DiagnosticRequestService, Void> ActionsUpdateId;

        @FXML
        private TextField PatientEmail;

        @FXML
        private ComboBox<?> radiotypeid;

        Connection cnx = MaConnexion.getInstance().getCnx();
        private final DiagnosticRequestService drs = new DiagnosticRequestService();
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

        @FXML
        void initialize(){
            //ComboBox :
            addDiagnosticTypeList();
            addDiagnosticAnalyseList();
            addDiagnosticStatusList();
            addDiagnosticRadioList();

            //Definir la valeur par défaut de la creation date avec la date du systeme
            CreationDateId.setValue(LocalDate.now());

            // Définir une action lors de la sélection de l'élément dans TypeId
            TypeId.setOnAction(event -> {
                String selectedType = (String) TypeId.getValue();
                if (selectedType.equals("Analyse")) {
                    analyseTypeId.setVisible(true);
                    radiotypeid.setVisible(false);
                } else if (selectedType.equals("Radiologie")) {
                    analyseTypeId.setVisible(false);
                    radiotypeid.setVisible(true);
                }
            });
        }


        @FXML
        void AddDiagnostic(ActionEvent event) {
            if (validateFields()) {

                // Assuming you have a method to retrieve the user ID based on the email
                // Here, I'm using a placeholder variable for the user ID
                int loggedInUserId = getUserIDByEmail(PatientEmail.getText()); // Replace this with your actual method call
               if (CreationDateId.getValue() != null) {
                    // Obtenez les valeurs sélectionnées dans les DatePicker
                    LocalDate selectedCreationDate = CreationDateId.getValue();
                    // Convertissez les LocalDates en java.sql.Date
                    java.sql.Date realisationDateValue = java.sql.Date.valueOf(selectedCreationDate);
                    try {
                        //drs.add(new DiagnosticRequest(TypeId.getValue().toString(), analyseTypeId.getValue().toString(), DoctorNotesId.getText(), StatusId.getValue().toString(), realisationDateValue),loggedInUserId );
                        drs.add(new DiagnosticRequest(analyseTypeId.getValue().toString(), StatusId.getValue().toString(), DoctorNotesId.getText(), TypeId.getValue().toString(),realisationDateValue, loggedInUserId));
                        showSuccess("Diagnostic added successfully ");

                    } catch (SQLException e) {
                        showError(e.getMessage());
                    }
               }
            }else{

            }
        }


    //Control saisie
    private boolean validateFields() {
            //Check if fields are empty
        if (TypeId.getTypeSelector() == null ||
                analyseTypeId.getTypeSelector() == null ||
                DoctorNotesId.getText().isEmpty() ||
                StatusId.getTypeSelector() == null) {
            showError("Please fill in all required fields.");
            return false;
        }
        return true; // Tous les champs sont valides
    }

    //Error Message
    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setContentText(message);
        alert.showAndWait();
    }
    //Success Message
    private void showSuccess(String message){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Method to retrieve the user ID based on the email
    private int getUserIDByEmail(String email) {
        String query = "SELECT id FROM user WHERE email = ?";
        int userId = 0; // Default value if user ID is not found

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setString(1, email);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                userId = resultSet.getInt("id");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return userId;
    }


}
