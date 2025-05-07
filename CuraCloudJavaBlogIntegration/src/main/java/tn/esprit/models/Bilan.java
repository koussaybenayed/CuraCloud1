package tn.esprit.models;
import java.sql.Date;

public class Bilan {
    //Att
    private int id;
    private Date realisation_date,submission_date;
    private String result,lab_comment,image_name;
    private double price;
    private int diagnosticRequestId; // Nouvel attribut pour l'ID du diagnostic associé
    private String imagePath;


    //constructor
    public Bilan() {
    }

    public Bilan(int id, Date realisation_date, Date submission_date, String result, String lab_comment, String image_name, double price, int diagnosticRequestId) {
        this.id = id;
        this.realisation_date = realisation_date;
        this.submission_date = submission_date;
        this.result = result;
        this.lab_comment = lab_comment;
        this.image_name = image_name;
        this.price = price;
        this.diagnosticRequestId = diagnosticRequestId; // Initialisation de l'ID du diagnostic
    }
    public Bilan(Date realisation_date, Date submission_date, String result, String lab_comment, String image_name, double price,int diagnosticRequestId) {
        this.realisation_date = realisation_date;
        this.submission_date = submission_date;
        this.result = result;
        this.lab_comment = lab_comment;
        this.image_name = image_name;
        this.price = price;
        this.diagnosticRequestId =diagnosticRequestId;
    }

    public Bilan(int id, Date realisation_date, Date submission_date, String result, String lab_comment, String image_name, double price) {
        this.id = id;
        this.realisation_date = realisation_date;
        this.submission_date = submission_date;
        this.result = result;
        this.lab_comment = lab_comment;
        this.image_name = image_name;
        this.price = price;
    }


    //Getters + Setters

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Date getRealisation_date() {
        return realisation_date;
    }

    public void setRealisation_date(Date realisation_date) {
        this.realisation_date = realisation_date;
    }

    public Date getSubmission_date() {
        return submission_date;
    }

    public void setSubmission_date(Date submission_date) {
        this.submission_date = submission_date;
    }

    public String getResult() {
        return result;
    }

    public void setResult(String result) {
        this.result = result;
    }

    public String getLab_comment() {
        return lab_comment;
    }

    public void setLab_comment(String lab_comment) {
        this.lab_comment = lab_comment;
    }

    public String getImage_name() {
        return image_name;
    }

    public void setImage_name(String image_name) {
        this.image_name = image_name;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }

    public int getDiagnosticRequestId() {
        return diagnosticRequestId;
    }

    public void setDiagnosticRequestId(int diagnosticRequestId) {
        this.diagnosticRequestId = diagnosticRequestId;
    }


    //Display
    @Override
    public String toString() {
        return "Bilan{" +
                "id=" + id +
                ", realisation_date=" + realisation_date +
                ", submission_date=" + submission_date +
                ", result='" + result + '\'' +
                ", lab_comment='" + lab_comment + '\'' +
                ", image_name='" + image_name + '\'' +
                ", price=" + price +
                '}';
    }

    public void setImagePath(String imagePath) {
        this.imagePath = imagePath;
    }

    public String getImagePath() {
        return imagePath;
    }
}
