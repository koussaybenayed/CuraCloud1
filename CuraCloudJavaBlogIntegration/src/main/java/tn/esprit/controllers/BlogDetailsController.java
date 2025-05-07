package tn.esprit.controllers;

import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.VBox;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.models.Blog;

import tn.esprit.models.Comment;
import tn.esprit.models.Favorites;
import tn.esprit.services.*;
import tn.esprit.util.MaConnexion;
import twitter4j.Status;
import twitter4j.Twitter;
import twitter4j.TwitterException;
import twitter4j.TwitterFactory;
import twitter4j.auth.AccessToken;

import java.io.File;
import java.io.IOException;
import java.net.MalformedURLException;
import java.sql.*;
import java.time.LocalDateTime;
import java.util.List;
import java.util.Optional;

public class BlogDetailsController {

    @FXML
    private Label titleLabel;

    @FXML
    private VBox blogDetailsVBox;

    @FXML
    private Label subjectLabel;

    @FXML
    private Label contentLabel;

    @FXML
    private Label dateLabel;

    @FXML
    private ImageView imageView;

    @FXML
    private ListView<Comment> commentsListView;

    @FXML
    private TextArea newCommentTextArea;

    @FXML
    private Button returnButton;

    @FXML
    private Button updateButton; // Added button for updating the blog

    @FXML
    private Button deleteButton; // Added button for deleting the blog

    @FXML
    private Button likeButton;

    @FXML
    private Button dislikeButton;

    @FXML
    private Button shareButton;

    private Blog selectedBlog;
    private BlogService blogService;
    private CommentService commentService;
    private favoritesService favoritesService = new favoritesService();
    private final UserService userService = new UserService();


    Connection cnx = MaConnexion.getInstance().getCnx();

    // Twitter API credentials
    private static final String CONSUMER_KEY = "DmDBLcdgJPOP8p13IewE22PTa";
    private static final String CONSUMER_SECRET = "A02HRIuobg1GFjRvP4iKjrHrv8jKaqzS5y5BSLT9Cc0epcZ0Jm";
    private static final String ACCESS_TOKEN = "1787194851118710784-TzYw1cGX7n4sUqTlR2IP6p41FV0LlM";
    private static final String ACCESS_TOKEN_SECRET = "b3MLQstOvlaKkLWlJkXJmvyXV8kmLPYn2Bx2jbhneFp7O";


    public void initData(Blog blog) {

        this.selectedBlog = blog;
        commentService = new CommentService();
        blogService = new BlogService();
        loadComments();

        titleLabel.setText(blog.getTitle());
        subjectLabel.setText(blog.getSubject());
        contentLabel.setText(blog.getContent());
        dateLabel.setText(blog.getSubmmission_date().toString());

        String imageUrl = "images/" + blog.getImage();
        File imageFile = new File(imageUrl);
        if (imageFile.exists()) {
            try {
                imageView.setImage(new Image(imageFile.toURI().toURL().toString()));
                imageView.setStyle("-fx-background-radius: 10; -fx-padding: 10; -fx-effect: dropshadow(three-pass-box, rgba(0,0,0,0.3), 5, 0, 2, 2);");
                imageView.setPreserveRatio(true);
                imageView.setFitWidth(300);
            } catch (MalformedURLException e) {
                System.err.println("Error loading image: " + e.getMessage());
            }
        } else {
            System.err.println("Image file not found: " + imageUrl);
        }
        String session = Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = blogService.getUserIDByEmail(session);
        int authorId = getAuthorIdByBlogId(selectedBlog.getId());

        System.out.println("Role: " + role);
        handleRoleButtons(authorId, id);


    }

    private void handleRoleButtons(int authorId, int id) {
        System.out.println(selectedBlog.getId());
        System.out.println("Signed in user id =" + id + " author id =" + authorId + " selected blog id =" + selectedBlog.getId());
        int x = authorId - id;
        System.out.println("author id - id =" + x);

        if (x == 0) {
            updateButton.setDisable(false); // Disable the ComboBox
            updateButton.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
            deleteButton.setDisable(false);
            deleteButton.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
        } else if (x != 0) {
            updateButton.setDisable(true); // Disable the ComboBox
            updateButton.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
            deleteButton.setDisable(true);
            deleteButton.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        }
    }


