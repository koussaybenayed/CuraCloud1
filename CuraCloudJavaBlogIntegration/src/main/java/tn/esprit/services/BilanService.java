package tn.esprit.services;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import tn.esprit.interfaces.IServices;
import tn.esprit.models.Bilan;
import tn.esprit.util.MaConnexion;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class BilanService implements IServices<Bilan> {
    Connection cnx = MaConnexion.getInstance().getCnx();
    @Override
    public void add(Bilan bilan) throws SQLException {
        try {
            // Enregistrement du nom de l'image dans la base de données
            bilan.setImage_name("/Uploads" + bilan.getImage_name()); // Modifier selon votre structure de fichiers
            saveImageNameToDatabase(bilan.getImage_name(), bilan);

            // Requête SQL pour ajouter un nouveau bilan
            String req = "INSERT INTO `bilan`(`realisation_date`, `result`, `lab_comment`, `submission_date`, `price`, `diagnostic_request_id`, `image_name`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            PreparedStatement st = cnx.prepareStatement(req);
            st.setDate(1, bilan.getRealisation_date());
            st.setString(2, bilan.getResult());
            st.setString(3, bilan.getLab_comment());
            st.setDate(4, bilan.getSubmission_date());
            st.setDouble(5, bilan.getPrice());
            st.setInt(6, bilan.getDiagnosticRequestId());
            st.setString(7, bilan.getImage_name());

            st.executeUpdate();

            System.out.println("Bilan added successfully");

            // Envoyer un email après l'ajout du bilan
            try {
                new GMailer().sendInfoMail("Your bilan was added","eya.dahen@esprit.tn");
            } catch (Exception e) {
                throw new RuntimeException(e);
            }
        } catch (SQLException e) {
            throw new SQLException("Failed to add bilan: " + e.getMessage());
        }
    }


    private void saveImageNameToDatabase(String imageName, Bilan bilan) throws SQLException {
        String updateQuery = "UPDATE `bilan` SET `image_name` = ? WHERE `id` = ?"; // Condition basée sur la clé primaire id
        PreparedStatement preparedStatement = cnx.prepareStatement(updateQuery);
        preparedStatement.setString(1, imageName);
        preparedStatement.setInt(2, bilan.getId()); // Utilisation de getId() sur l'instance de Bilan passée en argument
        preparedStatement.executeUpdate();
    }


    @Override
    public void update(int bilanId, String fieldToUpdate, Object newValue) {
        try {
            // Requête SQL dynamique pour mettre à jour un champ spécifique du bilan
            String sql = "UPDATE bilan SET " + fieldToUpdate + "=? WHERE id=?";
            PreparedStatement statement = cnx.prepareStatement(sql);
            statement.setObject(1, newValue);
            statement.setInt(2, bilanId);

            // Exécution de la requête de mise à jour
            int rowsUpdated = statement.executeUpdate();

            // Vérification du nombre de lignes mises à jour
            if (rowsUpdated > 0) {
                System.out.println("Le champ '" + fieldToUpdate + "' du bilan ID " + bilanId + " a été mis à jour avec succès.");
            } else {
                System.out.println("Aucun bilan n'a été mis à jour.");
            }
        } catch (SQLException e) {
            throw new RuntimeException("Erreur lors de la mise à jour du champ '" + fieldToUpdate + "' du bilan : " + e.getMessage(), e);
        }
    }

    @Override
    public boolean delete(int id) {
        try {
            String sql = "DELETE FROM bilan WHERE id = ?";
            PreparedStatement statement = cnx.prepareStatement(sql);
            statement.setInt(1, id);
            // Exécution de la requête de suppression
            int rowsDeleted = statement.executeUpdate();

            // Vérification du nombre de lignes supprimées
            if (rowsDeleted > 0) {
                System.out.println("Le bilan a été supprimé avec succès.");
                return true;
            } else {
                System.out.println("Impossible de supprimer le bilan.");
                return false;
            }
        } catch (SQLException e) {
            System.out.println("Erreur lors de la suppression du bilan : " + e.getMessage());
            return false;
        }
    }

    @Override
    public List<Bilan> getAll() throws SQLException {
        List<Bilan> bilans = new ArrayList<>();
        String req =  "SELECT * FROM bilan";

            Statement st  = cnx.createStatement();
            ResultSet res = st.executeQuery(req);
            while(res.next()) {
                Bilan bilan = new Bilan();
                bilan.setId(res.getInt(1));
                bilan.setRealisation_date((res.getDate(2)));
                bilan.setResult(res.getString(3));
                bilan.setLab_comment((res.getString(4)));
                bilan.setSubmission_date(res.getDate(5));
                bilan.setPrice(res.getDouble(6));
                bilan.setImage_name(res.getString(8));
                bilans.add(bilan);
            }
        return bilans;
    }

    public List<Bilan> getAllByUser(int id) throws SQLException {
        List<Bilan> bilans = new ArrayList<>();
        String req =  "SELECT * FROM bilan WHERE id_patient_id=?";

        Statement st  = cnx.createStatement();
        ResultSet res = st.executeQuery(req);
        PreparedStatement statement = cnx.prepareStatement(req);
        statement.setInt(1, id);
        while(res.next()) {
            Bilan bilan = new Bilan();
            bilan.setId(res.getInt(1));
            bilan.setRealisation_date((res.getDate(2)));
            bilan.setResult(res.getString(3));
            bilan.setLab_comment((res.getString(4)));
            bilan.setSubmission_date(res.getDate(5));
            bilan.setPrice(res.getDouble(6));
            bilan.setImage_name(res.getString(8));
            bilans.add(bilan);
        }
        return bilans;
    }

    public ObservableList<Bilan> getByDiagnosticRequestId(int diagnosticId) {
        ObservableList<Bilan> bilans = FXCollections.observableArrayList();

        PreparedStatement ps = null;
        try {
            System.out.println(diagnosticId);
            String req = "SELECT * FROM bilan WHERE diagnostic_request_id = ?";
            ps = cnx.prepareStatement(req);
            ps.setInt(1, diagnosticId);
            ResultSet res = ps.executeQuery();
            while (res.next()) {
                Bilan bilan = new Bilan();
                bilan.setId(res.getInt("id"));
                bilan.setRealisation_date(res.getDate("realisation_date"));
                bilan.setSubmission_date(res.getDate("submission_date"));
                bilan.setResult(res.getString("result"));
                bilan.setLab_comment(res.getString("lab_comment"));
                bilan.setImage_name(res.getString("image_name"));
                bilan.setPrice(res.getDouble("price"));
                bilans.add(bilan);
            }
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }

        return bilans;
    }

    public void UPDATE(Bilan bilan) throws SQLException {

        String req = "UPDATE `bilan` SET `id`=?,`realisation_date`=?,`result`=?,`lab_comment`=?,`submission_date`=?,`price`=?,`diagnostic_request_id`=?,`image_name`=? WHERE `id`=?";

            PreparedStatement st = cnx.prepareStatement(req);
               st.setInt(1,bilan.getId());
               st.setDate(2,bilan.getRealisation_date());
               st.setString(3,bilan.getResult());
               st.setString(4, bilan.getLab_comment());
               st.setDate(5, bilan.getSubmission_date());
               st.setDouble(6,bilan.getPrice());
               st.setInt(7,bilan.getDiagnosticRequestId());
               st.setString(8, bilan.getImage_name());
               st.executeUpdate(req);
               System.out.println("Bilan Updated successfully");
    }

    public boolean updateBilan(int id, Bilan updatedBilan) {
        try {
            Connection cnx = MaConnexion.getInstance().getCnx();
            // Construire la requête SQL pour mettre à jour le diagnostic avec l'id donné
            String req = "UPDATE bilan SET " +
                    "realisation_date = ?, " +
                    "result = ?, " +
                    "lab_comment = ?, " +
                    "submission_date = ?, " +
                    "price = ?, " +
                    "diagnostic_request_id = ? " +
                    "image_name = ?"+
                    "WHERE id = ?";

            PreparedStatement ps = cnx.prepareStatement(req);
            // Remplacer les paramètres dans la requête avec les nouvelles valeurs
            ps.setDate(1, new Date(updatedBilan.getRealisation_date().getTime()));
            ps.setString(2, updatedBilan.getResult());
            ps.setString(3, updatedBilan.getLab_comment());
            ps.setDate(4,new Date(updatedBilan.getSubmission_date().getTime()) );
            ps.setDouble(5, updatedBilan.getPrice());
            ps.setInt(6, updatedBilan.getDiagnosticRequestId());
            ps.setString(7, updatedBilan.getImage_name());
            ps.setInt(8,id);

            // Exécuter la mise à jour
            int rowsAffected = ps.executeUpdate();

            // Vérifier si la mise à jour a été effectuée avec succès
            if (rowsAffected > 0) {
                System.out.println("Bilan updated successfully.");
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
