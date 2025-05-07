package tn.esprit.models;

import java.util.ArrayList;
import java.util.List;

public class User {
private String email,first_name,last_name,address,password,birth_date,speciality,certification,phone_number,gender,isbanned,public_or_private,pharmacytype,role;
private int id;
    public User() {
    }

    //w\th id
    public User(String email, String first_name, String last_name, String address, String password, String birth_date, String speciality, String certification, String phone_number, String gender, String public_or_private, String pharmacytype) {
        this.email = email;
        this.first_name = first_name;
        this.last_name = last_name;
        this.address = address;
        this.password = password;
        this.birth_date = birth_date;
        this.speciality = speciality;
        this.certification = certification;
        this.phone_number = phone_number;
        this.gender = gender;
        this.public_or_private = public_or_private;
        this.pharmacytype = pharmacytype;
    }

    //with id
    public User(String email, String first_name, String last_name, String address, String password, String birth_date, String speciality, String certification, int id, String phone_number, String gender, String public_or_private, String pharmacytype) {
        this.email = email;
        this.first_name = first_name;
        this.last_name = last_name;
        this.address = address;
        this.password = password;
        this.birth_date = birth_date;
        this.speciality = speciality;
        this.certification = certification;
        this.id = id;
        this.phone_number = phone_number;
        this.gender = gender;
        this.public_or_private = public_or_private;
        this.pharmacytype = pharmacytype;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getFirst_name() {
        return first_name;
    }

    public void setFirst_name(String first_name) {
        this.first_name = first_name;
    }

    public String getLast_name() {
        return last_name;
    }

    public void setLast_name(String last_name) {
        this.last_name = last_name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getBirth_date() {
        return birth_date;
    }

    public void setBirth_date(String birth_date) {
        this.birth_date = birth_date;
    }

    public String getSpeciality() {
        return speciality;
    }

    public void setSpeciality(String speciality) {
        this.speciality = speciality;
    }

    public String getCertification() {
        return certification;
    }

    public void setCertification(String certification) {
        this.certification = certification;
    }

    public String getPhone_number() {
        return phone_number;
    }

    public void setPhone_number(String phone_number) {
        this.phone_number = phone_number;
    }

    public String isGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String isIsbanned() {
        return isbanned;
    }

    public void setIsbanned(String isbanned) {
        this.isbanned = isbanned;
    }

    public String isPublic_or_private() {
        return public_or_private;
    }

    public void setPublic_or_private(String public_or_private) {
        this.public_or_private = public_or_private;
    }

    public String isPharmacytype() {
        return pharmacytype;
    }

    public void setPharmacytype(String pharmacytype) {
        this.pharmacytype = pharmacytype;
    }


    @Override
    public String toString() {
        return first_name  + " " + last_name ;
    }

    //jointure Blog
    private List<Blog> blogs = new ArrayList();
    public List<Blog> getBlogs() {
        return blogs;
    }

    public void setBlogs(List<Blog> blogs) {
        this.blogs = blogs;
    }

    //jointure comment

    private List<Comment> comments = new ArrayList();

    public List<Comment> getComments() {
        return comments;
    }

    public void setComments(List<Comment> comments) {
        this.comments = comments;
    }


    //jointure prescription

    private List<Prescription> prescriptions = new ArrayList();

    public List<Prescription> getPrescriptions() {
        return prescriptions;
    }

    public void setPrescriptionss(List<Prescription> prescriptions) {
        this.prescriptions = prescriptions;
    }
}
