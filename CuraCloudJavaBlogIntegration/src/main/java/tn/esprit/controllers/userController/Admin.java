package tn.esprit.controllers.userController;

import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.AreaChart;
import javafx.scene.chart.BarChart;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.models.User;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.net.URL;
import java.util.Objects;
import java.util.Optional;
import java.util.ResourceBundle;

public class Admin implements Initializable {

    @FXML
    private AnchorPane add_user;

    @FXML
    private Button add_user_btn;

    @FXML
    private ComboBox<String> cb_patient_gender;

    @FXML
    private ComboBox<String> cb_patient_gender1;

    @FXML
    private ComboBox<String> cb_doctor_gender;

    @FXML
    private ComboBox<String> cb_doctor_spec;

    @FXML
    private ComboBox<String> cb_doctor_gender1;

    @FXML
    private ComboBox<String> cb_doctor_spec1;

    @FXML
    private TableColumn<User, String> doctor_col_addr;

    @FXML
    private TableColumn<User, String> doctor_col_email;

    @FXML
    private TableColumn<User, String> doctor_col_fn;

    @FXML
    private TableColumn<User, String> doctor_col_gender;

    @FXML
    private TableColumn<User, String> doctor_col_ln;

    @FXML
    private TableColumn<User, String> doctor_col_phone;

    @FXML
    private TableColumn<User, String> doctor_col_spec;

    @FXML
    private AnchorPane doctor_form;

    @FXML
    private AnchorPane doctor_form1;

    @FXML
    private TextField doctor_search;

    @FXML
    private TableView<User> doctor_tableview;

    @FXML
    private DatePicker dp_patient_birthdate;

    @FXML
    private DatePicker dp_patient_birthdate1;

    @FXML
    private DatePicker dp_doctor_birthdate;

    @FXML
    private DatePicker dp_doctor_birthdate1;

    @FXML
    private TableColumn<User, String> estab_col_addr;

    @FXML
    private TableColumn<User, String> estab_col_email;

    @FXML
    private TableColumn<User, String> estab_col_name;

    @FXML
    private TableColumn<User, String> estab_col_role;

    @FXML
    private TableColumn<User, String> estab_col_type;

    @FXML
    private TextField estab_search;

    @FXML
    private TableView<User> estab_tableview;

    @FXML
    private AnchorPane home;

    @FXML
    private Button home_btn;

    @FXML
    private TableColumn<User, String> patient_col_ban;

    @FXML
    private TableColumn<User, String> patient_col_bd;

    @FXML
    private TableColumn<User, String> patient_col_email;

    @FXML
    private TableColumn<User, String> patient_col_fn;

    @FXML
    private TableColumn<User, String> patient_col_gender;

    @FXML
    private TableColumn<User, String> patient_col_ln;

    @FXML
    private TableColumn<User, String> patient_col_phone;

    @FXML
    private AnchorPane patient_form;

    @FXML
    private AnchorPane patient_form1;

    @FXML
    private TextField patient_search;

    @FXML
    private TableView<User> patient_tableview;

    @FXML
    private Button sign_out_btn;

    @FXML
    private TextField tf_patient_email;

    @FXML
    private TextField tf_patient_fn;

    @FXML
    private TextField tf_patient_ln;

    @FXML
    private PasswordField tf_patient_password;

    @FXML
    private TextField tf_patient_phone;

    @FXML
    private TextField tf_patient_email1;

    @FXML
    private TextField tf_patient_fn1;

    @FXML
    private TextField tf_patient_ln1;

    @FXML
    private PasswordField tf_patient_password1;

    @FXML
    private TextField tf_patient_phone1;

    @FXML
    private TextField tf_doctor_certif;

    @FXML
    private TextField tf_doctor_email;

    @FXML
    private TextField tf_doctor_fn;

    @FXML
    private TextField tf_doctor_ln;

    @FXML
    private PasswordField tf_doctor_password;

    @FXML
    private TextField tf_doctor_phone;

    @FXML
    private TextField tf_doctor_certif1;

    @FXML
    private TextField tf_doctor_email1;

    @FXML
    private TextField tf_doctor_fn1;

    @FXML
    private TextField tf_doctor_ln1;

    @FXML
    private PasswordField tf_doctor_password1;

    @FXML
    private TextField tf_doctor_phone1;

    @FXML
    private AreaChart<?, ?> total_banned_chart;

