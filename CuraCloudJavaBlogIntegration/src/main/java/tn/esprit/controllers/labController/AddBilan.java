package tn.esprit.controllers.labController;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.util.Callback;
import tn.esprit.models.Bilan;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.services.BilanService;
import tn.esprit.services.DiagnosticRequestService;

import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.List;


public class AddBilan {

    //Att
    @FXML
    private Button imageId;
    @FXML
    private Button addbilan;
    @FXML
    private Pane imagePane;
    @FXML
    private TextArea labCommentId;
    @FXML
    private TextField priceId;
    @FXML
    private DatePicker realisationDate;
    @FXML
    private TextArea resultId;
    @FXML
    private DatePicker submissionDate;
    @FXML
    private Button ButtonBack;
    @FXML
    private ComboBox<DiagnosticRequest> ComboboxDiagnosticId;
    private final BilanService bs = new BilanService();
    private final DiagnosticRequestService drs = new DiagnosticRequestService(); // Service pour les diagnostics
    private final String imageDirectory = "src/main/resources/Uploads/";

    //Function add Bilan
    @FXML
    void addB(ActionEvent event) {
        if (validateFields()) {
            try {
                // Vérifiez si realisationDate et submissionDate ne sont pas nuls
                if (realisationDate.getValue() != null && submissionDate.getValue() != null) {
                    // Obtenez les valeurs sélectionnées dans les DatePicker
                    LocalDate selectedRealisationDate = realisationDate.getValue();
                    LocalDate selectedSubmissionDate = submissionDate.getValue();

                    // Convertissez les LocalDates en java.sql.Date
                    java.sql.Date realisationDateValue = java.sql.Date.valueOf(selectedRealisationDate);
                    java.sql.Date submissionDateValue = java.sql.Date.valueOf(selectedSubmissionDate);

                    DiagnosticRequest selectedDiagnostic = ComboboxDiagnosticId.getSelectionModel().getSelectedItem();

                    //String imageName = selectImage(); // Select image and get its name

                    // Ajoutez le nouvel objet Bilan à votre service
                    bs.add(new Bilan(realisationDateValue, submissionDateValue, resultId.getText(), labCommentId.getText(), imageId.getText(), Double.parseDouble(priceId.getText()), selectedDiagnostic.getId()));

                    showSuccess("Bilan added successfully ");


                } else {
                    showError("Realisation Date and Submission Date are required.");
                }

            } catch (SQLException e) {
                showError(e.getMessage());
            }
        } else {

        }

    }

    //Control saisie
    private boolean validateFields() {

        // Vérification de la relation entre les dates de réalisation et de soumission
        LocalDate realisation = realisationDate.getValue();
        LocalDate submission = submissionDate.getValue();
        if (realisation == null || submission == null) {
            showError("Please select both Realisation Date and Submission Date.");
            return false;
        }
        if (submission.isBefore(realisation)) {
            showError("Submission Date must be on or after Realisation Date.");
            return false;
        }

        // Vérification que les champs obligatoires ne sont pas vides
        if (resultId.getText().isEmpty()) {
            showError("Result is required.");
            return false;
        }
        if (labCommentId.getText().isEmpty()) {
            showError("Lab Comments is required.");
            return false;
        }
        if (imageId.getText().isEmpty()) {
            showError("Image is required.");
            return false;
        }
        if (priceId.getText().isEmpty()) {
            showError("Price is required.");
            return false;
        }

        return true; // Tous les champs sont valides
    }

    private File selectedFile;

    @FXML
    void chooseImage(ActionEvent event) {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Choose an image");
        fileChooser.getExtensionFilters().addAll(
                new FileChooser.ExtensionFilter("img", "*.png", "*.jpg", "*.jpeg", "*.gif")
        );
        File selectedFile = fileChooser.showOpenDialog(null);
        if (selectedFile != null) {
            Image image = new Image(selectedFile.toURI().toString());
            ImageView imageView = new ImageView(image);
            imageView.setFitWidth(120);
            imageView.setFitHeight(70);
            imagePane.getChildren().add(imageView);
            String imageName = selectedFile.getName();
            String destinationPath = "src/main/resources/Uploads/" + imageName;
            saveImage(selectedFile, new File(destinationPath));
           // addBilanWithImage(imageName); // Appel de la nouvelle fonction
        }
    }


    private void saveImage(File source, File destination) {
        try {
            Files.copy(source.toPath(), destination.toPath(), StandardCopyOption.REPLACE_EXISTING);
            System.out.println("Image saved successfully: " + destination.getAbsolutePath());
        } catch (IOException e) {
            showError("Failed to save image: " + e.getMessage());
        }
    }


