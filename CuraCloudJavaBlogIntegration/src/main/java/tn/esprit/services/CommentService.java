package tn.esprit.services;

import tn.esprit.interfaces.IServiceBlog;
import tn.esprit.models.Comment;
import tn.esprit.util.MaConnexion;

import java.sql.*;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

public class CommentService implements IServiceBlog<Comment> {

    Connection cnx = MaConnexion.getInstance().getCnx();

    @Override
    public void add(Comment comment) {
        // Ensure the comment has a valid reference to a Blog
        if (comment.getBlog() == null) {
            throw new IllegalArgumentException("Comment must have a valid reference to a Blog.");
        }

        // Get the current date and time
        LocalDateTime currentDateTime = LocalDateTime.now();
        // Format the date and time as a string in the required format 'YYYY-MM-DD HH:mm:ss'
        String formattedDateTime = currentDateTime.format(DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss"));

        // Get the logged-in user's email from the session
        String userEmail = (String) Session.getInstance().getUserSession().get("email");

        // Assuming you have a method to retrieve the user ID based on the email
        // Here, I'm using a placeholder variable for the user ID
        int loggedInUserId = getUserIDByEmail(userEmail); // Replace this with your method to get user ID by email

        String sql = "INSERT INTO comments (content, submission_date, blog_id_id, user_id) VALUES (?, ?, ?, ?)";
        try (PreparedStatement statement = cnx.prepareStatement(sql)) {
            statement.setString(1, comment.getContent());
            statement.setTimestamp(2, Timestamp.valueOf(currentDateTime));
            statement.setInt(3, comment.getBlog().getId());
            statement.setInt(4, loggedInUserId);
            statement.executeUpdate();
            System.out.println("Comment added successfully");
        } catch (SQLException e) {
            throw new RuntimeException(e);
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






    @Override
    public void update(Comment comment) {

    }

    @Override
    public void delete(Comment comment) {

        String req = "DELETE FROM `comments` WHERE id =" + comment.getId();

        try {
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Comment deleted");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }

    }

    @Override
    public List<Comment> getAll() {
        List<Comment> comments = new ArrayList<>();

        String req = "SELECT * FROM `comments` WHERE 1";
        try {
            Statement st = cnx.createStatement();
            ResultSet res = st.executeQuery(req);
            while (res.next()){
                Comment comment = new Comment();
                comment.setId(res.getInt("Id"));
                comment.setContent(res.getString("content"));
                comment.setSubmmission_date(res.getTimestamp("submission_date"));


                comments.add(comment);
            }
        } catch(SQLException e){
            throw new RuntimeException(e);
        }


        return comments;
    }

    public List<Comment> getAllCommentsForBlog(int blogId) {
        List<Comment> comments = new ArrayList<>();
        String query = "SELECT * FROM comments WHERE blog_id_id = ?"; // Update the column name

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, blogId); // Set the blog ID as the parameter value
            ResultSet resultSet = statement.executeQuery();
            while (resultSet.next()) {
                // Retrieve comment data and add to the list
                Comment comment = new Comment();
                comment.setId(resultSet.getInt("id"));
                comment.setContent(resultSet.getString("content"));
                comment.setSubmmission_date(resultSet.getTimestamp("submission_date"));
                comment.setIdBlog(resultSet.getInt("blog_id_id")); // Update the column name
                comments.add(comment);
            }
        } catch (SQLException e) {
            System.err.println("Error fetching comments: " + e.getMessage());
        }

        return comments;
    }


    @Override
    public Comment getOne(int id) {
        return null;
    }
}