    @FXML
    private Label total_banned_lb;

    @FXML
    private BarChart<?, ?> total_user_chart;

    @FXML
    private Label total_user_lb;

    @FXML
    private Label total_patient_lb;

    @FXML
    private AnchorPane users_list;

    @FXML
    private Button users_list_btn;

    @FXML
    private TableColumn<User, String> estab_col_phone;

    @FXML
    private ComboBox<String> cb_pharmacy_pharmacytype;

    @FXML
    private ComboBox<String> cb_pharmacy_pharmacytype1;

    @FXML
    private AnchorPane pharmacy_form;

    @FXML
    private AnchorPane pharmacy_form1;

    @FXML
    private TextField tf_pharmacy_address;

    @FXML
    private TextField tf_pharmacy_email;

    @FXML
    private TextField tf_pharmacy_name;

    @FXML
    private PasswordField tf_pharmacy_password;

    @FXML
    private TextField tf_pharmacy_phone;

    @FXML
    private TextField tf_pharmacy_address1;

    @FXML
    private TextField tf_pharmacy_email1;

    @FXML
    private TextField tf_pharmacy_name1;

    @FXML
    private PasswordField tf_pharmacy_password1;

    @FXML
    private TextField tf_pharmacy_phone1;

    @FXML
    private ComboBox<String> cb_lab_pop;

    @FXML
    private ComboBox<String> cb_lab_pop1;

    @FXML
    private AnchorPane lab_form;

    @FXML
    private AnchorPane lab_form1;

    @FXML
    private TextField tf_lab_address;

    @FXML
    private TextField tf_lab_email;

    @FXML
    private PasswordField tf_lab_password;

    @FXML
    private TextField tf_lab_phone;

    @FXML
    private TextField tf_lab_name;

    @FXML
    private TextField tf_lab_address1;

    @FXML
    private TextField tf_lab_email1;

    @FXML
    private PasswordField tf_lab_password1;

    @FXML
    private TextField tf_lab_phone1;

    @FXML
    private TextField tf_lab_name1;

    @FXML
    private ComboBox<String> cb_radiology_pop;

    @FXML
    private ComboBox<String> cb_radiology_pop1;

    @FXML
    private AnchorPane radio_form;

    @FXML
    private AnchorPane radio_form1;

    @FXML
    private TextField tf_radiology_address;

    @FXML
    private TextField tf_radiology_email;

    @FXML
    private TextField tf_radiology_name;

    @FXML
    private PasswordField tf_radiology_password;

    @FXML
    private TextField tf_radiology_phone;

    @FXML
    private TextField tf_radiology_address1;

    @FXML
    private TextField tf_radiology_email1;

    @FXML
    private TextField tf_radiology_name1;

    @FXML
    private PasswordField tf_radiology_password1;

    @FXML
    private TextField tf_radiology_phone1;

    @FXML
    private Button adddoctorbtn;

    @FXML
    private Button updatedoctorbtn;

    @FXML
    private Button addlabbtn;

    @FXML
    private Button updatelabbtn;

    @FXML
    private Button addpatientbtn;

    @FXML
    private Button updatepatientbtn;

    @FXML
    private Button addpharmacybtn;

    @FXML
    private Button updatepharmacybtn;

    @FXML
    private Button addradiobtn;

    @FXML
    private Button updateradiobtn;

    @FXML
    private Label doctor_label;

    @FXML
    private Label lab_label;

    @FXML
    private Label pharmacy_label;

    @FXML
    private Label radiology_label;

    @FXML
    private Label patient_label;

    @FXML
    private TextField tf_email_ban;

    @FXML
    private AnchorPane addpatientanchor;

    @FXML
    private AnchorPane addpharmacyanchor;

    @FXML
    private AnchorPane adddoctoranchor;

    @FXML
    private AnchorPane addlabanchor;

    @FXML
    private AnchorPane addradioanchor;

    @FXML
    private TextField tf_email_del;

