package tn.esprit.controllers.userController;

import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.net.URL;
import java.util.Objects;
import java.util.ResourceBundle;

public class ForgetPassword implements Initializable {
    private String OTP = "";

    @FXML
    private TextField tfEmail;

    @FXML
    private PasswordField tfOTP;

    @FXML
    private Button sendButton;

    public void showAlert(String title, String header, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }

    @FXML
    void BackToLogin() {
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) sendButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    void ForgetPasswordAction() {
        Session session = Session.getInstance();
        UserService us = new UserService();
        if (!tfEmail.isDisabled()) {
            try {
               OTP=us.ForgetPassword(tfEmail.getText());
            } catch (Exception e) {
               throw new RuntimeException(e);
            }
            tfEmail.setDisable(true);
            tfOTP.setDisable(false);
            System.out.println(OTP);
        }
        else if (tfEmail.isDisabled()) {
            if (OTP.equals(tfOTP.getText())) {
                System.out.println("OTP verified");
                tfEmail.setDisable(false);
                tfOTP.setDisable(true);
                session.getUserSession().put("email", tfEmail.getText());
                //go to new interface with session
                try {
                    Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/NewPassword.fxml")));
                    Stage backStage = new Stage();
                    backStage.initStyle(StageStyle.UNDECORATED);
                    backStage.setScene(new Scene(root));
                    backStage.show();
                    Stage stage = (Stage) sendButton.getScene().getWindow();
                    stage.close();
                } catch (IOException e) {
                    throw new RuntimeException(e);
                }
            }
            else {
                System.out.println("OTP not verified");
                showAlert("Error", "Incorrect OTP", "OTP not verified");
            }
            tfOTP.clear();
        }
    }

    @FXML
    void closeWindow() {
        System.exit(0);
    }

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        tfOTP.setDisable(true);
    }
}