    private void loadComments() {
        commentsListView.getItems().clear();
        if (selectedBlog != null) {
            List<Comment> comments = commentService.getAllCommentsForBlog(selectedBlog.getId());
            commentsListView.getItems().addAll(comments);
            // Set the cell factory to display only the content of each non-empty comment
            commentsListView.setCellFactory(commentListView -> new ListCell<Comment>() {
                @Override
                protected void updateItem(Comment comment, boolean empty) {
                    super.updateItem(comment, empty);
                    if (empty || comment == null || comment.getContent() == null || comment.getContent().isEmpty()) {
                        setGraphic(null);
                        setText(null);
                    } else {
                        setText(comment.getContent());
                    }
                }
            });
        } else {
            System.err.println("Selected blog is null. Cannot load comments.");
        }
    }


    @FXML
    public void addComment() {
        if (selectedBlog != null) {
            String content = newCommentTextArea.getText();
            if (!content.isEmpty()) {
                Comment comment = new Comment(content, Timestamp.valueOf(LocalDateTime.now()), selectedBlog.getId());
                comment.setBlog(selectedBlog);
                commentService.add(comment);

                // Update UI in JavaFX Application Thread
                Platform.runLater(() -> {
                    loadComments();
                    newCommentTextArea.clear();
                });
            } else {
                System.err.println("Comment content cannot be empty.");
            }
        } else {
            System.err.println("Selected blog is null. Cannot add comment.");
        }
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

    public int getAuthorIdByBlogId(int blogId) {
        int authorId = 0; // Default value if author ID is not found

        // Assuming your blog data is stored in a database table named 'blogs'
        String query = "SELECT author_id FROM blog WHERE id = ?";

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, blogId);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                authorId = resultSet.getInt("author_id");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return authorId;
    }


    // Method to handle the update button click event
    @FXML
    public void goToUpdatePage() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UpdateBlog.fxml"));
            Parent root = loader.load();

            UpdateBlogController controller = loader.getController();
            controller.initData(selectedBlog); // Pass the selected blog to the update controller

            Stage updateStage = new Stage();
            updateStage.setScene(new Scene(root));
            updateStage.show();

