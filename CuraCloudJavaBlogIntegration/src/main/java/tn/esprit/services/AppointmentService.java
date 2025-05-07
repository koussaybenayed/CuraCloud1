package tn.esprit.services;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import tn.esprit.interfaces.AppointmentInterface;
import tn.esprit.models.Appointment;
import tn.esprit.models.User;
import tn.esprit.util.MyConnection;

import java.sql.*;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

public class AppointmentService implements AppointmentInterface {
    // var
    Connection cnx = MyConnection.getInstance().getCnx();

    @Override
    public void addAppointment(Appointment p) {
        //Connection cnx = MyConnection.getInstance().getCnx();
        try {

            String req = "INSERT INTO `appointment`(`description`, `status`, `start_date`, `end_date`, `rating`, `id_user_id`, `id_doctor_id`) VALUES (?,?,?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, p.getDescription());
            ps.setString(2, p.getStatus());
            ps.setTimestamp(3, Timestamp.valueOf(p.getStartDate()));  // Convert LocalDateTime to Timestamp
            ps.setTimestamp(4, Timestamp.valueOf(p.getEndDate()));    // Convert LocalDateTime to Timestamp
            ps.setInt(5, p.getRating());
            ps.setInt(6, p.getIdPatient());
            ps.setInt(7, p.getIdDoctor());
            ps.executeUpdate();
            System.out.println("Appointment Added Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }

    public List<Appointment> fetchAppointment() {
        List<Appointment> appointments = new ArrayList<>();
        String SQL = "SELECT id, description, status, start_date, end_date, rating, id_user_id, id_doctor_id FROM appointment";

        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL);
             ResultSet rs = pstmt.executeQuery()) {

            while (rs.next()) {
                int id = rs.getInt("id");
                String description = rs.getString("description");
                String status = rs.getString("status");
                Timestamp startTimestamp = rs.getTimestamp("start_date");
                Timestamp endTimestamp = rs.getTimestamp("end_date");
                int rating = rs.getInt("rating");
                int idPatient = rs.getInt("id_user_id");
                int idDoctor = rs.getInt("id_doctor_id");

                LocalDateTime startDate = startTimestamp.toLocalDateTime();
                LocalDateTime endDate = endTimestamp.toLocalDateTime();

                // Create a new Appointment object and add it to the list
                appointments.add(new Appointment(id, description, status, startDate, endDate, rating, idPatient, idDoctor));
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return appointments;
    }


    @Override
    public void updateAppointment(Appointment p) {
        //Connection cnx = MyConnection.getInstance().getCnx();
        try {
            String req = "UPDATE `appointment` SET description = ?, status = ?, start_date = ?, end_date = ?, rating = ?, id_user_id = ?, id_doctor_id = ? WHERE id = ?";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, p.getDescription());
            ps.setString(2, p.getStatus());
            ps.setTimestamp(3, Timestamp.valueOf(p.getStartDate()));  // Convert LocalDateTime to Timestamp
            ps.setTimestamp(4, Timestamp.valueOf(p.getEndDate()));    // Convert LocalDateTime to Timestamp
            ps.setInt(5, p.getRating());
            ps.setInt(6, p.getIdPatient());
            ps.setInt(7, p.getIdDoctor());
            ps.setInt(8, p.getId());
            ps.executeUpdate();
            System.out.println("Appointment updated successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public void deleteAppointment(int id) {

        String SQL = "DELETE FROM appointment WHERE id = ?";
        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, id);

            int affectedRows = pstmt.executeUpdate();
            if (affectedRows > 0) {
                System.out.println("appointment deleted successfully.");
            } else {
                System.out.println("No appointment deleted.");
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    public boolean isTimeSlotAvailable(LocalDateTime startDateTime, LocalDateTime endDateTime) {
        List<Appointment> existingAppointments = fetchAppointment();

        for (Appointment appointment : existingAppointments) {
            if (appointment.getEndDate().isAfter(startDateTime) && appointment.getStartDate().isBefore(endDateTime)) {
                // Overlapping time slot found
                return false;
            }
        }
        // No overlap found, time slot is available
        return true;
    }

    public List<Appointment> fetchAppointmentsByStatus(String status) {
        List<Appointment> appointments = new ArrayList<>();
        String SQL = "SELECT id, description, status, start_date, end_date, rating, id_user_id, id_doctor_id FROM appointment WHERE status = ?";

        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setString(1, status);

            try (ResultSet rs = pstmt.executeQuery()) {
                while (rs.next()) {
                    int id = rs.getInt("id");
                    String description = rs.getString("description");
                    Timestamp startTimestamp = rs.getTimestamp("start_date");
                    Timestamp endTimestamp = rs.getTimestamp("end_date");
                    int rating = rs.getInt("rating");
                    int idPatient = rs.getInt("id_user_id");
                    int idDoctor = rs.getInt("id_doctor_id");

                    LocalDateTime startDate = startTimestamp.toLocalDateTime();
                    LocalDateTime endDate = endTimestamp.toLocalDateTime();

                    // Create a new Appointment object and add it to the list
                    appointments.add(new Appointment(id, description, status, startDate, endDate, rating, idPatient, idDoctor));
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return appointments;
    }
    public List<Appointment> fetchAppointmentsByPatientId(int patientId) {
        List<Appointment> appointments = new ArrayList<>();
        String SQL = "SELECT id, description, status, start_date, end_date, rating, id_doctor_id FROM appointment WHERE id_user_id = ?";

        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, patientId);

            try (ResultSet rs = pstmt.executeQuery()) {
                while (rs.next()) {
                    int id = rs.getInt("id");
                    String description = rs.getString("description");
                    String status = rs.getString("status");
                    Timestamp startTimestamp = rs.getTimestamp("start_date");
                    Timestamp endTimestamp = rs.getTimestamp("end_date");
                    int rating = rs.getInt("rating");
                    int doctorId = rs.getInt("id_doctor_id");

                    LocalDateTime startDate = startTimestamp.toLocalDateTime();
                    LocalDateTime endDate = endTimestamp.toLocalDateTime();

                    // Create a new Appointment object and add it to the list
                    appointments.add(new Appointment(id, description, status, startDate, endDate, rating, patientId, doctorId));
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return appointments;
    }

    // Method to fetch appointments by doctor ID
    public List<Appointment> fetchAppointmentsByDoctorId(int doctorId) {
        List<Appointment> appointments = new ArrayList<>();
        String SQL = "SELECT id, description, status, start_date, end_date, rating, id_user_id FROM appointment WHERE id_doctor_id = ?";

        try (
             PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, doctorId);

            try (ResultSet rs = pstmt.executeQuery()) {
                while (rs.next()) {
                    int id = rs.getInt("id");
                    String description = rs.getString("description");
                    String status = rs.getString("status");
                    Timestamp startTimestamp = rs.getTimestamp("start_date");
                    Timestamp endTimestamp = rs.getTimestamp("end_date");
                    int rating = rs.getInt("rating");
                    int patientId = rs.getInt("id_user_id");

                    LocalDateTime startDate = startTimestamp.toLocalDateTime();
                    LocalDateTime endDate = endTimestamp.toLocalDateTime();

                    // Create a new Appointment object and add it to the list
                    appointments.add(new Appointment(id, description, status, startDate, endDate, rating, patientId, doctorId));
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return appointments;
    }

    public List<Appointment> fetchCompletedAppointments(int patientId) {
        List<Appointment> completedAppointments = new ArrayList<>();
        String SQL = "SELECT id, description, status, start_date, end_date, rating, id_user_id, id_doctor_id FROM appointment WHERE status = 'Completed' AND id_user_id = ?";

        try (PreparedStatement pstmt = cnx.prepareStatement(SQL)) {
            pstmt.setInt(1, patientId);
            try (ResultSet rs = pstmt.executeQuery()) {
                while (rs.next()) {
                    int id = rs.getInt("id");
                    String description = rs.getString("description");
                    String status = rs.getString("status");
                    Timestamp startTimestamp = rs.getTimestamp("start_date");
                    Timestamp endTimestamp = rs.getTimestamp("end_date");
                    int rating = rs.getInt("rating");
                    int idPatient = rs.getInt("id_user_id");
                    int idDoctor = rs.getInt("id_doctor_id");

                    LocalDateTime startDate = startTimestamp.toLocalDateTime();
                    LocalDateTime endDate = endTimestamp.toLocalDateTime();

                    // Create a new Appointment object and add it to the list
                    completedAppointments.add(new Appointment(id, description, status, startDate, endDate, rating, idPatient, idDoctor));
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return completedAppointments;
    }
    public List<String> generateAvailableTimeSlots(LocalDateTime startDate, LocalDateTime endDate) {
        List<String> availableTimeSlots = new ArrayList<>();

        // Define the time interval for each slot (e.g., 30 minutes)
        int slotDurationMinutes = 30;
        LocalDateTime currentDateTime = startDate;

        // Iterate over the time range and check availability for each slot
        while (currentDateTime.isBefore(endDate)) {
            LocalDateTime slotEndDateTime = currentDateTime.plusMinutes(slotDurationMinutes);

            // Check if the time slot is available
            if (isTimeSlotAvailable(currentDateTime, slotEndDateTime)) {
                String timeSlotString = formatDateTime(currentDateTime) + " - " + formatDateTime(slotEndDateTime);
                availableTimeSlots.add(timeSlotString);
            }

            // Move to the next time slot
            currentDateTime = slotEndDateTime;
        }

        return availableTimeSlots;
    }

    private String formatDateTime(LocalDateTime dateTime) {
        // Format LocalDateTime as a string (e.g., "09:00 AM")
        return dateTime.toString(); // You can use DateTimeFormatter for more advanced formatting
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
    public String getDoctorNameByDoctorID(int doctorID) {
        String query = "SELECT CONCAT(first_name, ' ', last_name) AS doctor_name FROM user WHERE id = ?";
        String doctorName = null; // Default value if doctor name is not found

        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setInt(1, doctorID);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                doctorName = resultSet.getString("doctor_name");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return doctorName;
    }
    public ObservableList<User> fetchClients() {

        ObservableList<User> Users = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM User WHERE roles = '[\"ROLE_PATIENT\"]'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {
                User u = new User();
                u.setId(rs.getInt("id")); // Set the id
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

    public ObservableList<User> fetchDoctors() {

        ObservableList<User> Users = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM User WHERE roles = '[\"ROLE_DOCTOR\"]'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {
                User u = new User();
                u.setId(rs.getInt("id")); // Set the id
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


}

