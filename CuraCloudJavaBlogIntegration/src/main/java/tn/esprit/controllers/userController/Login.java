package tn.esprit.controllers.userController;

import javafx.event.ActionEvent;
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
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;
import tn.esprit.util.MyConnection;

import java.net.URL;
import java.util.Objects;
import java.util.ResourceBundle;


public class Login implements Initializable {
    @FXML
    private TextField emailTF;
    @FXML
    private PasswordField passwordTF;
    @FXML
    private Button loginButton;

    private  final UserService us = new UserService();

    //fb attributes
    private final String app_id= "1463218100952048";
    private final String app_Secret= "7e9e98580312a731c528636858318466";
    private final String redirect_uri= "http://localhost/";
    private final String state= "1234";
    private final String redirect_uri_encoded= "http%3A%2F%2Flocalhost%2F";
    private String authentication="https://www.facebook.com/v19.0/dialog/oauth?client_id="+ app_id +"&redirect_uri="+ redirect_uri_encoded + "&state="+ state;
    private String graph="https://graph.facebook.com/v19.0/oauth/access_token?client_id="+ app_id +"&redirect_uri="+ redirect_uri_encoded +"&client_secret="+ app_Secret +"&code="; ;

    //db connect
    MyConnection cnx=MyConnection.getInstance();

    @FXML
    void NormalLogin() {
        String email = emailTF.getText();
        String password = passwordTF.getText();

        Session session = Session.getInstance();

        boolean emailExists = cnx.checkEmailExists(email);

        if (!emailExists) {
            // Email doesn't exist
            showAlert("Error", "Invalid Email", "The entered email does not exist.");
            return;
        }

        boolean passwordMatches = cnx.checkPasswordMatches(email, password);

        if (!passwordMatches) {
            // Password doesn't match
            showAlert("Error", "Invalid Password", "The entered password is incorrect.");
            return;
        }

        boolean accountIsBanned = cnx.checkBannedAccount(email);

        if (accountIsBanned) {
            // account banned
            showAlert("Error", "Account Banned", "This account is already banned please contact admin");
            return;
        }

        session.getUserSession().put("email", email);

        //what's next?
        try {
            System.out.println(session.getUserSession().get("email"));
            String session1 = Session.getInstance().getUserSession().get("email").toString();
            String userRole = us.getUserRoleByEmail(session1);
            // Determine the FXML file to load based on the user's role
            String fxmlFile;
            if(userRole.equals("[\"ROLE_ADMIN\"]"))
                fxmlFile = "/userInterafce/Admin.fxml";
            else
                fxmlFile = "/labInterface/Dashboard.fxml";


            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource(fxmlFile)));
           // Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/ShowPrescriptionF.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) loginButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }

    }
    // Method to show an alert dialog
    public void showAlert(String title, String header, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }

    @FXML
    void ForgetPassword() {
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/ForgetPassword.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) loginButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    /*@FXML
    void login_as_facebook() {
        WebView webView = new WebView();
        WebEngine eg = webView.getEngine();
        eg.load(authentication);

        Pane wView = new Pane();
        wView.getChildren().add(webView);

        Stage stage = new Stage();
        stage.initModality(Modality.APPLICATION_MODAL);
        stage.setScene(new Scene(wView,400,400));
        stage.show();

        eg.locationProperty().addListener((obs, oldValue, newValue) -> {
            if (newValue != null && !newValue.startsWith("http://localhost")) {
                int codeOffset = newValue.indexOf("code=");
                String code = newValue.substring(codeOffset + "code=".length());
                //graph += code;

                System.out.println("http"+code);
                
                DefaultFacebookClient facebookClient = new DefaultFacebookClient(Version.LATEST);
                AccessToken accessToken = facebookClient.obtainUserAccessToken(app_id,app_Secret,redirect_uri,code);
                String access_token = accessToken.getAccessToken();

                System.out.println(access_token);

                FacebookClient fbClient = new DefaultFacebookClient(access_token,Version.LATEST);
                fbClient.createClientWithAccessToken(access_token);
                JsonObject profile_pic = fbClient.fetchObject("me/picture", JsonObject.class, Parameter.with("redirect","false"));
                User user = fbClient.fetchObject("me",User.class);
                //this.name.setText(User.getName());    //to get the user name;
                System.out.println(User.class.getName());
                int si = profile_pic.toString().indexOf("url\":\"");
                int ei = profile_pic.toString().indexOf("\",\"");
                String profile_url = profile_pic.toString().substring(si+6,ei);

                //this.profile_pic.setFill(new ImagePattern(new Image(profile_url)));
            }
        });
    }*/

    @FXML
    void CuraWeb() {
        // Set the path to the ChromeDriver executable
        System.setProperty("webdriver.chrome.driver", "C:\\chromedriver.exe");

        // Initialize ChromeDriver
        WebDriver driver = new ChromeDriver();
        // Navigate to the original URL
        driver.get("http://127.0.0.1:8000/login");
        // Check if the current URL matches the redirect URL
        while (true){
            if (driver.getCurrentUrl().contains("/user")) {
                driver.quit();
                try {
                    Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Admin.fxml")));
                    Stage backStage = new Stage();
                    //backStage.initStyle(StageStyle.UNDECORATED);
                    backStage.setScene(new Scene(root));
                    backStage.show();
                    Stage stage = (Stage) loginButton.getScene().getWindow();
                    stage.close();

                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        }

    }

    @FXML
    void SwitchToSignUp() {
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Register.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) loginButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }




    @FXML
    void closeWindow(ActionEvent event) {
        System.exit(0);
    }

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {

    }
}
