package tn.esprit.services;

import tn.esprit.models.Blog;
import tn.esprit.models.Favorites;
import tn.esprit.util.MaConnexion;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class favoritesService {

    // Simulated database or repository for favorites
    private final List<Favorites> favoritesList = new ArrayList<>();
    Connection cnx = MaConnexion.getInstance().getCnx();

    public void FavoritesService() {
        cnx = MaConnexion.getInstance().getCnx();
    }

    public void addToFavorites(int blogId,int userId) throws SQLException {
        String query = "INSERT INTO favorites (user_id, blog_id) VALUES (?, ?)";

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            statement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
            throw e; // Propagate the exception for handling at the caller level
        }
    }

    public boolean isPostInFavorites(int blogId, int userId) throws SQLException {
        String query = "SELECT COUNT(*) FROM favorites WHERE user_id = ? AND blog_id = ?";
        int count = 0;

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                count = resultSet.getInt(1);
            }
        } catch (SQLException e) {
            e.printStackTrace();
            throw e; // Propagate the exception for handling at the caller level
        }

        return count > 0;
    }

    public void removeFromFavorites(int blogId, int userId ) throws SQLException {
        String query = "DELETE FROM favorites WHERE user_id = ? AND blog_id = ?";

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, userId);
            statement.setInt(2, blogId);
            statement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
            throw e; // Propagate the exception for handling at the caller level
        }
    }
}
