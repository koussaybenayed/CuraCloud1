package tn.esprit.util;

import at.favre.lib.crypto.bcrypt.BCrypt;

import java.sql.*;


public class MyConnection {
    //DB PARAM
    static final String URL ="jdbc:mysql://localhost:3306/CuraCloud";
    static final String USER ="root";
    static final String PASSWORD ="";

    //var
    private Connection cnx;
    //1
    private static MyConnection instance;

    //const
    //2
    public MyConnection(){
        try {
            cnx = DriverManager.getConnection(URL, USER, PASSWORD);
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }


    public Connection getCnx() {
        return cnx;
    }

    //3
    public static MyConnection getInstance() {
        if(instance == null)
            instance = new MyConnection();

        return instance;
    }

    // Method to check if the email exists in the database
    public boolean checkEmailExists(String email) {
        // Initialize database connection
        Connection connection = null;
        PreparedStatement statement = null;
        ResultSet resultSet = null;

        try {
            // Prepare SQL statement
            String sql = "SELECT COUNT(*) FROM user WHERE email = ?";
            statement = cnx.prepareStatement(sql);
            statement.setString(1, email);

            // Execute query
            resultSet = statement.executeQuery();

            // Check if any rows are returned
            if (resultSet.next()) {
                int count = resultSet.getInt(1);
                return count > 0; // Return true if count is greater than 0 (email exists), false otherwise
            }
        } catch (SQLException e) {
            e.printStackTrace();
            // Handle exception
        } finally {
            // Close resources
            try {
                if (resultSet != null) resultSet.close();
                if (statement != null) statement.close();
                if (connection != null) connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
                // Handle exception
            }
        }
        return false; // Return false in case of any error or if no rows are returned
    }

    public boolean checkPasswordMatches(String email, String password) {
        Connection connection = null;
        PreparedStatement statement = null;
        ResultSet resultSet = null;

        try {
            // Prepare SQL statement to retrieve password for the given email
            String sql = "SELECT password FROM user WHERE email = ?";
            statement = cnx.prepareStatement(sql);
            statement.setString(1, email);

            // Execute query
            resultSet = statement.executeQuery();

            // Check if a row is returned (email exists)
            if (resultSet.next()) {
                String storedPassword = resultSet.getString("password");
                // Compare stored password with the entered password
                return BCrypt.verifyer().verify(password.toCharArray(), storedPassword).verified;
            }
        } catch (SQLException e) {
            e.printStackTrace();
            // Handle exception
        } finally {
            // Close resources
            try {
                if (resultSet != null) resultSet.close();
                if (statement != null) statement.close();
                if (connection != null) connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
                // Handle exception
            }
        }
        return false; // Return false in case of any error or if no rows are returned
    }


    public boolean checkBannedAccount(String email){
        Connection connection = null;
        PreparedStatement statement = null;
        ResultSet resultSet = null;

        try {
            // Prepare SQL statement to retrieve password for the given email
            String sql = "SELECT isbanned FROM user WHERE email = ?";
            statement = cnx.prepareStatement(sql);
            statement.setString(1, email);

            // Execute query
            resultSet = statement.executeQuery();

            // Check if a row is returned (email exists)
            if (resultSet.next()) {
                // Compare stored password with the entered password
                return resultSet.getBoolean("isbanned");
            }
        } catch (SQLException e) {
            e.printStackTrace();
            // Handle exception
        } finally {
            // Close resources
            try {
                if (resultSet != null) resultSet.close();
                if (statement != null) statement.close();
                if (connection != null) connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
                // Handle exception
            }
        }
        return false; // Return false in case of any error or if no rows are returned
    }


}
