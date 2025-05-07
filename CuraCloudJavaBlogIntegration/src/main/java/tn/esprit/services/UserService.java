package tn.esprit.services;


import at.favre.lib.crypto.bcrypt.BCrypt;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.chart.AreaChart;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Label;
import tn.esprit.interfaces.IUser;
import tn.esprit.models.User;
import tn.esprit.util.MyConnection;

import java.sql.*;


public class UserService implements IUser {

    Connection cnx = MyConnection.getInstance().getCnx();

    @Override
    public void addClient(User u) {
        try {
            String jsonRoles = "[\"ROLE_PATIENT\"]";
            boolean gender = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            String req = "INSERT INTO " +
                    "`user`(`email`, `roles`, `password`, `first_name`, `last_name`, `phone_number`, `birth_date`, `gender`) " +
                    "VALUES (?,?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            if (u.isGender() == "Female") {
                gender = true;
            }
            ps.setString(1, u.getEmail());
            ps.setString(2, jsonRoles);
            ps.setString(3, hashedPassword);
            ps.setString(4, u.getFirst_name());
            ps.setString(5, u.getLast_name());
            ps.setString(6, u.getPhone_number());
            ps.setString(7, u.getBirth_date());
            ps.setBoolean(8, gender);
            ps.executeUpdate();
            System.out.println("Client Added Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void addDoctor(User u) {
        try {
            String jsonRoles = "[\"ROLE_DOCTOR\"]";
            boolean gender = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            String req = "INSERT INTO " +
                    "`user`(`email`,`roles`,`password`,`first_name`,`last_name`,`phone_number`,`birth_date`,`gender`,`speciality`,`certification`) " +
                    "VALUES (?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            if (u.isGender() == "Female") {
                gender = true;
            }
            ps.setString(1, u.getEmail());
            ps.setString(2, jsonRoles);
            ps.setString(3, hashedPassword);
            ps.setString(4, u.getFirst_name());
            ps.setString(5, u.getLast_name());
            ps.setString(6, u.getPhone_number());
            ps.setString(7, u.getBirth_date());
            ps.setBoolean(8, gender);
            ps.setString(9, u.getSpeciality());
            ps.setString(10, u.getCertification());
            ps.executeUpdate();
            System.out.println("Doctor Added Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void addPharmacy(User u) {
        try {
            boolean type = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            String jsonRoles = "[\"ROLE_PHARMACY\"]";
            if (u.isPharmacytype() == "Night") {
                type = true;
            }
            String req = "INSERT INTO " +
                    "`user`(`email`,`roles`,`password`,`first_name`,`phone_number`,`address`,`pharmacytype`) " +
                    "VALUES (?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, u.getEmail());
            ps.setString(2, jsonRoles);
            ps.setString(3, hashedPassword);
            ps.setString(4, u.getFirst_name());
            ps.setString(5, u.getPhone_number());
            ps.setString(6, u.getAddress());
            ps.setBoolean(7, type);
            ps.executeUpdate();
            System.out.println("Pharmacy Added Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void addLab(User u) {
        try {

            String jsonRoles = "[\"ROLE_LAB\"]";
            boolean type = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            if (u.isPublic_or_private() == "Private") {
                type = true;
            }
            String req = "INSERT INTO " +
                    "`user`(`email`,`roles`,`password`,`first_name`,`phone_number`,`address`,`public_or_private`) " +
                    "VALUES (?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, u.getEmail());
            ps.setString(2, jsonRoles);
            ps.setString(3, hashedPassword);
            ps.setString(4, u.getFirst_name());
            ps.setString(5, u.getPhone_number());
            ps.setString(6, u.getAddress());
            ps.setBoolean(7, type);
            ps.executeUpdate();
            System.out.println("Lab Added Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void addRadiology(User u) {
        try {
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            String jsonRoles = "[\"ROLE_RADIOLOGY\"]";
            boolean type = false;
            if (u.isPublic_or_private() == "Private") {
                type = true;
            }
            String req = "INSERT INTO " +
                    "`user`(`email`,`roles`,`password`,`first_name`,`phone_number`,`address`,`public_or_private`) " +
                    "VALUES (?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, u.getEmail());
            ps.setString(2, jsonRoles);
            ps.setString(3, hashedPassword);
            ps.setString(4, u.getFirst_name());
            ps.setString(5, u.getPhone_number());
            ps.setString(6, u.getAddress());
            ps.setBoolean(7, type);
            ps.executeUpdate();
            System.out.println("Radiology Center Added Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void updateClient(User u) {
        try {
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            boolean gender = false;
            String req = "UPDATE `user` SET `password`=?, `first_name`=?, `last_name`=?, `phone_number`=?, `birth_date`=?, `gender`=? WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            if (u.isGender() == "Female") {
                gender = true;
            }
            ps.setString(1, hashedPassword);
            ps.setString(2, u.getFirst_name());
            ps.setString(3, u.getLast_name());
            ps.setString(4, u.getPhone_number());
            ps.setString(5, u.getBirth_date());
            ps.setBoolean(6, gender);
            ps.setString(7, u.getEmail());
            ps.executeUpdate();
            System.out.println("Client Updated Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }


    @Override
    public void updateDoctor(User u) {
        try {
            boolean gender = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            String req = "UPDATE `user` SET `password`=?, `first_name`=?, `last_name`=?, `phone_number`=?, `birth_date`=?, `gender`=?, `speciality`=?, `certification`=? WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            if (u.isGender() == "Female") {
                gender = true;
            }
            ps.setString(1, hashedPassword);
            ps.setString(2, u.getFirst_name());
            ps.setString(3, u.getLast_name());
            ps.setString(4, u.getPhone_number());
            ps.setString(5, u.getBirth_date());
            ps.setBoolean(6, gender);
            ps.setString(7, u.getSpeciality());
            ps.setString(8, u.getCertification());
            ps.setString(9, u.getEmail());
            ps.executeUpdate();
            System.out.println("Doctor Updated Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public void updatePharmacy(User u) {
        try {
            boolean type = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            if (u.isPharmacytype() == "Night") {
                type = true;
            }
            String req = "UPDATE `user` SET `password`=?, `first_name`=?, `phone_number`=?, `address`=?, `pharmacytype`=? WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, hashedPassword);
            ps.setString(2, u.getFirst_name());
            ps.setString(3, u.getPhone_number());
            ps.setString(4, u.getAddress());
            ps.setBoolean(5, type);
            ps.setString(6, u.getEmail());
            ps.executeUpdate();
            System.out.println("Pharmacy Updated Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }


    @Override
    public void updateLab(User u) {
        try {
            boolean type = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            if (u.isPublic_or_private() == "Private") {
                type = true;
            }
            String req = "UPDATE `user` SET `password`=?, `first_name`=?, `phone_number`=?, `address`=?, `public_or_private`=? WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, hashedPassword);
            ps.setString(2, u.getFirst_name());
            ps.setString(3, u.getPhone_number());
            ps.setString(4, u.getAddress());
            ps.setBoolean(5, type);
            ps.setString(6, u.getEmail());
            ps.executeUpdate();
            System.out.println("Lab Updated Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }


    @Override
    public void updateRadiology(User u) {
        try {
            boolean type = false;
            String hashedPassword = BCrypt.withDefaults().hashToString(13, u.getPassword().toCharArray());
            if (u.isPublic_or_private() == "Private") {
                type = true;
            }
            String req = "UPDATE `user` SET `password`=?, `first_name`=?, `phone_number`=?, `address`=?, `public_or_private`=? WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, hashedPassword);
            ps.setString(2, u.getFirst_name());
            ps.setString(3, u.getPhone_number());
            ps.setString(4, u.getAddress());
            ps.setBoolean(5, type);
            ps.setString(6, u.getEmail());
            ps.executeUpdate();
            System.out.println("Radiology Center Updated Successfully!");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }


    @Override
    public void delete(String s) {
        try {
            String req = "DELETE FROM `user` WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, s);
            int rowsAffected = ps.executeUpdate();
            if (rowsAffected > 0) {
                System.out.println("User Deleted Successfully!");
            } else {
                System.out.println("No user found with the provided email.");
            }
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    @Override
    public ObservableList<User> fetchClients() {

        ObservableList<User> Users = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM User WHERE roles = '[\"ROLE_PATIENT\"]'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {
                User u = new User();
                u.setEmail(rs.getString("email"));
                u.setFirst_name(rs.getString("first_name"));
                u.setLast_name(rs.getString("last_name"));
                u.setPhone_number(rs.getString("phone_number"));
                u.setBirth_date(rs.getString("birth_date"));
                if (rs.getInt("gender") == 0) {

                    u.setGender("Male");

                } else {
                    u.setGender("Female");
                }

                u.setIsbanned(rs.getString("isbanned"));
                Users.add(u);
            }

        } catch (SQLException ex) {
            throw new RuntimeException(ex);
        }

        return Users;
    }

    @Override
    public ObservableList<User> fetchDoctors() {

        ObservableList<User> Users = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM User WHERE roles = '[\"ROLE_DOCTOR\"]'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {
                User u = new User();
                u.setEmail(rs.getString("email"));
                u.setFirst_name(rs.getString("first_name"));
                u.setLast_name(rs.getString("last_name"));
                u.setPhone_number(rs.getString("phone_number"));
                u.setAddress(rs.getString("address"));
                u.setSpeciality(rs.getString("speciality"));
                if (rs.getInt("gender") == 0) {
                    u.setGender("Male");
                } else {
                    u.setGender("Female");
                }

                Users.add(u);
            }

        } catch (SQLException ex) {
            throw new RuntimeException(ex);
        }

        return Users;
    }

    @Override
    public ObservableList<User> fetchEstablishments() {

        ObservableList<User> Users = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM User WHERE roles = '[\"ROLE_LAB\"]' OR roles = '[\"ROLE_PHARMACY\"]' OR roles = '[\"ROLE_RADIOLOGY\"]'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {
                User u = new User();
                u.setEmail(rs.getString("email"));
                u.setFirst_name(rs.getString("first_name"));
                u.setPhone_number(rs.getString("phone_number"));
                u.setAddress(rs.getString("address"));
                u.setRole(rs.getString("roles"));
                if (rs.getString("public_or_private") != null) {
                    if (rs.getInt("public_or_private") == 0) {
                        u.setPublic_or_private("Public");
                    } else {
                        u.setPublic_or_private("Private");
                    }

                }else if (rs.getString("public_or_private") == null) {
                    if (rs.getInt("pharmacytype") == 0) {
                        u.setPublic_or_private("Jour");
                    } else {
                        u.setPublic_or_private("Nuit");
                    }
                }

                Users.add(u);
            }

        } catch (SQLException ex) {
            throw new RuntimeException(ex);
        }

        return Users;
    }

    public void homeDisplayTotalUsers(Label lab) {

        String sql = "SELECT COUNT(id) AS total FROM `user`";

        int countusers = 0;

        try {
            PreparedStatement prepare = cnx.prepareStatement(sql);
            ResultSet result = prepare.executeQuery();

            if (result.next()) {
                countusers = result.getInt("total");
            }

            lab.setText(String.valueOf(countusers));

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void homeDisplayTotalDoctors(Label lab) {

        String sql = "SELECT COUNT(id) AS total FROM `user` WHERE JSON_CONTAINS(roles, '[\"ROLE_DOCTOR\"]')";

        int countDoctors = 0;

        try {
            PreparedStatement prepare = cnx.prepareStatement(sql);
            ResultSet result = prepare.executeQuery();

            if (result.next()) {
                countDoctors = result.getInt("total");
            }

            lab.setText(String.valueOf(countDoctors));

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void homeDisplayTotalBanned(Label lab) {

        String sql = "SELECT COUNT(id) AS total FROM `user` WHERE isbanned = 1";

        int countBanned = 0;

        try {
            PreparedStatement prepare = cnx.prepareStatement(sql);
            ResultSet result = prepare.executeQuery();

            if (result.next()) {
                countBanned = result.getInt("total");
            }

            lab.setText(String.valueOf(countBanned));

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void homeDisplayTotalUsersChart(BarChart<?,?> bc) {

        bc.getData().clear();

        String sql = "SELECT DATE_FORMAT(inscription_date, '%Y-%m-%d') AS formatted_date, COUNT(id) FROM user GROUP BY formatted_date ORDER BY formatted_date ASC LIMIT 5";

        try {
            XYChart.Series chart = new XYChart.Series();

            PreparedStatement prepare = cnx.prepareStatement(sql);
            ResultSet result = prepare.executeQuery();

            while (result.next()) {
                chart.getData().add(new XYChart.Data(result.getString(1), result.getInt(2)));
            }

            bc.getData().add(chart);

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void homeDisplayBannedUsersChart(AreaChart<?,?> bc) {

        bc.getData().clear();

        String sql = "SELECT DATE_FORMAT(inscription_date, '%Y-%m-%d') AS formatted_date, COUNT(id) FROM user WHERE isbanned = 1 GROUP BY formatted_date ORDER BY formatted_date ASC LIMIT 5";

        try {
            XYChart.Series chart = new XYChart.Series();

            PreparedStatement prepare = cnx.prepareStatement(sql);
            ResultSet result = prepare.executeQuery();

            while (result.next()) {
                chart.getData().add(new XYChart.Data(result.getString(1), result.getInt(2)));
            }

            bc.getData().add(chart);

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void banUser(String email) {
        try {
            String req = "UPDATE `user` SET `isbanned`=1 WHERE `email`=?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, email);
            ps.executeUpdate();
            System.out.println("user is banned!");
           // new GMailer().sendBanMail("You Have Been Banned",email);

        } catch (SQLException e) {
            throw new RuntimeException(e);
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
    }

    public String ForgetPassword (String email) throws Exception {

            System.out.println("email is sent!");
           return new GMailer().sendForgetMail("change password", email);
    }

    public void SetNewPassword (String email, String password) throws Exception {
        String hashedPassword = BCrypt.withDefaults().hashToString(13, password.toCharArray());
        String req = "UPDATE `user` SET `password`=? WHERE `email`=?";
        PreparedStatement ps = cnx.prepareStatement(req);
        ps.setString(1, hashedPassword);
        ps.setString(2, email);
        ps.executeUpdate();
    }

    public String getUserRoleByEmail(String email) {
        String query = "SELECT roles FROM user WHERE email = ?";
        String userRole = ""; // Default value if user role is not found

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setString(1, email);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                userRole = resultSet.getString("roles");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return userRole;
    }

}