    private void addBilanWithImage(String imagePath) {
        try {
            // Create a new Bilan instance with image name (without "/uploads" part)
            Bilan newBilan = new Bilan();
            String imageName = imagePath.replace("/Uploads", ""); // Remove "/uploads" from the image path
            newBilan.setImage_name(imageName); // Set the modified image name for the new Bilan
            LocalDate selectedRealisationDate = realisationDate.getValue();
            LocalDate selectedSubmissionDate = submissionDate.getValue();

            // Set other properties of the Bilan
            newBilan.setRealisation_date(java.sql.Date.valueOf(selectedRealisationDate)); // Assuming realisationDate is a DatePicker
            newBilan.setSubmission_date(java.sql.Date.valueOf(selectedSubmissionDate)); // Assuming submissionDate is a DatePicker
            newBilan.setResult(resultId.getText());
            newBilan.setLab_comment(labCommentId.getText());
            newBilan.setPrice(Double.parseDouble(priceId.getText()));

            // Get the selected DiagnosticRequest from ComboBox
            DiagnosticRequest selectedDiagnostic = ComboboxDiagnosticId.getSelectionModel().getSelectedItem();
            if (selectedDiagnostic != null) {
                newBilan.setDiagnosticRequestId(selectedDiagnostic.getId());
            } else {
                // Handle the case where no diagnostic is selected
                showError("No diagnostic selected for the bilan.");
                return; // Exit the method
            }

            // Add the new Bilan to the database using BilanService
            BilanService bilanService = new BilanService();
            bilanService.add(newBilan);

            // Show success message
            showSuccess("Bilan added successfully with image.");

            // Close the window or perform other necessary actions
            Stage stage = (Stage) addbilan.getScene().getWindow();
            stage.close();

        } catch (SQLException e) {
            // Handle SQL exception
            showError("Failed to add bilan with image: " + e.getMessage());
        } catch (NumberFormatException e) {
            // Handle number format exception for parsing price
            showError("Invalid price format.");
        }
    }



    public void initialize() {
        // Appel à une méthode pour initialiser le ComboBox avec les diagnostics existants
        initializeDiagnosticComboBox();
    }

    private void initializeDiagnosticComboBox() {
        try {
            // Récupérer la liste des diagnostics depuis la base de données
            List<DiagnosticRequest> diagnosticList = drs.getAll(); // Méthode à adapter selon votre service

            // Convertir la liste en ObservableList pour l'ComboBox
            ObservableList<DiagnosticRequest> observableDiagnosticList = FXCollections.observableArrayList(diagnosticList);

            // Ajouter les diagnostics à la ComboBox
            ComboboxDiagnosticId.setItems(observableDiagnosticList);

            // Définir un gestionnaire d'événements pour la sélection d'un diagnostic dans la ComboBox
            ComboboxDiagnosticId.setOnAction(event -> {
                DiagnosticRequest selectedDiagnostic = ComboboxDiagnosticId.getSelectionModel().getSelectedItem();
                if (selectedDiagnostic != null) {
                    // Vous pouvez faire quelque chose avec le diagnostic sélectionné, par exemple l'afficher
                    System.out.println("Diagnostic sélectionné : " + selectedDiagnostic.getId()); // Adapté à votre classe DiagnosticRequest
                }
            });

            // Définir comment les éléments de la ComboBox seront affichés
            ComboboxDiagnosticId.setCellFactory(new Callback<ListView<DiagnosticRequest>, ListCell<DiagnosticRequest>>() {
                @Override
                public ListCell<DiagnosticRequest> call(ListView<DiagnosticRequest> param) {
                    return new ListCell<DiagnosticRequest>() {
                        @Override
                        protected void updateItem(DiagnosticRequest item, boolean empty) {
                            super.updateItem(item, empty);
                            if (item == null || empty) {
                                setText(null);
                            } else {
                                setText(String.valueOf(item.getId()));
                            }
                        }
                    };
                }
            });
        } catch (SQLException e) {
            // Gérer les erreurs, par exemple en affichant un message d'erreur
            showError("Erreur lors de la récupération des diagnostics : " + e.getMessage());
        }
    }

    //Error Message
    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setContentText(message);
        alert.showAndWait();
    }
    //Success Message
    private void showSuccess(String message){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setContentText(message);
        alert.showAndWait();
    }

/*boolean imageSelected = false ;
    @FXML
    private String selectImage() {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Select Image");
        fileChooser.getExtensionFilters().addAll(
                new FileChooser.ExtensionFilter("Image Files", ".png", ".jpg", "*.gif")
        );
        Stage stage = (Stage) imagePane.getScene().getWindow();
        File selectedFile = fileChooser.showOpenDialog(stage);
        if (selectedFile != null) {
            try {
                File destinationDir = new File(imageDirectory);
                if (!destinationDir.exists()) {
                    destinationDir.mkdirs(); // Create the directory if it doesn't exist
                }
                File destinationFile = new File(destinationDir, selectedFile.getName());
                Files.copy(selectedFile.toPath(), destinationFile.toPath(), StandardCopyOption.REPLACE_EXISTING);
                imageSelected = true; // Set the flag to true since an image is selected
                return selectedFile.getName(); // Return the image file name
            } catch (IOException e) {
                System.err.println("Error saving image file: " + e.getMessage());
                e.printStackTrace(); // Print the full stack trace for debugging
            }
        }
        return null; // Return null if no image selected or dialog canceled
    }

 */

}

