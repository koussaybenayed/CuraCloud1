package tn.esprit.controllers;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.models.Blog;
import tn.esprit.services.BlogService;

import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;
import java.util.Objects;

public class AddBlog {

    @FXML
    private Button AddButton;

    @FXML
    private Button returnButton;

    @FXML
    private TextArea ContentTextField;

    @FXML
    private TextField SubjectTextField;

    @FXML
    private TextField TitleTextField;

    private final BlogService blogService = new BlogService();
    private final String imageDirectory = "images/"; // Directory to store images

    private boolean imageSelected = false; // Flag to track if an image is selected

    @FXML
    void AddBlog() {
        if (!validateInputs()) {
            return; // Exit method if inputs are not valid
        }

        String imageName = selectImage(); // Select image and get its name
        if (imageName != null) {
            Blog blog = new Blog(TitleTextField.getText(), SubjectTextField.getText(), ContentTextField.getText(), imageName);
            blogService.add(blog);
            redirectToShowBlog(); // Redirect to show the updated blog list
        } else {
            showAlert(Alert.AlertType.ERROR, "Image Error", "Error: No image selected.");
        }
    }

    private boolean validateInputs() {
        if (TitleTextField.getText().isEmpty() || SubjectTextField.getText().isEmpty() || ContentTextField.getText().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please fill in all fields.");
            return false;
        }
        return true;
    }

    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    private void redirectToShowBlog() {
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/ShowBlog.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();

            Stage stage = (Stage) AddButton.getScene().getWindow();
            stage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private String selectImage() {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Select Image");
        fileChooser.getExtensionFilters().addAll(
                new FileChooser.ExtensionFilter("Image Files", "*.png", "*.jpg", "*.gif")
        );
        Stage stage = (Stage) TitleTextField.getScene().getWindow();
        File selectedFile = fileChooser.showOpenDialog(stage);
        if (selectedFile != null) {
            try {
                File destinationDir = new File(imageDirectory);
                if (!destinationDir.exists()) {
                    destinationDir.mkdirs(); // Create the directory if it doesn't exist
                }
                File destinationFile = new File(destinationDir, selectedFile.getName());
                Files.copy(selectedFile.toPath(), destinationFile.toPath(), StandardCopyOption.REPLACE_EXISTING);
                imageSelected = true; // Set the flag to true since an image is selected
                return selectedFile.getName(); // Return the image file name
            } catch (IOException e) {
                System.err.println("Error saving image file: " + e.getMessage());
                e.printStackTrace(); // Print the full stack trace for debugging
            }
        }
        return null; // Return null if no image selected or dialog canceled
    }



    @FXML
    public void returnToMain() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
            Parent root = loader.load();

            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();

            Stage stage = (Stage) returnButton.getScene().getWindow();
            stage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
