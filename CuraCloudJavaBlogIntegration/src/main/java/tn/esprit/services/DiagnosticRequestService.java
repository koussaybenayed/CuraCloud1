package tn.esprit.services;

import tn.esprit.interfaces.IServices;
import tn.esprit.models.Bilan;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.util.MaConnexion;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class DiagnosticRequestService  implements IServices<DiagnosticRequest> {

    Connection cnx = MaConnexion.getInstance().getCnx();

    @Override
    public void add(DiagnosticRequest diagnosticRequest) throws SQLException {
        String req = " INSERT INTO `diagnostic_request`(`analyse_type`, `creation_date`, `status`, `doctor_notes`, `type`, `radio_type`, `id_patient_id`) VALUES ('"+diagnosticRequest.getAnalyseType()+"','"+diagnosticRequest.getCreationDate() +"','"+diagnosticRequest.getStatus()+"','"+diagnosticRequest.getDoctorNotes()+"','"+diagnosticRequest.getType()+"','"+diagnosticRequest.getRadioType()+"','"+diagnosticRequest.getId_patient_id()+"')";
        Statement st = cnx.createStatement();
        st.executeUpdate(req);
        System.out.println("Diagnostic Request added successfully");
        System.out.println(diagnosticRequest.getType());
    }

    @Override
    public void update(int id, String fieldToUpdate, Object newValue) throws SQLException {

    }

    public List<Bilan> getBilansForDiagnostic(int diagnosticId) throws SQLException {
      BilanService bilanService = new BilanService();
      return bilanService.getByDiagnosticRequestId(diagnosticId);
  }

    public void add1(DiagnosticRequest diagnosticRequest, List<Bilan> bilans) throws SQLException {
        Connection cnx = MaConnexion.getInstance().getCnx();
        String req = "INSERT INTO `diagnostic_request`(`analyse_type`, `creation_date`, `status`, `doctor_notes`, `type`, `radio_type`, `id_patient_id`) VALUES ('" + diagnosticRequest.getAnalyseType() + "','" + diagnosticRequest.getCreationDate() + "','" + diagnosticRequest.getStatus() + "','" + diagnosticRequest.getDoctorNotes() + "','" + diagnosticRequest.getType() + "','" + diagnosticRequest.getRadioType() + "',DEFAULT)";

        Statement st = cnx.createStatement();
        st.executeUpdate(req, Statement.RETURN_GENERATED_KEYS);
        ResultSet rs = st.getGeneratedKeys();
        if (rs.next()) {
            int diagnosticId = rs.getInt(1);
            for (Bilan bilan : bilans) {
                bilan.setDiagnosticRequestId(diagnosticId);
                BilanService bilanService = new BilanService();
                bilanService.add(bilan);
                diagnosticRequest.addBilan(bilan);
            }
        }
        System.out.println("Diagnostic Request added successfully");
    }




    @Override
    public boolean delete(int id) {
        return false;
    }

    @Override
    public List<DiagnosticRequest> getAll() throws SQLException {
        List<DiagnosticRequest> diagnosticRequests = new ArrayList<>();
        String req =  "SELECT * FROM diagnostic_request";

        Statement st  = cnx.createStatement();
        ResultSet res = st.executeQuery(req);
        while(res.next()) {
            DiagnosticRequest diagnosticRequest = new DiagnosticRequest();
            diagnosticRequest.setId(res.getInt(1));
            diagnosticRequest.setAnalyseType(res.getString(2));
            diagnosticRequest.setCreationDate(res.getDate(3));
            diagnosticRequest.setStatus(res.getString(4));
            diagnosticRequest.setDoctorNotes(res.getString(5));
            diagnosticRequest.setType(res.getString(6));
            diagnosticRequest.setRadioType(res.getString(7));
            diagnosticRequests.add(diagnosticRequest);
        }
        return diagnosticRequests;
    }

    public int getSessionId(String email){
        int userId = 0;

        String query = "SELECT id FROM user WHERE email = ?";
        try (PreparedStatement statement = cnx.prepareStatement(query)) {
            statement.setString(1, email);
            ResultSet resultSet = statement.executeQuery();
            if (resultSet.next()) {
                userId = resultSet.getInt("id");
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle or log the exception as needed
        }

        return  userId;
    }


    public List<DiagnosticRequest> getUserAll(int id) throws SQLException {
        List<DiagnosticRequest> diagnosticRequests = new ArrayList<>();
        String req = "SELECT * FROM `diagnostic_request` WHERE `id_patient_id` = ?";

        try (PreparedStatement statement = cnx.prepareStatement(req)) {
            statement.setInt(1, id);
            try (ResultSet res = statement.executeQuery()) {
                while (res.next()) {
                    DiagnosticRequest diagnosticRequest = new DiagnosticRequest();
                    diagnosticRequest.setId(res.getInt(1));
                    diagnosticRequest.setAnalyseType(res.getString(2));
                    diagnosticRequest.setCreationDate(res.getDate(3));
                    diagnosticRequest.setStatus(res.getString(4));
                    diagnosticRequest.setDoctorNotes(res.getString(5));
                    diagnosticRequest.setType(res.getString(6));
                    diagnosticRequest.setRadioType(res.getString(7));
                    diagnosticRequests.add(diagnosticRequest);
                }
            }
        } catch (SQLException e) {
            // Handle the exception (log it, rethrow it, or handle it based on your needs)
            throw e;
        }
        return diagnosticRequests;
    }



    public List<DiagnosticRequest> searchByStatus(List<DiagnosticRequest> requests, String status) {
        List<DiagnosticRequest> result = new ArrayList<>();

        for (DiagnosticRequest request : requests) {
            if (request.getStatus().equalsIgnoreCase(status)) {
                result.add(request);
            }
        }

        return result;
    }


    public boolean updateDiagnostic(int id, DiagnosticRequest updatedDiagnostic) {
        try {
            Connection cnx = MaConnexion.getInstance().getCnx();
            // Construire la requête SQL pour mettre à jour le diagnostic avec l'id donné
            String req = "UPDATE diagnostic_request SET " +
                    "analyse_type = ?, " +
                    "creation_date = ?, " +
                    "status = ?, " +
                    "doctor_notes = ?, " +
                    "type = ?, " +
                    "radio_type = ? " +
                    "WHERE id = ?";

            PreparedStatement ps = cnx.prepareStatement(req);
            // Remplacer les paramètres dans la requête avec les nouvelles valeurs
            ps.setString(1, updatedDiagnostic.getAnalyseType());
            ps.setDate(2, new Date(updatedDiagnostic.getCreationDate().getTime()));
            ps.setString(3, updatedDiagnostic.getStatus());
            ps.setString(4, updatedDiagnostic.getDoctorNotes());
            ps.setString(5, updatedDiagnostic.getType());
            ps.setString(6, updatedDiagnostic.getRadioType());
            ps.setInt(7, id);

            // Exécuter la mise à jour
            int rowsAffected = ps.executeUpdate();

            // Vérifier si la mise à jour a été effectuée avec succès
            if (rowsAffected > 0) {
                System.out.println("Diagnostic updated successfully.");
                return true; // Retourner true si la mise à jour a réussi
            } else {
                System.out.println("No rows were updated.");
                return false; // Retourner false si aucune ligne n'a été mise à jour
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Afficher les détails de l'exception s'il y en a une
            return false; // Retourner false en cas d'erreur lors de la mise à jour
        }
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


}
