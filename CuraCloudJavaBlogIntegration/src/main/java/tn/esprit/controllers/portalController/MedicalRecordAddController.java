package tn.esprit.controllers.portalController;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.ListCell;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import tn.esprit.models.MedicalRecord;
import tn.esprit.models.User;
import tn.esprit.services.MedicalRecordService;
import tn.esprit.services.SMS;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;


public class MedicalRecordAddController {

    @FXML
    private AnchorPane bg;

    @FXML
    private TextField medicalHistoryField;

    @FXML
    private TextField surgicalHistoryField;

    @FXML
    private TextField familyHistoryField;

    @FXML
    private TextField allergiesField;

    @FXML
    private TextField heightField;

    @FXML
    private TextField weightField;

    @FXML
    private ComboBox<String> bloodTypeComboBox;

    @FXML
    private TextField diseasesField;

    @FXML
    private ComboBox<User> patientComboBox;

    @FXML
    private TextField medicationsField;

    @FXML
    private TextField vaccinesField;

    @FXML
    private TextField patientNameField;

    private final UserService userService = new UserService();

    private final MedicalRecordService medicalRecordService = new MedicalRecordService();
    public void initialize() {
        String sessionEmail = Session.getInstance().getUserSession().get("email").toString();
        int userId = medicalRecordService.getUserIDByEmail(sessionEmail);
        User patient = medicalRecordService.fetchUserById(userId);

        if (patient != null) {
            ObservableList<User> patients = FXCollections.observableArrayList(patient);
            loadUsersIntoComboBox(patientComboBox, patients);
            patientComboBox.getSelectionModel().selectFirst(); // Select the only patient in the ComboBox
            patientNameField.setText(patient.getFirst_name() + " " + patient.getLast_name());
        }
        patientComboBox.setEditable(false);
        patientComboBox.setDisable(true); // Disable the ComboBox

        patientNameField.setEditable(false);
        patientNameField.setDisable(true);

        patientComboBox.setStyle("-fx-opacity: 0.5;"); // Set opacity to 1 to make it appear non-greyed out
        patientNameField.setStyle("-fx-opacity: 0.5;"); // Set opacity to 1 to make it appear non-greyed out

        // Populate the blood type ComboBox
        bloodTypeComboBox.getItems().addAll(
                "A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"
                // Add more blood types as necessary
        );

        // Optional: Set a default selection, for example:
        bloodTypeComboBox.setValue("A+");
    }
    private void loadUsersIntoComboBox(ComboBox<User> comboBox, ObservableList<User> users) {
        comboBox.setItems(users);
        comboBox.setCellFactory(lv -> new ListCell<>() {
            @Override
            protected void updateItem(User user, boolean empty) {
                super.updateItem(user, empty);
                if (empty || user == null) {
                    setText(null);
                } else {
                    setText(user.getFirst_name() + " " + user.getLast_name());
                }
            }
        });
    }
    @FXML
    void addMedicalRecord(ActionEvent event) {
        try {
            if (validateInputs()) {
                User selectedPatient = patientComboBox.getValue();
                if (selectedPatient == null) {
                    showAlert(Alert.AlertType.ERROR, "Validation Error", "Please select a patient.");
                    return;
                }

                // Check if a medical record already exists for the selected patient
                if (medicalRecordService.isMedicalRecordExists(selectedPatient.getId())) {
                    showAlert(Alert.AlertType.ERROR, "Duplicate Record", "A medical record already exists for this patient.");
                    return;
                }

                String medicalHistory = medicalHistoryField.getText();
                String surgicalHistory = surgicalHistoryField.getText();
                String familyHistory = familyHistoryField.getText();
                String allergies = allergiesField.getText();
                float height = Float.parseFloat(heightField.getText());
                float weight = Float.parseFloat(weightField.getText());
                String bloodType = bloodTypeComboBox.getValue();
                String diseases = diseasesField.getText();
                String medications = medicationsField.getText();
                String vaccines = vaccinesField.getText();
                String patientName = patientNameField.getText();
                int idPatient = selectedPatient.getId();

                MedicalRecord newMedicalRecord = new MedicalRecord(
                        medicalHistory,
                        surgicalHistory,
                        familyHistory,
                        allergies,
                        height,
                        weight,
                        bloodType,
                        diseases,
                        medications,
                        vaccines,
                        patientName,
                        idPatient);
                medicalRecordService.addMedicalRecord(newMedicalRecord);
               // sendMedicalRecordCreationSMS(newMedicalRecord);
                showAlert(Alert.AlertType.INFORMATION, "Success", "Medical record added successfully.");
                clearForm();
            }
        } catch (NumberFormatException e) {
            showAlert(Alert.AlertType.ERROR, "Input Error", "Please enter valid numeric values for height and weight.");
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Error", "An unexpected error occurred: " + e.getMessage());
            e.printStackTrace();
        }
    }
    public void sendMedicalRecordCreationSMS(MedicalRecord medicalRecord) {
        // Construct notification message with clear formatting and placeholders
        String notificationMessage = "Nouveau dossier médical créé avec les détails suivants :\n" +
                "- Nom du patient: %s\n" +
                "- Antécédents médicaux: %s\n" +
                "- Antécédents chirurgicaux: %s\n" +
                "- Antécédents familiaux: %s\n" +
                "- Allergies: %s\n" +
                "- Taille: %s\n" +
                "- Poids: %s\n" +
                "- Groupe sanguin: %s\n" +
                "- Maladies: %s\n" +
                "- Médicaments: %s\n" +
                "- Vaccins: %s\n" ;


        // Replace placeholders with actual values from the medical record object
        notificationMessage = String.format(notificationMessage,
                medicalRecord.getMedicalHistory(),
                medicalRecord.getSurgicalHistory(),
                medicalRecord.getFamilyHistory(),
                medicalRecord.getAllergies(),
                medicalRecord.getHeight(),
                medicalRecord.getWeight(),
                medicalRecord.getBloodType(),
                medicalRecord.getDiseases(),
                medicalRecord.getMedications(),
                medicalRecord.getVaccines(),
                medicalRecord.getPatientName());

        // Send SMS using your preferred SMS library (implementation not provided)
        SMS.sendSMS("+21658732642", notificationMessage); // Replace with actual SMS sending logic
    }

