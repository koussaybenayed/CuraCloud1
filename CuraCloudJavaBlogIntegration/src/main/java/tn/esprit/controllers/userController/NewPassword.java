package tn.esprit.controllers.userController;

import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.util.Objects;

public class NewPassword {

    @FXML
    private PasswordField confirmpasswordTF;

    @FXML
    private PasswordField newpasswordTF;

    @FXML
    private Button submitButton;

    public void showAlert(String title, String header, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }

    @FXML
    void submitPassword() {
        UserService us = new UserService();
        String email = (String) Session.getInstance().getUserSession().get("email");
        if(confirmpasswordTF.getText().equals(newpasswordTF.getText())) {
            try {
                us.SetNewPassword(email,newpasswordTF.getText());
                System.out.println("password changed");
                Session.getInstance().logoutUser();
                Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
                Stage backStage = new Stage();
                backStage.initStyle(StageStyle.UNDECORATED);
                backStage.setScene(new Scene(root));
                backStage.show();
                Stage stage = (Stage) submitButton.getScene().getWindow();
                stage.close();
            } catch (Exception e) {
                throw new RuntimeException(e);
            }
        }else {
            System.out.println("password not changed");
            showAlert("Error","Invalid Password","Passwords do not match");
            confirmpasswordTF.clear();
            newpasswordTF.clear();
        }
    }


    @FXML
    void closeWindow() {
        System.exit(0);
    }
}