            // Close the current stage if needed
            Stage stage = (Stage) updateButton.getScene().getWindow();
            stage.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    // Method to handle the delete button click event
    @FXML
    public void deleteBlog() {
        if (selectedBlog != null) {
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Confirm Delete");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure you want to delete this blog?");

            alert.showAndWait().ifPresent(response -> {
                if (response == ButtonType.OK) {
                    blogService.delete(selectedBlog);
                    // Optionally, update UI or navigate to another view after deletion
                    // For example, reload the main blog view
                    returnToMain();
                }
            });
        } else {
            System.err.println("Selected blog is null. Cannot delete.");
        }
    }

    public void handleLike() throws SQLException {
        // Get the logged-in user's email from the session
        String userEmail = (String) Session.getInstance().getUserSession().get("email");

        // Assuming you have a method to retrieve the user ID based on the email
        // Here, I'm using a placeholder variable for the user ID
        int loggedInUserId = getUserIDByEmail(userEmail); // Replace this with your actual method call

        // Assuming you have access to the selected blog ID
        int selectedBlogId = selectedBlog.getId();

        // Check if the user has already liked this post
        if (blogService.hasLiked(loggedInUserId, selectedBlogId)) {
            // User has already liked, so unlike the post
            blogService.deleteLike(loggedInUserId, selectedBlogId);
            System.out.println("Like removed successfully");
        } else {
            // User has not liked, so like the post
            blogService.addLike(loggedInUserId, selectedBlogId);
            System.out.println("Like added successfully");

            // Check if the user has disliked, if so, remove the dislike
            if (blogService.hasDisliked(loggedInUserId, selectedBlogId)) {
                blogService.deleteDislike(loggedInUserId, selectedBlogId);
                System.out.println("Dislike removed successfully");
            }
        }
    }

    public void handleDislike() throws SQLException {
        // Get the logged-in user's email from the session
        String userEmail = (String) Session.getInstance().getUserSession().get("email");

        // Assuming you have a method to retrieve the user ID based on the email
        // Here, I'm using a placeholder variable for the user ID
        int loggedInUserId = getUserIDByEmail(userEmail); // Replace this with your actual method call

        // Assuming you have access to the selected blog ID
        int selectedBlogId = selectedBlog.getId();

        // Check if the user has already disliked this post
        if (blogService.hasDisliked(loggedInUserId, selectedBlogId)) {
            // User has already disliked, so undislike the post
            blogService.deleteDislike(loggedInUserId, selectedBlogId);
            System.out.println("Dislike removed successfully");
        } else {
            // User has not disliked, so dislike the post
            blogService.addDislike(loggedInUserId, selectedBlogId);
            System.out.println("Dislike added successfully");

            // Check if the user has liked, if so, remove the like
            if (blogService.hasLiked(loggedInUserId, selectedBlogId)) {
                blogService.deleteLike(loggedInUserId, selectedBlogId);
                System.out.println("Like removed successfully");
            }
        }
    }


    // Method to retrieve the user ID based on the email
    private int getUserIDByEmail(String email) {
        String query = "SELECT id FROM user WHERE email = ?";
        int userId = 0; // Default value if user ID is not found

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setString(1, email);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                userId = resultSet.getInt("id");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return userId;
    }


    // Action event handler for the shareButton
    public void shareBlog(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/socialMediaIcons.fxml"));
            Parent root = loader.load();

            // Access the SocialMediaIconsController from the loader
            SocialMediaIconsController iconsController = loader.getController();

            // Set the title and subject in the SocialMediaIconsController
            iconsController.setTitle(selectedBlog.getTitle());
            iconsController.setSubject(selectedBlog.getSubject());
            iconsController.setContent(selectedBlog.getContent());
            iconsController.setImageString(selectedBlog.getImage());

            Stage stage = new Stage();
            stage.initModality(Modality.APPLICATION_MODAL);
            stage.setTitle("Share on Social Media");
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            // Log the error for better debugging
            System.err.println("Error loading socialMediaIcons.fxml: " + e.getMessage());
        }
    }

    public void addToFavorites(ActionEvent event) {
        // Get the logged-in user's email from the session
        String userEmail = (String) Session.getInstance().getUserSession().get("email");

        // Assuming you have a method to retrieve the user ID based on the email
        // Here, I'm using a placeholder variable for the user ID
        int loggedInUserId = getUserIDByEmail(userEmail); // Replace this with your actual method call
        Button addToFavoritesButton = (Button) event.getSource();
        //Blog selectedBlog = (Blog) addToFavoritesButton.getUserData();

        if (selectedBlog != null) {
            System.out.println("Selected Blog ID: " + selectedBlog.getId());
            System.out.println("Logged-in User ID: " + loggedInUserId);

            try {
                // Check if the post is already in favorites
                if (favoritesService.isPostInFavorites(selectedBlog.getId(), loggedInUserId)) {
                    // If yes, remove it from favorites
                    favoritesService.removeFromFavorites(selectedBlog.getId(), loggedInUserId);
                    addToFavoritesButton.setText("Add to Favorites");
                    showAlert("Post removed from favorites.");
                } else {
                    // If not, add it to favorites
                    favoritesService.addToFavorites(selectedBlog.getId(), loggedInUserId);
                    addToFavoritesButton.setText("Remove from Favorites");
                    showAlert("Post added to favorites.");
                }
            } catch (SQLException e) {
                throw new RuntimeException(e);
            }
        } else {
            showAlert("Please select a post.");
        }
    }




    public void showAlert(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.initModality(Modality.APPLICATION_MODAL);
        alert.showAndWait();
    }

}
