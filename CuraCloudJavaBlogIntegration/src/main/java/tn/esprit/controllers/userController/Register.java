package tn.esprit.controllers.userController;

import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.models.User;
import tn.esprit.services.UserService;
import tn.esprit.util.MyConnection;

import java.net.URL;
import java.util.Objects;
import java.util.Random;
import java.util.ResourceBundle;

public class Register implements Initializable {

    @FXML
    private Label captchaLabel;

    @FXML
    private TextField captchaTextField;

    @FXML
    private TextField emailTF;

    @FXML
    private PasswordField passwordTF;

    @FXML
    private RadioButton labRadio;

    @FXML
    private RadioButton patientRadio;

    @FXML
    private RadioButton pharmacyRadio;

    @FXML
    private RadioButton radiologyRadio;

    @FXML
    private RadioButton doctorRadio;

    @FXML
    private Button signupButton;

    @FXML
    private Label attemptsLabel;

    int attempts = 0;

    //db connect
    MyConnection cnx=MyConnection.getInstance();

    @FXML
    void closeWindow() {
        System.exit(0);
    }

    @FXML
    void signupAction() {
        String email = emailTF.getText();
        String password = passwordTF.getText();

        boolean emailExists = cnx.checkEmailExists(email);

        if (emailExists) {
            // Email doesn't exist
            showAlert("Error", "Invalid Email", "The entered email exists.");
            return;
        }
        if (captchaTextField.getText().isBlank()) {
            showAlert("Error", "Blank Captcha", "The captcha is empty.");
            return;
        }
        if(Objects.equals(captchaLabel.getText(), captchaTextField.getText())) {
            UserService us = new UserService();
            User client = new User(email, "", "", "", password,
                    "", "", "", "", "", "", "");
            if (patientRadio.isSelected()) {
                us.addClient(client);
            } else if (doctorRadio.isSelected()) {
                us.addDoctor(client);
            }else if (pharmacyRadio.isSelected()) {
                us.addPharmacy(client);
            }else if (radiologyRadio.isSelected()) {
                us.addRadiology(client);
            }else if (labRadio.isSelected()) {
                us.addLab(client);
            }
            //next?
            try {
                Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
                Stage backStage = new Stage();
                backStage.initStyle(StageStyle.UNDECORATED);
                backStage.setScene(new Scene(root));
                backStage.show();
                Stage stage = (Stage) signupButton.getScene().getWindow();
                stage.close();

            } catch (Exception e) {
                e.printStackTrace();
            }

        }
        else {
            captchaLabel.setText(generateCaptcha());
            captchaTextField.clear();
            attempts++;
            int last = 3 - attempts;
            attemptsLabel.setText("You have " + last + " attempts");
            if (attempts == 3) {
                showAlert("Error", "wasted attempts", "you are a robot.");
                try {
                    Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
                    Stage backStage = new Stage();
                    backStage.initStyle(StageStyle.UNDECORATED);
                    backStage.setScene(new Scene(root));
                    backStage.show();
                    Stage stage = (Stage) signupButton.getScene().getWindow();
                    stage.close();

                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        }



    }
    @FXML
    void SwitchToLogIn() {
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) signupButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private void showAlert(String title, String header, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }

    public static String generateCaptcha() {
        String chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        int length = 5;
        Random random = new Random();
        StringBuilder captcha = new StringBuilder(length);

        for (int i = 0; i < length; i++) {
            int index = random.nextInt(chars.length());
            captcha.append(chars.charAt(index));
        }
        return captcha.toString();
    }

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        captchaLabel.setText(generateCaptcha());
    }

}
