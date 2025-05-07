package tn.esprit.models;

public class Meds {

    private Long id;
    private String name;
    private String type;
    private int dose; // Changed to int
    private float price; // Changed to float

    // Constructor for creating a new Meds object
    public Meds(String name, String type, int dose, float price) {
        this.name = name;
        this.type = type;
        this.dose = dose;
        this.price = price;
    }

    // Constructor for creating a Meds object with an ID
    public Meds(Long id, String name, String type, int dose, float price) {
        this.id = id;
        this.name = name;
        this.type = type;
        this.dose = dose;
        this.price = price;
    }
public Meds (String name, float price){
        this.name = name;
        this.price = price;
}
    // Getters and setters...

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getDose() {
        return dose;
    }

    public void setDose(int dose) {
        this.dose = dose;
    }

    public float getPrice() {
        return price;
    }

    public void setPrice(float price) {
        this.price = price;
    }

    @Override
    public String toString() {
        return "Medication:" + "  " + name + "  ";
    }
}