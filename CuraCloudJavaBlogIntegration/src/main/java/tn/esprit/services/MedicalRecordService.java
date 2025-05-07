package tn.esprit.services;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import tn.esprit.interfaces.MedicalRecordInterface;
import tn.esprit.models.MedicalRecord;
import tn.esprit.models.User;
import tn.esprit.util.MyConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class MedicalRecordService implements MedicalRecordInterface {

    Connection cnx = MyConnection.getInstance().getCnx();

    @Override
    public void addMedicalRecord(MedicalRecord mr) {
        try {
            String req = "INSERT INTO `medical_record`(`medical_history`, `surgical_history`, `family_history`, `allergies`, `height`, `weight`, `blood_type`, `diseases`, `medications`, `vaccines`, `patient_name` ,`id_patient_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, mr.getMedicalHistory());
            ps.setString(2, mr.getSurgicalHistory());
            ps.setString(3, mr.getFamilyHistory());
            ps.setString(4, mr.getAllergies());
            ps.setFloat(5, mr.getHeight());
            ps.setFloat(6, mr.getWeight());
            ps.setString(7, mr.getBloodType());
            ps.setString(8, mr.getDiseases());
            ps.setString(9, mr.getMedications());
            ps.setString(10, mr.getVaccines());
            ps.setString(11, mr.getPatientName());
            ps.setInt(12, mr.getIdPatient());

            ps.executeUpdate();
            System.out.println("Medical Record Added Successfully!");

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public List<MedicalRecord> fetchMedicalRecords() {
        List<MedicalRecord> medicalRecords = new ArrayList<>();
        String SQL = "SELECT * FROM medical_record";

        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL);
             ResultSet rs = pstmt.executeQuery()) {

            while (rs.next()) {
                int id = rs.getInt("id");
                String medicalHistory = rs.getString("medical_history");
                String surgicalHistory = rs.getString("surgical_history");
                String familyHistory = rs.getString("family_history");
                String allergies = rs.getString("allergies");
                float height = rs.getFloat("height");
                float weight = rs.getFloat("weight");
                String bloodType = rs.getString("blood_type");
                String diseases = rs.getString("diseases");
                String medications = rs.getString("medications");
                String vaccines = rs.getString("vaccines");
                String patientName = rs.getString("patient_name");
                int idPatient = rs.getInt("id_patient_id");
                medicalRecords.add(new MedicalRecord(id, medicalHistory, surgicalHistory, familyHistory, allergies, height, weight, bloodType, diseases, medications, vaccines, patientName,idPatient));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return medicalRecords;
    }

    @Override
    public void updateMedicalRecord(MedicalRecord mr) {
        try {
            String req = "UPDATE `medical_record` SET `medical_history` = ?, `surgical_history` = ?, `family_history` = ?, `allergies` = ?, `height` = ?, `weight` = ?, `blood_type` = ?, `diseases` = ?, `medications` = ?, `vaccines` = ?, `patient_name` = ?, `id_patient_id` = ? WHERE `id` = ?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, mr.getMedicalHistory());
            ps.setString(2, mr.getSurgicalHistory());
            ps.setString(3, mr.getFamilyHistory());
            ps.setString(4, mr.getAllergies());
            ps.setFloat(5, mr.getHeight());
            ps.setFloat(6, mr.getWeight());
            ps.setString(7, mr.getBloodType());
            ps.setString(8, mr.getDiseases());
            ps.setString(9, mr.getMedications());
            ps.setString(10, mr.getVaccines());
            ps.setString(11, mr.getPatientName());
            ps.setInt(12, mr.getIdPatient());
            ps.setInt(13, mr.getId());

            ps.executeUpdate();
            System.out.println("Medical Record Updated Successfully!");

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }
    @Override
    public void deleteMedicalRecord(int id) {
        String SQL = "DELETE FROM medical_record WHERE id = ?";
        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL)) {

            pstmt.setInt(1, id);
            int affectedRows = pstmt.executeUpdate();

            if (affectedRows > 0) {
                System.out.println("Medical Record deleted successfully.");
            } else {
                System.out.println("No Medical Record found with ID: " + id);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
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
                u.setId(rs.getInt("id"));
                u.setEmail(rs.getString("email"));
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
    public boolean isMedicalRecordExists(int patientId) {
        String SQL = "SELECT COUNT(*) FROM medical_record WHERE id_patient_id = ?";
        int count = 0;

        try (PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, patientId);
            try (ResultSet rs = pstmt.executeQuery()) {
                if (rs.next()) {
                    count = rs.getInt(1);
                }
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return count > 0;
    }
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

        return userId;
    }
    @Override
    public List<MedicalRecord> fetchMedicalRecordByPatientId(int patientId) {
        List<MedicalRecord> medicalRecords = new ArrayList<>();
        String SQL = "SELECT * FROM medical_record WHERE id_patient_id = ?";

        try (PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, patientId);
            try (ResultSet rs = pstmt.executeQuery()) {
                while (rs.next()) {
                    int id = rs.getInt("id");
                    String medicalHistory = rs.getString("medical_history");
                    String surgicalHistory = rs.getString("surgical_history");
                    String familyHistory = rs.getString("family_history");
                    String allergies = rs.getString("allergies");
                    float height = rs.getFloat("height");
                    float weight = rs.getFloat("weight");
                    String bloodType = rs.getString("blood_type");
                    String diseases = rs.getString("diseases");
                    String medications = rs.getString("medications");
                    String vaccines = rs.getString("vaccines");
                    String patientName = rs.getString("patient_name");
                    medicalRecords.add(new MedicalRecord(id, medicalHistory, surgicalHistory, familyHistory, allergies, height, weight, bloodType, diseases, medications, vaccines, patientName, patientId));
                }
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return medicalRecords;
    }
    public User fetchUserById(int userId) {
        User user = null;
        String query = "SELECT * FROM user WHERE id = ?";

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, userId);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                user = new User();
                user.setId(resultSet.getInt("id"));
                user.setEmail(resultSet.getString("email"));
                user.setFirst_name(resultSet.getString("first_name"));
                user.setLast_name(resultSet.getString("last_name"));
                user.setPhone_number(resultSet.getString("phone_number"));
                user.setBirth_date(resultSet.getString("birth_date"));
                if (resultSet.getInt("gender") == 0) {
                    user.setGender("Male");
                } else {
                    user.setGender("Female");
                }
                user.setIsbanned(resultSet.getString("isbanned"));
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return user;
    }
}
