package tn.esprit.services;

import tn.esprit.interfaces.MedsInterface;
import tn.esprit.models.Meds;
import tn.esprit.util.MaConnexion;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class MedsService implements MedsInterface {
    private final Connection cnx;

    public MedsService() {
        cnx = MaConnexion.getInstance().getCnx();
    }

    @Override
    public void addMeds(Meds meds) {
        try {
            String query = "INSERT INTO `Meds`(`name`, `type`, `dose`, `price`) VALUES (?, ?, ?, ?)";
            PreparedStatement ps = cnx.prepareStatement(query, PreparedStatement.RETURN_GENERATED_KEYS);
            ps.setString(1, meds.getName());
            ps.setString(2, meds.getType());
            ps.setInt(3, meds.getDose());
            ps.setFloat(4, meds.getPrice());
            ps.executeUpdate();
            ResultSet rs = ps.getGeneratedKeys();
            if (rs.next()) {
                meds.setId(rs.getLong(1));
            }
            System.out.println("Meds Added Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public Meds getMedsById(Long id) {
        Meds meds = null;
        try {
            String query = "SELECT * FROM Meds WHERE id=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setLong(1, id);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                meds = new Meds(
                        rs.getLong("id"),
                        rs.getString("name"),
                        rs.getString("type"),
                        rs.getInt("dose"),
                        rs.getFloat("price")
                );
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return meds;
    }

    @Override
    public List<Meds> getAllMeds() {
        List<Meds> medsList = new ArrayList<>();
        try {
            String query = "SELECT id, name, type, dose, price FROM Meds"; // Include 'type' column in the query
            PreparedStatement ps = cnx.prepareStatement(query);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                Meds meds = new Meds(
                        rs.getLong("id"),
                        rs.getString("name"),
                        rs.getString("type"), // Retrieve the 'type' column
                        rs.getInt("dose"),
                        rs.getFloat("price")
                );
                medsList.add(meds);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return medsList;
    }

    public List<Meds> getMedsByType(String type) {
        List<Meds> medsList = new ArrayList<>();
        try {
            String query = "SELECT * FROM Meds WHERE type=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setString(1, type);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                Meds meds = new Meds(
                        rs.getLong("id"),
                        rs.getString("name"),
                        rs.getString("type"),
                        rs.getInt("dose"),
                        rs.getFloat("price")
                );
                medsList.add(meds);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return medsList;
    }
    @Override
    public void updateMeds(Meds meds) {
        try {
            String query = "UPDATE `Meds` SET `name`=?, `type`=?, `dose`=?, `price`=? WHERE `id`=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setString(1, meds.getName());
            ps.setString(2, meds.getType());
            ps.setInt(3, meds.getDose());
            ps.setFloat(4, meds.getPrice());
            ps.setLong(5, meds.getId());
            ps.executeUpdate();
            System.out.println("Meds Updated Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public void deleteMeds(Long id) {
        try {
            String query = "DELETE FROM `Meds` WHERE `id`=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setLong(1, id);
            ps.executeUpdate();
            System.out.println("Meds Deleted Successfully!");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }
    public Meds getMedsByName(String name) {
        Meds meds = null;
        try {
            String query = "SELECT * FROM Meds WHERE name=?";
            PreparedStatement ps = cnx.prepareStatement(query);
            ps.setString(1, name);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                meds = new Meds(
                        rs.getLong("id"),
                        rs.getString("name"),
                        rs.getString("type"),
                        rs.getInt("dose"),
                        rs.getFloat("price")
                );
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return meds;
    }
}