    private boolean validateInputs() {
        if (medicalHistoryField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter medical history.");
            return false;
        }

        if (surgicalHistoryField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter surgical history.");
            return false;
        }

        if (familyHistoryField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter family history.");
            return false;
        }

        if (allergiesField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter allergies.");
            return false;
        }

        if (!isValidHeight()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter a valid height between " + MIN_HEIGHT_CM + " and " + MAX_HEIGHT_CM + " cm.");
            return false;
        }

        if (!isValidWeight()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter a valid weight between " + MIN_WEIGHT_KG + " and " + MAX_WEIGHT_KG + " kg.");
            return false;
        }

        if (bloodTypeComboBox.getValue() == null) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please select blood type.");
            return false;
        }

        if (diseasesField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter diseases.");
            return false;
        }

        if (medicationsField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter medications.");
            return false;
        }

        if (vaccinesField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter vaccines.");
            return false;
        }

        if (patientNameField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please enter patient name.");
            return false;
        }

        return true;
    }


    private boolean isValidHeight() {
        try {
            float height = Float.parseFloat(heightField.getText());
            return height >= MIN_HEIGHT_CM && height <= MAX_HEIGHT_CM;
        } catch (NumberFormatException e) {
            return false;
        }
    }

    private boolean isValidWeight() {
        try {
            float weight = Float.parseFloat(weightField.getText());
            return weight >= MIN_WEIGHT_KG && weight <= MAX_WEIGHT_KG;
        } catch (NumberFormatException e) {
            return false;
        }
    }

    private static final float MIN_HEIGHT_CM = 50; // Minimum height in cm
    private static final float MAX_HEIGHT_CM = 300; // Maximum height in cm

    private static final float MIN_WEIGHT_KG = 40; // Minimum weight in kg
    private static final float MAX_WEIGHT_KG = 500; // Maximum weight in kg

    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(content);
        alert.showAndWait();
    }

    private void clearForm() {
        medicalHistoryField.clear();
        surgicalHistoryField.clear();
        familyHistoryField.clear();
        allergiesField.clear();
        heightField.clear();
        weightField.clear();
        bloodTypeComboBox.getSelectionModel().clearSelection();
        diseasesField.clear();
        medicationsField.clear();
        vaccinesField.clear();
        patientNameField.clear();
    }

    @FXML
    private void returnToDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsList.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }
    @FXML
    private void navigateToAppointments(ActionEvent event) {
        try {
            String session = Session.getInstance().getUserSession().get("email").toString();
            String userRole = userService.getUserRoleByEmail(session);

            // Determine the FXML file to load based on the user's role
            String fxmlFile;
            switch (userRole) {
                case "[\"ROLE_PATIENT\"]":
                    fxmlFile = "/portalInterface/AppointmentListPatient.fxml";
                    break;
                case "[\"ROLE_DOCTOR\"]":
                    fxmlFile = "/portalInterface/AppointmentListDoctor.fxml";
                    break;
                case "Admin":
                    fxmlFile = "/portalInterface/AppointmentListAdmin.fxml";
                    break;
                default:
                    // Handle invalid or unknown role
                    System.out.println("Invalid user role: " + userRole);
                    return;
            }

            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFile));
            AnchorPane appointmentsView = loader.load();
            Scene scene = new Scene(appointmentsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

    @FXML
    private void navigateToMedicalRecords(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsList.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

}