    @FXML
    void switchForm(ActionEvent event) {
        if(event.getSource() == home_btn) {
            home.setVisible(true);
            add_user.setVisible(false);
            users_list.setVisible(false);

            home_btn.setStyle("-fx-background-color: linear-gradient(to bottom right , #3f82ae, #26bf7d);");
            add_user_btn.setStyle("-fx-background-color: transparent;");
            users_list_btn.setStyle("-fx-background-color: transparent;");
        }else if(event.getSource() == users_list_btn) {
            home.setVisible(false);
            add_user.setVisible(false);
            users_list.setVisible(true);
            clientShow();
            DoctorShow();
            EstablishmentShow();
            patientSearch();
            doctorSearch();
            estabSearch();
            home_btn.setStyle("-fx-background-color: transparent;");
            users_list_btn.setStyle("-fx-background-color: linear-gradient(to bottom right , #3f82ae, #26bf7d);");
            add_user_btn.setStyle("-fx-background-color: transparent;");
        }else if(event.getSource() == add_user_btn) {
            home.setVisible(false);
            add_user.setVisible(true);
            users_list.setVisible(false);

            home_btn.setStyle("-fx-background-color: transparent;");
            users_list_btn.setStyle("-fx-background-color: transparent;");
            add_user_btn.setStyle("-fx-background-color: linear-gradient(to bottom right , #3f82ae, #26bf7d);");
        }
    }
    @FXML
    void switchFormAddUpdate(ActionEvent event) {
        if(event.getSource() == addpatientbtn) {
            patient_form.setVisible(true);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == adddoctorbtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(true);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == addpharmacybtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(true);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == addlabbtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(true);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == addradiobtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(true);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == updatedoctorbtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(true);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == updatepatientbtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(true);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == updatepharmacybtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(true);
            lab_form1.setVisible(false);
            radio_form1.setVisible(false);
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == updatelabbtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(true);
            radio_form1.setVisible(false);
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
        }
        else if(event.getSource() == updateradiobtn) {
            patient_form.setVisible(false);
            doctor_form.setVisible(false);
            pharmacy_form.setVisible(false);
            lab_form.setVisible(false);
            radio_form.setVisible(false);
            patient_form1.setVisible(false);
            doctor_form1.setVisible(false);
            pharmacy_form1.setVisible(false);
            lab_form1.setVisible(false);
            radio_form1.setVisible(true);
            addradioanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
            adddoctoranchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addpharmacyanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");
            addlabanchor.setStyle("-fx-background-color: linear-gradient(to right, #344250, #3c6382)");

        }
    }

    @FXML
    void switchToAddOrUpdatePatient(ActionEvent event) {
        if (addpatientbtn.isVisible()) {
            updatepatientbtn.setVisible(true);
            patient_label.setText("Update Patient");
            addpatientbtn.setVisible(false);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }else {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            patient_label.setText("Add Patient");
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }
    }

    @FXML
    void switchToAddOrUpdateDoctor(ActionEvent event) {
        if (adddoctorbtn.isVisible()) {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(true);
            doctor_label.setText("Update Doctor");
            adddoctorbtn.setVisible(false);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }else {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            doctor_label.setText("Add Doctor");
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }
    }

    @FXML
    void switchToAddOrUpdatePharmacy(ActionEvent event) {
        if (addpharmacybtn.isVisible()) {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(true);
            pharmacy_label.setText("Update Pharmacy");
            addpharmacybtn.setVisible(false);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }else {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            pharmacy_label.setText("Add Pharmacy");
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }
    }

    @FXML
    void switchToAddOrUpdateLab(ActionEvent event) {
        if (addlabbtn.isVisible()) {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(true);
            lab_label.setText("Update Laboratory");
            addlabbtn.setVisible(false);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }else {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            lab_label.setText("Add Laboratory");
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
        }
    }

    @FXML
    void switchToAddOrUpdateRadiology(ActionEvent event) {
        if (addradiobtn.isVisible()) {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(true);
            radiology_label.setText("Update Radiology Center");
            addradiobtn.setVisible(false);
        }else {
            updatepatientbtn.setVisible(false);
            addpatientbtn.setVisible(true);
            updatedoctorbtn.setVisible(false);
            adddoctorbtn.setVisible(true);
            updatepharmacybtn.setVisible(false);
            addpharmacybtn.setVisible(true);
            updatelabbtn.setVisible(false);
            addlabbtn.setVisible(true);
            updateradiobtn.setVisible(false);
            addradiobtn.setVisible(true);
            radiology_label.setText("Add Radiology Center");
        }
    }

    @FXML
    void close(ActionEvent event) {
        System.exit(0);
    }

    @FXML
    void minimize(ActionEvent event) {
        Stage stage = (Stage) add_user.getScene().getWindow();
        stage.setIconified(true);
    }

