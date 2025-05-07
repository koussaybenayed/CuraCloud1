package tn.esprit.interfaces;

import javafx.collections.ObservableList;
import tn.esprit.models.User;

import java.util.List;
public interface IUser {
    //add client
    void addClient(User u);
    //add doctor
    void addDoctor(User u);
    //add pharmacy
    void addPharmacy(User u);
    //add lab
    void addLab(User u);
    //add radiology
    void addRadiology(User u);
    //update client
    void updateClient(User u);
    //update doctor
    void updateDoctor(User u);
    //update pharmacy
    void updatePharmacy(User u);
    //update lab
    void updateLab(User u);
    //update radiology
    void updateRadiology(User u);
    //delete
    void delete(String u);

    //list : select clients
    public List<User> fetchClients();
    //list : select doctors
    ObservableList<User> fetchDoctors();

    ObservableList<User> fetchEstablishments();
}
