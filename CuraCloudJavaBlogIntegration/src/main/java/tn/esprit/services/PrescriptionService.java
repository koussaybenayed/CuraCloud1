package tn.esprit.services;
import tn.esprit.models.Prescription;
import tn.esprit.models.Meds;
import tn.esprit.interfaces.PrescriptionInterface;
import tn.esprit.util.MaConnexion;
import java.sql.*;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class PrescriptionService implements PrescriptionInterface {
    private final Connection cnx;

    public PrescriptionService() {
        cnx = MaConnexion.getInstance().getCnx();
    }

    @Override
    public void addPrescription(Prescription prescription) {
        try {
            String query = "INSERT INTO Prescription (duration, creation_date,user_id) VALUES (?, ?, ?)";
            PreparedStatement ps = cnx.prepareStatement(query, Statement.RETURN_GENERATED_KEYS);
            ps.setString(1, prescription.getDuration());
            ps.setTimestamp(2, new Timestamp(prescription.getCreationDate().getTime()));
            ps.setInt(3, prescription.getUser_id());
            ps.executeUpdate();

            ResultSet generatedKeys = ps.getGeneratedKeys();
            if (generatedKeys.next()) {
                long id = generatedKeys.getLong(1);
                prescription.setId(id);
                insertPrescriptionMeds(prescription); // Insert medications associated with the prescription
            }

            System.out.println("Prescription Added Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }


    private void insertPrescriptionMeds(Prescription prescription) {
        try {
            String query = "INSERT INTO Prescription_Meds (prescription_id, med_id) VALUES (?, ?)";
            PreparedStatement ps = cnx.prepareStatement(query);
            for (Meds med : prescription.getMedications()) {
                ps.setLong(1, prescription.getId()); // Set prescription_id
                ps.setLong(2, med.getId()); // Set medication_id
                ps.executeUpdate(); // Execute the insert statement
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public List<Prescription> getAllPrescriptions() {
        List<Prescription> prescriptions = new ArrayList<>();
        try (PreparedStatement ps = cnx.prepareStatement("SELECT * FROM Prescription");
             ResultSet rs = ps.executeQuery()) {
            while (rs.next()) {
                long id = rs.getLong("id");
                String duration = rs.getString("duration");
                Date creationDate = new Date(rs.getTimestamp("creation_date").getTime());
                List<Meds> medsList = getMedicationsForPrescription(id);
                Prescription prescription = new Prescription(duration, creationDate, medsList);
                prescription.setId(id);
                prescriptions.add(prescription);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return prescriptions;
    }

    public List<Prescription> getAllPrescriptionsByUserId() {
        String userEmail = (String) Session.getInstance().getUserSession().get("email");
        int loggedInUserId = getUserIDByEmail(userEmail);

        List<Prescription> prescriptions = new ArrayList<>();
        try (PreparedStatement ps = cnx.prepareStatement("SELECT * FROM Prescription where user_id = ?")) {
            ps.setInt(1, loggedInUserId); // Set the value for the placeholder '?' before executing the query
            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    long id = rs.getLong("id");
                    String duration = rs.getString("duration");
                    Date creationDate = new Date(rs.getTimestamp("creation_date").getTime());
                    List<Meds> medsList = getMedicationsForPrescription(id);
                    Prescription prescription = new Prescription(duration, creationDate, medsList);
                    prescription.setId(id);
                    prescriptions.add(prescription);
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return prescriptions;
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
    public List<Prescription> getAllPrescriptions1() {
        List<Prescription> prescriptions = new ArrayList<>();
        try (PreparedStatement ps = cnx.prepareStatement("SELECT Prescription.id, Prescription.duration, Prescription.creation_date, Meds.id as med_id, Meds.name, Meds.price FROM Prescription INNER JOIN Prescription_Meds ON Prescription.id = Prescription_Meds.prescription_id INNER JOIN Meds ON Prescription_Meds.med_id = Meds.id");
             ResultSet rs = ps.executeQuery()) {
            long currentPrescriptionId = -1;
            Prescription currentPrescription = null;
            while (rs.next()) {
                long id = rs.getLong("id");
                if (id != currentPrescriptionId) {
                    // If the prescription ID changes, create a new Prescription object
                    if (currentPrescription != null) {
                        prescriptions.add(currentPrescription);
                    }
                    currentPrescriptionId = id;
                    String duration = rs.getString("duration");
                    Date creationDate = new Date(rs.getTimestamp("creation_date").getTime());
                    currentPrescription = new Prescription(duration, creationDate, new ArrayList<>());
                    currentPrescription.setId(id);
                }
                // Add medication name and price to the current prescription

                String medicationName = rs.getString("name");
                float medicationPrice = rs.getFloat("price");
                currentPrescription.getMedications().add(new Meds( medicationName, medicationPrice));
            }
            // Add the last prescription after the loop
            if (currentPrescription != null) {
                prescriptions.add(currentPrescription);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return prescriptions;
    }




    private List<Meds> getMedicationsForPrescription(long prescriptionId) {
        List<Meds> medications = new ArrayList<>();
        try (PreparedStatement ps = cnx.prepareStatement("SELECT m.* FROM Meds m JOIN Prescription_Meds pm ON m.id = pm.med_id WHERE pm.prescription_id = ?")) {
            ps.setLong(1, prescriptionId);
            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    long id = rs.getLong("id");
                    String name = rs.getString("name");
                    String type = rs.getString("type");
                    int dose = rs.getInt("dose");
                    float price = rs.getFloat("price");
                    Meds med = new Meds(name, type, dose, price);
                    med.setId(id);
                    medications.add(med);
                }
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return medications;
    }

    @Override
    public Prescription getPrescriptionById(long id) {
        Prescription prescription = null;
        try {
            String query = "SELECT * FROM Prescription WHERE id=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setLong(1, id);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                String duration = rs.getString("duration");
                Date creationDate = new Date(rs.getTimestamp("creation_date").getTime());
                List<Meds> medsList = getMedicationsForPrescription(id);
                prescription = new Prescription(duration, creationDate, medsList);
                prescription.setId(id);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return prescription;
    }

    @Override
    public void updatePrescription(Prescription prescription) {
        try {
            String query = "UPDATE Prescription SET duration=?, creation_date=? WHERE id=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setString(1, prescription.getDuration());
            ps.setTimestamp(2, new Timestamp(prescription.getCreationDate().getTime()));
            ps.setLong(3, prescription.getId());
            ps.executeUpdate();

            // Delete existing prescription-medication associations
            String deleteQuery = "DELETE FROM Prescription_Meds WHERE prescription_id=?";
            PreparedStatement deletePs = cnx.prepareStatement(deleteQuery);
            deletePs.setLong(1, prescription.getId());
            deletePs.executeUpdate();

            // Insert updated medication associations
            insertPrescriptionMeds(prescription);

            System.out.println("Prescription Updated Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public void deletePrescription(long id) {
        try {
            // First, delete associated medication entries in Prescription_Meds table
            String deleteMedicationsQuery = "DELETE FROM Prescription_Meds WHERE prescription_id=?";
            PreparedStatement deleteMedsPs = cnx.prepareStatement(deleteMedicationsQuery);
            deleteMedsPs.setLong(1, id);
            deleteMedsPs.executeUpdate();

            // Then delete the prescription itself
            String deleteQuery = "DELETE FROM Prescription WHERE id=?";
            PreparedStatement ps = cnx.prepareStatement(deleteQuery);
            ps.setLong(1, id);
            int deletedRows = ps.executeUpdate();

            if (deletedRows > 0) {
                System.out.println("Prescription deleted successfully.");
            } else {
                System.out.println("No Prescription found with ID: " + id);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }
}