    @FXML
    void logout(ActionEvent event) {
        try {
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Logout Confirmation");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure you want to logout?");
            Optional<ButtonType> option = alert.showAndWait();

            if (option.get() == ButtonType.OK) {
                System.out.println(Session.getInstance().getUserSession().get("email"));
                //delete session
                Session.getInstance().logoutUser();
                //
                sign_out_btn.getScene().getWindow().hide();
                Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
                Stage stage = new Stage();
                Scene scene = new Scene(root);

                stage.initStyle(StageStyle.TRANSPARENT);
                stage.setScene(scene);
                stage.show();
            }
            else return;
        } catch (IOException e) {
            throw new RuntimeException(e);
        }

    }

    public void clientShow(){
        UserService us = new UserService();
        ObservableList<User> clientList = us.fetchClients();
        patient_col_email.setCellValueFactory(new PropertyValueFactory<>("email"));
        patient_col_fn.setCellValueFactory(new PropertyValueFactory<>("first_name"));
        patient_col_ln.setCellValueFactory(new PropertyValueFactory<>("last_name"));
        patient_col_phone.setCellValueFactory(new PropertyValueFactory<>("phone_number"));
        patient_col_bd.setCellValueFactory(new PropertyValueFactory<>("birth_date"));
        patient_col_gender.setCellValueFactory(new PropertyValueFactory<>("gender"));
        patient_col_ban.setCellValueFactory(new PropertyValueFactory<>("isbanned"));
        patient_tableview.setItems(clientList);

    }

    public void DoctorShow(){
        UserService us = new UserService();
        ObservableList<User> clientList = us.fetchDoctors();
        doctor_col_email.setCellValueFactory(new PropertyValueFactory<>("email"));
        doctor_col_fn.setCellValueFactory(new PropertyValueFactory<>("first_name"));
        doctor_col_ln.setCellValueFactory(new PropertyValueFactory<>("last_name"));
        doctor_col_phone.setCellValueFactory(new PropertyValueFactory<>("phone_number"));
        doctor_col_gender.setCellValueFactory(new PropertyValueFactory<>("gender"));
        doctor_col_addr.setCellValueFactory(new PropertyValueFactory<>("address"));
        doctor_col_spec.setCellValueFactory(new PropertyValueFactory<>("speciality"));
        doctor_tableview.setItems(clientList);
    }

    public void EstablishmentShow(){
        UserService us = new UserService();
        ObservableList<User> clientList = us.fetchEstablishments();
        estab_col_email.setCellValueFactory(new PropertyValueFactory<>("email"));
        estab_col_name.setCellValueFactory(new PropertyValueFactory<>("first_name"));
        estab_col_phone.setCellValueFactory(new PropertyValueFactory<>("phone_number"));
        estab_col_role.setCellValueFactory(new PropertyValueFactory<>("role"));
        estab_col_addr.setCellValueFactory(new PropertyValueFactory<>("address"));
        estab_col_type.setCellValueFactory(new PropertyValueFactory<>("public_or_private"));
        estab_tableview.setItems(clientList);
    }

    @FXML
    void addPatientAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_patient_email.getText(),
                tf_patient_fn.getText(),
                tf_patient_ln.getText(),
                "",
                tf_patient_password.getText(),
                dp_patient_birthdate.getValue().toString(),
                "",
                "",
                tf_patient_phone.getText(),
                cb_patient_gender.getValue(),
                "",
                "");
        us.addClient(client);

    }

    @FXML
    void addDoctorAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_doctor_email.getText(),
                tf_doctor_fn.getText(),
                tf_doctor_ln.getText(),
                "",
                tf_doctor_password.getText(),
                dp_doctor_birthdate.getValue().toString(),
                cb_doctor_spec.getValue(),
                tf_doctor_certif.getText(),
                tf_doctor_phone.getText(),
                cb_doctor_gender.getValue(),
                "",
                "");
        us.addDoctor(client);

    }

    @FXML
    void addPharmacyAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_pharmacy_email.getText(),
                tf_pharmacy_name.getText(),
                "",
                tf_pharmacy_address.getText(),
                tf_pharmacy_password.getText(),
                "",
                "",
                "",
                tf_pharmacy_phone.getText(),
                "",
                "",
                cb_pharmacy_pharmacytype.getValue());
        us.addPharmacy(client);

    }

    @FXML
    void addLabAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_lab_email.getText(),
                tf_lab_name.getText(),
                "",
                tf_lab_address.getText(),
                tf_lab_password.getText(),
                "",
                "",
                "",
                tf_lab_phone.getText(),
                "",
                cb_lab_pop.getValue(),
                "");
        us.addLab(client);

    }

    @FXML
    void addRadioAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_radiology_email.getText(),
                tf_radiology_name.getText(),
                "",
                tf_radiology_address.getText(),
                tf_radiology_password.getText(),
                "",
                "",
                "",
                tf_radiology_phone.getText(),
                "",
                cb_radiology_pop.getValue(),
                "");
        us.addRadiology(client);
    }

    @FXML
    void updatePatientAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_patient_email1.getText(),
                tf_patient_fn1.getText(),
                tf_patient_ln1.getText(),
                "",
                tf_patient_password1.getText(),
                dp_patient_birthdate1.getValue().toString(),
                "",
                "",
                tf_patient_phone1.getText(),
                cb_patient_gender1.getValue(),
                "",
                "");
        us.updateClient(client);

    }

    @FXML
    void updateDoctorAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_doctor_email1.getText(),
                tf_doctor_fn1.getText(),
                tf_doctor_ln1.getText(),
                "",
                tf_doctor_password1.getText(),
                dp_doctor_birthdate1.getValue().toString(),
                cb_doctor_spec1.getValue(),
                tf_doctor_certif1.getText(),
                tf_doctor_phone1.getText(),
                cb_doctor_gender1.getValue(),
                "",
                "");
        us.updateDoctor(client);

    }

    @FXML
    void updatePharmacyAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_pharmacy_email1.getText(),
                tf_pharmacy_name1.getText(),
                "",
                tf_pharmacy_address1.getText(),
                tf_pharmacy_password1.getText(),
                "",
                "",
                "",
                tf_pharmacy_phone1.getText(),
                "",
                "",
                cb_pharmacy_pharmacytype1.getValue());
        us.updatePharmacy(client);

    }

    @FXML
    void updateLabAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_lab_email1.getText(),
                tf_lab_name1.getText(),
                "",
                tf_lab_address1.getText(),
                tf_lab_password1.getText(),
                "",
                "",
                "",
                tf_lab_phone1.getText(),
                "",
                cb_lab_pop1.getValue(),
                "");
        us.updateLab(client);

    }

    @FXML
    void updateRadioAction(ActionEvent event) {

        UserService us = new UserService();
        User client = new User(tf_radiology_email1.getText(),
                tf_radiology_name1.getText(),
                "",
                tf_radiology_address1.getText(),
                tf_radiology_password1.getText(),
                "",
                "",
                "",
                tf_radiology_phone1.getText(),
                "",
                cb_radiology_pop1.getValue(),
                "");
        us.updateRadiology(client);
    }

    @FXML
    void DeleteAction(ActionEvent event) {
        UserService us = new UserService();
        us.delete(tf_email_del.getText());
    }

    @FXML
    void patientSearch() {
        UserService us = new UserService();
        FilteredList<User> filter = new FilteredList<>(us.fetchClients(), e -> true);

        patient_search.textProperty().addListener((Observable, oldValue, newValue) -> {

            filter.setPredicate(userData -> {

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                String searchKey = newValue.toLowerCase();
                // Null checks for each field
                String email = userData.getEmail();
                String firstName = userData.getFirst_name();
                String lastName = userData.getLast_name();
                String phoneNumber = userData.getPhone_number();
                String birthDate = userData.getBirth_date();
                String gender = userData.isGender();

                // Comparing each field with the search key, with null check
                if (email != null && email.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (firstName != null && firstName.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (lastName != null && lastName.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (phoneNumber != null && phoneNumber.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (birthDate != null && birthDate.toLowerCase().contains(searchKey)) {
                    return true;
                }

                if (gender != null && gender.toLowerCase().contains(searchKey)) {
                    return true;
                }

                return false;
            });
        });

        SortedList<User> sortList = new SortedList<>(filter);

        sortList.comparatorProperty().bind(patient_tableview.comparatorProperty());
        patient_tableview.setItems(sortList);
    }

    @FXML
    void doctorSearch() {
        UserService us = new UserService();
        FilteredList<User> filter = new FilteredList<>(us.fetchDoctors(), e -> true);

        doctor_search.textProperty().addListener((Observable, oldValue, newValue) -> {

            filter.setPredicate(userData -> {

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                String searchKey = newValue.toLowerCase();
                // Null checks for each field
                String email = userData.getEmail();
                String firstName = userData.getFirst_name();
                String lastName = userData.getLast_name();
                String phoneNumber = userData.getPhone_number();
                String speciality = userData.getSpeciality();
                String gender = userData.isGender();
                String address = userData.getAddress();

                // Comparing each field with the search key, with null check
                if (email != null && email.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (firstName != null && firstName.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (lastName != null && lastName.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (phoneNumber != null && phoneNumber.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (speciality != null && speciality.toLowerCase().contains(searchKey)) {
                    return true;
                }

                if (gender != null && gender.toLowerCase().contains(searchKey)) {
                    return true;
                }

                if (address != null && address.toLowerCase().contains(searchKey)) {
                    return true;
                }

                return false;
            });
        });

        SortedList<User> sortList = new SortedList<>(filter);

        sortList.comparatorProperty().bind(doctor_tableview.comparatorProperty());
        doctor_tableview.setItems(sortList);
    }

    @FXML
    void estabSearch() {
        UserService us = new UserService();
        FilteredList<User> filter = new FilteredList<>(us.fetchEstablishments(), e -> true);

        estab_search.textProperty().addListener((Observable, oldValue, newValue) -> {

            filter.setPredicate(userData -> {

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                String searchKey = newValue.toLowerCase();
                // Null checks for each field
                String email = userData.getEmail();
                String Name = userData.getFirst_name();
                String phoneNumber = userData.getPhone_number();
                String address = userData.getAddress();
                String role = userData.getRole();
                String type = userData.isPublic_or_private();

                // Comparing each field with the search key, with null check
                if (email != null && email.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (Name != null && Name.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (type != null && type.toLowerCase().contains(searchKey)) {
                    return true;
                }
                if (phoneNumber != null && phoneNumber.toLowerCase().contains(searchKey)) {
                    return true;
                }

                if (role != null && role.toLowerCase().contains(searchKey)) {
                    return true;
                }

                if (address != null && address.toLowerCase().contains(searchKey)) {
                    return true;
                }

                return false;
            });
        });

        SortedList<User> sortList = new SortedList<>(filter);

        sortList.comparatorProperty().bind(estab_tableview.comparatorProperty());
        estab_tableview.setItems(sortList);
    }
    @FXML
    void banUserAction(){
        UserService us = new UserService();
        us.banUser(tf_email_ban.getText());
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Success");
        alert.setHeaderText("Email Banned");
        alert.setContentText(tf_email_ban.getText()+" has been banned");
        alert.showAndWait();
    }



    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        UserService us = new UserService();
        cb_patient_gender.getItems().addAll("Male", "Female");
        cb_patient_gender1.getItems().addAll("Male", "Female");
        cb_doctor_gender.getItems().addAll("Male", "Female");
        cb_doctor_spec.getItems().addAll("Dentist","Endocrinologist","Gynecologist");
        cb_doctor_gender1.getItems().addAll("Male", "Female");
        cb_doctor_spec1.getItems().addAll("Dentist","Endocrinologist","Gynecologist");
        cb_pharmacy_pharmacytype.getItems().addAll("Day","Night");
        cb_pharmacy_pharmacytype1.getItems().addAll("Day","Night");
        cb_lab_pop.getItems().addAll("Public","Private");
        cb_lab_pop1.getItems().addAll("Public","Private");
        cb_radiology_pop.getItems().addAll("Public","Private");
        cb_radiology_pop1.getItems().addAll("Public","Private");
        //dashboard first
        home.setVisible(true);
        add_user.setVisible(false);
        users_list.setVisible(false);
        home_btn.setStyle("-fx-background-color: linear-gradient(to bottom right , #3f82ae, #26bf7d);");
        add_user_btn.setStyle("-fx-background-color: transparent;");
        users_list_btn.setStyle("-fx-background-color: transparent;");
        addpatientanchor.setStyle("-fx-background-color: linear-gradient(to right, #2a445b, #237cbd)");
        us.homeDisplayTotalUsers(total_user_lb);
        us.homeDisplayTotalDoctors(total_patient_lb);
        us.homeDisplayTotalBanned(total_banned_lb);
        //us.homeDisplayTotalUsersChart(total_user_chart);
        //us.homeDisplayBannedUsersChart(total_banned_chart);
    }
}
