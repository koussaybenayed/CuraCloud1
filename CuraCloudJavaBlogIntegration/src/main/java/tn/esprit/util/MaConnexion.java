package tn.esprit.util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class MaConnexion {

    //DB
    final String URL = "jdbc:mysql://localhost:3306/CuraCloud";
    final String USER="root" ;
    final String PWD ="" ;

    //Att
    private Connection cnx;
    static MaConnexion instance;
    //Constructor
    private MaConnexion(){
        try {
            cnx = DriverManager.getConnection(URL,USER,PWD);
            System.out.println("Connexion etablie avec succées");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }

    //Getters
    public static MaConnexion getInstance() {
        if(instance== null)
            instance=new MaConnexion();
        return instance;
    }

    public Connection getCnx() {
        return cnx;
    }
}
