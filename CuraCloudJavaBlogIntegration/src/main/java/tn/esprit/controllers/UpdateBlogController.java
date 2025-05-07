package tn.esprit.controllers;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.models.Blog;
import tn.esprit.services.BlogService;

import java.io.IOException;
import java.net.URL;
import java.util.Objects;
import java.util.ResourceBundle;

public class UpdateBlogController {

    @FXML
    private Button updateButton;

    @FXML
    private Button returnButton;

    @FXML
    private TextField titleField;
    @FXML
    private TextArea contentArea;
    @FXML
    private TextField subjectField;

    private BlogService blogService;
    private Blog blogToUpdate;

    public UpdateBlogController() {
        blogService = new BlogService();
    }

    public void initData(Blog selectedBlog) {
        blogToUpdate = selectedBlog;
        if (selectedBlog != null) {
            titleField.setText(selectedBlog.getTitle());
            contentArea.setText(selectedBlog.getContent());
            subjectField.setText(selectedBlog.getSubject());
        }
    }

    @FXML
    private void updateBlog(ActionEvent event) {
        if (blogToUpdate != null) {
            String newTitle = titleField.getText();
            String newContent = contentArea.getText();
            String newSubject = subjectField.getText();

            if (!newTitle.isEmpty() && !newContent.isEmpty() && !newSubject.isEmpty()) {
                blogToUpdate.setTitle(newTitle);
                blogToUpdate.setContent(newContent);
                blogToUpdate.setSubject(newSubject);

                blogService.update(blogToUpdate);
                // Optionally, you can add a success message here
            } else {
                // Show an error message or handle empty fields as needed
                showAlert(Alert.AlertType.ERROR, "Error", "Fields cannot be empty.");
            }
        }

        //what's next?
        try {
            Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/labInterface/Dashboard.fxml")));
            Stage backStage = new Stage();
            backStage.initStyle(StageStyle.UNDECORATED);
            backStage.setScene(new Scene(root));
            backStage.show();
            Stage stage = (Stage) updateButton.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }


    }


    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    @FXML
    public void returnToMain() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowBlog.fxml"));
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
