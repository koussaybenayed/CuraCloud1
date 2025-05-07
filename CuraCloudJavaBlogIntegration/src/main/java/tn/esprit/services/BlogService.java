package tn.esprit.services;

import tn.esprit.interfaces.IServiceBlog;
import tn.esprit.models.Blog;
import tn.esprit.util.MaConnexion;

import java.sql.*;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

public class BlogService implements IServiceBlog<Blog> {

    //att
    Connection cnx = MaConnexion.getInstance().getCnx();


    //actions



    @Override
    public void add(Blog blog) {
        // Get the current date and time
        LocalDateTime currentDateTime = LocalDateTime.now();
        // Format the date and time as a string in the required format 'YYYY-MM-DD HH:mm:ss'
        String formattedDateTime = currentDateTime.format(DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss"));

        // Get the logged-in user's email from the session
        String userEmail = (String) Session.getInstance().getUserSession().get("email");

        // Assuming you have a method to retrieve the user ID based on the email
        // Here, I'm using a placeholder variable for the user ID
        int loggedInUserId = getUserIDByEmail(userEmail); // Replace this with your method to get user ID by email

        String req = "INSERT INTO `blog`(`content`, `subject`, `submission_date`, `title`, `image`, `author_id`) " +
                "VALUES ('" + blog.getContent() + "','" + blog.getSubject() + "','" + formattedDateTime + "','" +
                blog.getTitle() + "','" + blog.getImage() + "'," + loggedInUserId + ")";

        try {
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Blog added successfully");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }

    }
    public void addLike(int userId, int blogId) throws SQLException {
        if (!hasLiked(userId, blogId)) { // Check if the user has not already liked the post
            // Get the current date and time
            LocalDateTime currentDateTime = LocalDateTime.now();
            // Format the date and time as a string in the required format 'YYYY-MM-DD HH:mm:ss'
            String formattedDateTime = currentDateTime.format(DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss"));

            String req = "INSERT INTO likes (user_id, blog_id, created_at) VALUES (?, ?, ?)";

            try (PreparedStatement statement = cnx.prepareStatement(req)) {
                statement.setInt(1, userId);
                statement.setInt(2, blogId);
                statement.setString(3, formattedDateTime);
                statement.executeUpdate();
                System.out.println("Like added successfully");
            } catch (SQLException e) {
                throw new RuntimeException("Error adding like: " + e.getMessage(), e);
            }
        } else {
            System.out.println("User has already liked this post.");
        }
    }

    public void addDislike(int userId, int blogId) throws SQLException {
        if (!hasDisliked(userId, blogId)) { // Check if the user has not already disliked the post
            // Get the current date and time
            LocalDateTime currentDateTime = LocalDateTime.now();
            // Format the date and time as a string in the required format 'YYYY-MM-DD HH:mm:ss'
            String formattedDateTime = currentDateTime.format(DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss"));

            String req = "INSERT INTO dislike (user_id, blog_id, created_at) VALUES (?, ?, ?)";

            try (PreparedStatement statement = cnx.prepareStatement(req)) {
                statement.setInt(1, userId);
                statement.setInt(2, blogId);
                statement.setString(3, formattedDateTime);
                statement.executeUpdate();
                System.out.println("Dislike added successfully");
            } catch (SQLException e) {
                throw new RuntimeException("Error adding dislike: " + e.getMessage(), e);
            }
        } else {
            System.out.println("User has already disliked this post.");
        }
    }

    public boolean hasLiked(int userId, int blogId) throws SQLException {
        String req = "SELECT COUNT(*) FROM likes WHERE user_id = ? AND blog_id = ?";
        try (PreparedStatement statement = cnx.prepareStatement(req)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            try (ResultSet resultSet = statement.executeQuery()) {
                if (resultSet.next()) {
                    int count = resultSet.getInt(1);
                    return count > 0;
                }
            }
        }
        return false;
    }

    public boolean hasDisliked(int userId, int blogId) throws SQLException {
        String req = "SELECT COUNT(*) FROM dislike WHERE user_id = ? AND blog_id = ?";
        try (PreparedStatement statement = cnx.prepareStatement(req)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            try (ResultSet resultSet = statement.executeQuery()) {
                if (resultSet.next()) {
                    int count = resultSet.getInt(1);
                    return count > 0;
                }
            }
        }
        return false;
    }

    public void toggleLikeOrDislike(int userId, int blogId) throws SQLException {
        boolean hasLiked = hasLiked(userId, blogId);
        boolean hasDisliked = hasDisliked(userId, blogId);

        if (hasLiked) {
            deleteLike(userId, blogId); // Delete the existing like
        } else if (hasDisliked) {
            deleteDislike(userId, blogId); // Delete the existing dislike
        } else {
            addLike(userId, blogId); // Add like if neither liked nor disliked
        }
    }

    public void deleteLike(int userId, int blogId) throws SQLException {
        String req = "DELETE FROM likes WHERE user_id = ? AND blog_id = ?";
        try (PreparedStatement statement = cnx.prepareStatement(req)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            statement.executeUpdate();
            System.out.println("Like deleted successfully");
        }
    }

    public void deleteDislike(int userId, int blogId) throws SQLException {
        String req = "DELETE FROM dislike WHERE user_id = ? AND blog_id = ?";
        try (PreparedStatement statement = cnx.prepareStatement(req)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            statement.executeUpdate();
            System.out.println("Dislike deleted successfully");
        }
    }






    // Method to retrieve the user ID based on the email
    public int getUserIDByEmail(String email) {
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
        System.out.println("UserId =" + userId);

        return userId;
    }


    @Override
    public void delete(Blog blog) {
        try {
            // First, delete all likes associated with the blog
            String deleteLikesQuery = "DELETE FROM likes WHERE blog_id = ?";
            PreparedStatement deleteLikesStatement = cnx.prepareStatement(deleteLikesQuery);
            deleteLikesStatement.setInt(1, blog.getId());
            deleteLikesStatement.executeUpdate();

            // Next, delete all dislikes associated with the blog
            String deleteDislikesQuery = "DELETE FROM dislike WHERE blog_id = ?";
            PreparedStatement deleteDislikesStatement = cnx.prepareStatement(deleteDislikesQuery);
            deleteDislikesStatement.setInt(1, blog.getId());
            deleteDislikesStatement.executeUpdate();

            // Then, delete all comments associated with the blog
            String deleteCommentsQuery = "DELETE FROM comments WHERE blog_id_id = ?";
            PreparedStatement deleteCommentsStatement = cnx.prepareStatement(deleteCommentsQuery);
            deleteCommentsStatement.setInt(1, blog.getId());
            deleteCommentsStatement.executeUpdate();

            // Finally, delete the blog entry itself
            String deleteBlogQuery = "DELETE FROM blog WHERE id = ?";
            PreparedStatement deleteBlogStatement = cnx.prepareStatement(deleteBlogQuery);
            deleteBlogStatement.setInt(1, blog.getId());
            deleteBlogStatement.executeUpdate();

            System.out.println("Blog, likes, dislikes, and associated comments deleted successfully");
        } catch (SQLException e) {
            throw new RuntimeException("Error deleting blog, likes, dislikes, and associated comments: " + e.getMessage(), e);
        }
    }


    @Override
    public void update(Blog blog) {
        String updateQuery = "UPDATE blog SET content = '" + blog.getContent() + "', subject = '" + blog.getSubject() + "', submission_date = '" + blog.getSubmmission_date() + "', title = '" + blog.getTitle() + "', image = '" + blog.getImage() + "' WHERE id = " + blog.getId();
        try {
            Statement st = cnx.createStatement();
            int rowsAffected = st.executeUpdate(updateQuery);
            if (rowsAffected > 0) {
                System.out.println("Blog entry updated successfully.");
            } else {
                System.out.println("No blog entry found with ID " + blog.getId() + " to update.");
            }
        } catch (SQLException e) {
            throw new RuntimeException("Error updating blog entry: " + e.getMessage(), e);
        }
    }



    @Override
    public List<Blog> getAll() {
        List<Blog> blogs = new ArrayList<>();

        String req = "SELECT * FROM `blog` WHERE 1";
        try {
            Statement st = cnx.createStatement();
            ResultSet res = st.executeQuery(req);
            while (res.next()){
                Blog blog = new Blog();
                blog.setId(res.getInt("Id"));
                blog.setContent(res.getString("content"));
                blog.setSubject(res.getString("subject"));
                blog.setSubmmission_date(res.getTimestamp("submission_date"));
                blog.setTitle(res.getString("title"));
                blog.setImage(res.getString("image"));

                blogs.add(blog);
            }
        } catch(SQLException e){
            throw new RuntimeException(e);
        }


        return blogs;
    }

    @Override
    public Blog getOne(int id) {
        String req = "SELECT * FROM `blog` WHERE id = " + id;
        Blog blog = null;

        try {
            Statement st = cnx.createStatement();
            ResultSet res = st.executeQuery(req);
            if (res.next()) {
                blog = new Blog();
                blog.setId(res.getInt("Id"));
                blog.setContent(res.getString("content"));
                blog.setSubject(res.getString("subject"));
                blog.setSubmmission_date(res.getTimestamp("submission_date"));
                blog.setTitle(res.getString("title"));
                blog.setImage(res.getString("image"));
            }
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }

        return blog;
    }




}
