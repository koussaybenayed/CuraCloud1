package tn.esprit.controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.*;
import javafx.stage.Stage;
import tn.esprit.models.Blog;
import tn.esprit.services.BlogService;
import tn.esprit.services.UserService;
import tn.esprit.services.Session;

import java.io.File;

import java.io.IOException;
import java.time.format.DateTimeFormatter;
import java.util.List;

public class ShowBlog {

    @FXML
    private Button addBlogBtn;

    @FXML
    private FlowPane blogFlowPane;

    @FXML
    private Button prevPageButton;

    @FXML
    private Button nextPageButton;

    @FXML
    private TextField searchField;


    private final UserService userService = new UserService();
    private final BlogService blogService = new BlogService();
    private final ObservableList<Blog> allBlogs = FXCollections.observableArrayList();
    private static final int BLOGS_PER_PAGE = 8;
    private int currentPage = 0;

    public void initialize() {
        String session = Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = blogService.getUserIDByEmail(session);
        System.out.println("Role: " + role);
        if (role.equals("[\"ROLE_DOCTOR\"]")) {
            addBlogBtn.setDisable(false); // Disable the ComboBox
            addBlogBtn.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
        } else if (role.equals("[\"ROLE_PATIENT\"]")) {
            addBlogBtn.setDisable(true); // Disable the ComboBox
            addBlogBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        }
        loadBlogs();
        showBlogs();

    }

    private void loadBlogs() {
        allBlogs.setAll(blogService.getAll());
    }

    private void showBlogs() {
        blogFlowPane.getChildren().clear();
        int start = currentPage * BLOGS_PER_PAGE;
        int end = Math.min(start + BLOGS_PER_PAGE, allBlogs.size());

        for (int i = start; i < end; i++) {
            Blog blog = allBlogs.get(i);
            VBox blogBox = createBlogBox(blog);
            blogFlowPane.getChildren().add(blogBox);
        }

        updatePaginationButtons();
    }

    private VBox createBlogBox(Blog blog) {
        VBox blogBox = new VBox();
        blogBox.getStyleClass().add("blog-box"); // Apply CSS style to the blog box
        blogBox.setSpacing(10); // Set spacing between elements in the VBox
        blogBox.setStyle("-fx-background-color: #fff; -fx-background-radius: 10px; -fx-padding: 10px; -fx-effect: dropshadow(three-pass-box, rgba(0,0,0,0.3), 5, 0, 2, 2);");

        ImageView imageView = new ImageView();
        imageView.setFitWidth(200);
        imageView.setPreserveRatio(true);
        imageView.setImage(new Image("file:images/" + blog.getImage()));
        imageView.setStyle("-fx-background-radius: 10; -fx-padding: 10; -fx-effect: dropshadow(three-pass-box, rgba(0,0,0,0.3), 5, 0, 2, 2);");

        Label titleLabel = new Label(blog.getTitle());
        titleLabel.getStyleClass().add("blog-title"); // Apply CSS style to the title label

        Label contentLabel = new Label(truncateContent(blog.getContent()));
        contentLabel.getStyleClass().add("blog-content"); // Apply CSS style to the content label

        Label dateLabel = new Label("Date: " + blog.getSubmmission_date().toString());
        dateLabel.getStyleClass().add("blog-date"); // Apply CSS style to the date label

        blogBox.getChildren().addAll(imageView, titleLabel, contentLabel, dateLabel);

        blogBox.setOnMouseClicked(event -> {
            try {
                loadBlogDetailsPage(blog);
            } catch (IOException e) {
                e.printStackTrace();
            }
        });

        return blogBox;
    }

    private String truncateContent(String content) {
        final int MAX_CONTENT_LENGTH = 40; // Maximum characters for content
        if (content.length() > MAX_CONTENT_LENGTH) {
            return content.substring(0, MAX_CONTENT_LENGTH) + "...";
        } else {
            return content;
        }
    }

    private void loadBlogDetailsPage(Blog blog) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/BlogDetails.fxml"));
        Parent root = loader.load();

        BlogDetailsController blogDetailsController = loader.getController();
        blogDetailsController.initData(blog);

        blogFlowPane.getScene().setRoot(root);
    }

    @FXML
    public void goToAddBlogPage(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AddBlog.fxml"));
            Parent root = loader.load();

            Stage addBlogStage = new Stage();
            addBlogStage.setScene(new Scene(root));
            addBlogStage.show();

            Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void goToShowBlogPage(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowBlog.fxml"));
            Parent root = loader.load();

            Stage showBlogStage = new Stage();
            showBlogStage.setScene(new Scene(root));
            showBlogStage.show();

            // Optionally, close the current stage if needed
            Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            currentStage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void goToPrevPage(ActionEvent event) {
        if (currentPage > 0) {
            currentPage--;
            showBlogs();
        }
    }

    @FXML
    private void goToNextPage(ActionEvent event) {
        int totalPages = (allBlogs.size() + BLOGS_PER_PAGE - 1) / BLOGS_PER_PAGE;
        if (currentPage < totalPages - 1) {
            currentPage++;
            showBlogs();
        }
    }

    private void updatePaginationButtons() {
        prevPageButton.setDisable(currentPage == 0);
        int totalPages = (allBlogs.size() + BLOGS_PER_PAGE - 1) / BLOGS_PER_PAGE;
        nextPageButton.setDisable(currentPage >= totalPages - 1);
    }


    public void searchBlogs(ActionEvent actionEvent) {
    }

    @FXML
    private void handleSearch(KeyEvent event) {
        String searchText = searchField.getText().toLowerCase().trim(); // Get the search text and convert to lowercase
        ObservableList<Node> filteredBlogs = FXCollections.observableArrayList();

        if (searchText.isEmpty()) {
            filteredBlogs.addAll(blogFlowPane.getChildren());
        } else {
            for (Node node : blogFlowPane.getChildren()) {
                if (node instanceof VBox blogBox) {
                    Label titleLabel = (Label) blogBox.getChildren().get(1); // Assuming title label is the second child
                    Label contentLabel = (Label) blogBox.getChildren().get(2); // Assuming content label is the third child

                    String title = titleLabel.getText().toLowerCase();
                    String content = contentLabel.getText().toLowerCase();

                    if (title.contains(searchText) || content.contains(searchText)) {
                        filteredBlogs.add(blogBox);
                    }
                }
            }
        }

        blogFlowPane.getChildren().setAll(filteredBlogs);
    }

}