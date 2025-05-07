package tn.esprit.interfaces;

import java.sql.SQLException;
import java.util.List;

public interface IServices <T>{
    void add(T t) throws SQLException;
    void  update(int id, String fieldToUpdate, Object newValue) throws SQLException;
    boolean delete(int id);
    List<T> getAll() throws SQLException;


}
