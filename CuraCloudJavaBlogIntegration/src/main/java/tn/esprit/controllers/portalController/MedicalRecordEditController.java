package tn.esprit.controllers.portalController;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import tn.esprit.models.MedicalRecord;
import tn.esprit.models.User;
import tn.esprit.services.MedicalRecordService;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.util.Arrays;
import java.util.List;

public class MedicalRecordEditController {

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
    private TextField medicationsField;

    @FXML
    private TextField vaccinesField;

    @FXML
    private TextField patientNameField;

    @FXML
    private ComboBox<User> patientComboBox;

    @FXML
    private Button exit;

    @FXML
    private Button save;

    private final List<String> bloodTypes = Arrays.asList("A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-");

    private final MedicalRecordService medicalRecordService = new MedicalRecordService();

    private MedicalRecord medicalRecordToEdit;
    private final UserService userService = new UserService();


    public void initialize() {
        // Populate ComboBox with blood types
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

        bloodTypeComboBox.setItems(FXCollections.observableArrayList(bloodTypes));
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
    public void initData(MedicalRecord medicalRecord) {
        medicalRecordToEdit = medicalRecord;
        medicalHistoryField.setText(medicalRecord.getMedicalHistory());
        surgicalHistoryField.setText(medicalRecord.getSurgicalHistory());
        familyHistoryField.setText(medicalRecord.getFamilyHistory());
        allergiesField.setText(medicalRecord.getAllergies());
        heightField.setText(String.valueOf(medicalRecord.getHeight()));
        weightField.setText(String.valueOf(medicalRecord.getWeight()));
        bloodTypeComboBox.setValue(medicalRecord.getBloodType());
        diseasesField.setText(medicalRecord.getDiseases());
        medicationsField.setText(medicalRecord.getMedications());
        vaccinesField.setText(medicalRecord.getVaccines());
        patientNameField.setText(medicalRecord.getPatientName());
    }

    @FXML
    void editMedicalRecord(ActionEvent event) {
        try {
            if (validateInputs()) {
                User selectedPatient = patientComboBox.getValue();
                if (selectedPatient == null) {
                    showAlert(Alert.AlertType.ERROR, "Validation Error", "Please select a patient.");
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

                medicalRecordToEdit.setMedicalHistory(medicalHistory);
                medicalRecordToEdit.setSurgicalHistory(surgicalHistory);
                medicalRecordToEdit.setFamilyHistory(familyHistory);
                medicalRecordToEdit.setAllergies(allergies);
                medicalRecordToEdit.setHeight(height);
                medicalRecordToEdit.setWeight(weight);
                medicalRecordToEdit.setBloodType(bloodType);
                medicalRecordToEdit.setDiseases(diseases);
                medicalRecordToEdit.setMedications(medications);
                medicalRecordToEdit.setVaccines(vaccines);
                medicalRecordToEdit.setPatientName(patientName);
                medicalRecordToEdit.setIdPatient(idPatient);

                medicalRecordService.updateMedicalRecord(medicalRecordToEdit);

                showAlert(Alert.AlertType.INFORMATION, "Success", "Medical record updated successfully.");
                returnToDashboard(event);
            }
        } catch (NumberFormatException e) {
            showAlert(Alert.AlertType.ERROR, "Input Error", "Please enter valid numeric values for height and weight.");
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Error", "An unexpected error occurred: " + e.getMessage());
            e.printStackTrace();
        }
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
    private static final float MIN_HEIGHT_CM = 50; // Minimum height in cm
    private static final float MAX_HEIGHT_CM = 300; // Maximum height in cm

    private static final float MIN_WEIGHT_KG = 40; // Minimum weight in kg
    private static final float MAX_WEIGHT_KG = 500; // Maximum weight in kg
    private boolean isValidWeight() {
        try {
            float weight = Float.parseFloat(weightField.getText());
            return weight >= MIN_WEIGHT_KG && weight <= MAX_WEIGHT_KG;
        } catch (NumberFormatException e) {
            return false;
        }
    }


    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(content);
        alert.showAndWait();
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
