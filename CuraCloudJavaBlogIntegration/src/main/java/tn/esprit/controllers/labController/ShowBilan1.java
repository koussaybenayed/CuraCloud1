package tn.esprit.controllers.labController;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Callback;
import tn.esprit.models.Bilan;
import tn.esprit.services.BilanService;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.File;
import java.io.IOException;
import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.List;

import static tn.esprit.util.PdfGenerator.generatePDF;


public class ShowBilan1 {
    @FXML
    private TableColumn<Bilan, Integer> BilanId;
    @FXML
    private TableView<Bilan> BilansId;
    @FXML
    private Button addBilanBtn;
    @FXML
    private TableColumn<Bilan, String> imageId;
    @FXML
    private TableColumn<Bilan, String> labCommentsId;
    @FXML
    private TableColumn<Bilan, Double> priceId;
    @FXML
    private TableColumn<Bilan, String> realisationDateId;
    @FXML
    private TableColumn<Bilan, String> resultId;
    @FXML
    private TableColumn<Bilan, String> submissionDateId;
    private final BilanService bs = new BilanService();
    @FXML
    private ImageView imageView;
    @FXML
    private TableColumn<Bilan, Void> ActionsId;
    @FXML
    private TextField SearchTextField;
    private final UserService userService = new UserService();

    public void Session() {
        String session = Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = bs.getUserIDByEmail(session);
        System.out.println("Role: " + role);
        if (role.equals("[\"ROLE_DOCTOR\"]")) {
            addBilanBtn.setDisable(true); // Disable the ComboBox
            addBilanBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        } else if (role.equals("[\"ROLE_PATIENT\"]")) {
            addBilanBtn.setDisable(true); // Disable the ComboBox
            addBilanBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        }
        else if (role.equals("[\"ROLE_RADIOLOGY\"]")) {
            addBilanBtn.setDisable(false); // Disable the ComboBox
            addBilanBtn.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
        }
    }
    @FXML
    void navigate(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/AddBilan.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            // Créer un nouveau stage pour la nouvelle fenêtre
            Stage newStage = new Stage();
            newStage.setScene(scene);
            // Définir la modalité du nouveau stage (peut être modifié selon vos besoins)
            newStage.initModality(Modality.APPLICATION_MODAL);
            // Définir le titre de la nouvelle fenêtre
            newStage.setTitle("Add new Bilan");
            // Afficher la nouvelle fenêtre
            newStage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void displayImage(String imageName) {
        String imagePath = "resources/Uploads/" + imageName;
        File imageFile = new File(imagePath);
        if (imageFile.exists()) {
            Image image = new Image(imageFile.toURI().toString());
            ImageView imageView = new ImageView(image);

            StackPane pane = new StackPane();
            pane.getChildren().add(imageView);

            Stage stage = new Stage();
            stage.setTitle("Image Viewer");
            stage.setScene(new Scene(pane, 600, 400));
            stage.show();
        } else {
            showError("Image not found: " + imageName);
        }
    }


    @FXML
    void initialize() {
        //Charger le LOGO
        Session();
        String imagePath = "/img/LOGO1.png";
        Image image = new Image(getClass().getResourceAsStream(imagePath));
        imageView.setImage(image);
        //Affichage
        try {
            List<Bilan> bilans = bs.getAll();
            ObservableList<Bilan> observableList = FXCollections.observableList(bilans);
            BilansId.setItems(observableList);
            BilanId.setCellValueFactory(new PropertyValueFactory<>("id"));
            imageId.setCellValueFactory(new PropertyValueFactory<>("image_name"));
            labCommentsId.setCellValueFactory(new PropertyValueFactory<>("lab_comment"));
            priceId.setCellValueFactory(new PropertyValueFactory<>("price"));
            realisationDateId.setCellValueFactory(new PropertyValueFactory<>("realisation_date"));
            resultId.setCellValueFactory(new PropertyValueFactory<>("result"));
            submissionDateId.setCellValueFactory(new PropertyValueFactory<>("submission_date"));

            // Créez une cellule personnalisée pour la colonne PDF
            // Créez une cellule personnalisée pour la colonne Actions
            Callback<TableColumn<Bilan, Void>, TableCell<Bilan, Void>> cellFactory = new Callback<TableColumn<Bilan, Void>, TableCell<Bilan, Void>>() {
                @Override
                public TableCell<Bilan, Void> call(final TableColumn<Bilan, Void> param) {
                    final TableCell<Bilan, Void> cell = new TableCell<>() {
                        private final Button pdfBtn = new Button("PDF");
                        private final Button updateBtn = new Button("Update");

                        {
                            // Gestionnaire d'événements pour le bouton PDF
                            pdfBtn.setOnAction(event -> {
                                try {
                                    // Code pour générer et télécharger le PDF à partir des données de la ligne sélectionnée
                                    Bilan bilan = getTableView().getItems().get(getIndex());
                                    generatePDF(bilan); // Méthode à implémenter pour générer le PDF
                                    showSuccess("PDF generated and downloaded successfully.");
                                } catch (Exception e) {
                                    showError("Error generating or downloading PDF: " + e.getMessage());
                                }
                            });

                            // Gestionnaire d'événements pour le bouton Update
                            updateBtn.setOnAction(event -> {
                                // Code pour gérer l'action de mise à jour (à implémenter selon vos besoins)
                                Bilan bilan = getTableView().getItems().get(getIndex());
                                handleUpdateAction(bilan); // Méthode à implémenter pour gérer la mise à jour
                            });

                            // Style des boutons
                            pdfBtn.setStyle("-fx-background-color: linear-gradient(to bottom right, #00b362, #5381ac); " + /* Couleur de fond */
                                    "-fx-text-fill: white; " + /* Couleur du texte */
                                    "-fx-font-weight: bold; " + /* Police en gras */
                                    "-fx-padding: 5px 10px;");

                            updateBtn.setStyle("-fx-background-color: linear-gradient(to bottom right, #00b362, #5381ac); " + /* Couleur de fond */
                                    "-fx-text-fill: white; " + /* Couleur du texte */
                                    "-fx-font-weight: bold; " + /* Police en gras */
                                    "-fx-padding: 5px 10px;");
                        }

                        @Override
                        protected void updateItem(Void item, boolean empty) {
                            super.updateItem(item, empty);
                            if (empty) {
                                setGraphic(null);
                            } else {
                                HBox hbox = new HBox(pdfBtn, updateBtn);
                                hbox.setSpacing(5);
                                setGraphic(hbox);

                                // Gestionnaire d'événements pour le bouton Update
                                updateBtn.setOnAction(event -> {
                                    Bilan bilan = getTableView().getItems().get(getIndex());
                                    handleUpdateAction(bilan); // Appel de la méthode handleUpdateAction
                                });
                            }
                        }
                    };
                    return cell;
                }
            };
            ActionsId.setCellFactory(cellFactory);

            // Définir la cellule personnalisée pour la colonne "imageId"
// Définir la cellule personnalisée pour la colonne "imageId"
            imageId.setCellFactory(col -> new TableCell<Bilan, String>() {
                private final Hyperlink hyperlink = new Hyperlink();

                {
                    // Add an event handler to the hyperlink to open the image in a separate window
                    hyperlink.setOnAction(event -> {
                        Bilan bilan = getTableView().getItems().get(getIndex());
                        String imagePath = bilan.getImage_name(); // Get the image path from the Bilan object
                        System.out.println("Image Path: " + imagePath); // Debug message
                        if (imagePath != null && !imagePath.isEmpty()) {
                            System.out.println("Opening Image: " + imagePath); // Debug message
                            displayImage(imagePath); // Call your method to display the image
                        } else {
                            showError("No image found for this Bilan."); // Handle case where no image path is available
                        }
                    });
                    hyperlink.setStyle(
                            "-fx-text-fill: black; " + /* Text color */
                                    "-fx-font-weight: bold; " + /* Bold font */
                                    "-fx-padding: 5px 10px;"); /* Padding for the hyperlink */
                }

                @Override
                protected void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty);
                    if (empty || item == null) {
                        setGraphic(null); // Clear the cell if it's empty or the item is null
                    } else {
                        hyperlink.setText("Open Image");
                        setGraphic(hyperlink); // Set the hyperlink as the graphic for the cell
                    }
                }
            });




            //recherche
            FilteredList<Bilan> filterdData = new FilteredList<>(observableList, b -> true);
            SearchTextField.textProperty().addListener((observable ,oldValue, newValue)->{
                filterdData.setPredicate(bilanSearch ->{
                    if(newValue.isEmpty() || newValue.isBlank() || newValue == null){
                        return true ;
                    }
                    String searchKeyword = newValue.toLowerCase();

                    SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd"); // Définir le format de date
                    String formattedDate = dateFormat.format(bilanSearch.getSubmission_date());

                    SimpleDateFormat dateFormat1 = new SimpleDateFormat("yyyy-MM-dd"); // Définir le format de date
                    String formattedDate1 = dateFormat.format(bilanSearch.getRealisation_date());

                    if(String.valueOf(bilanSearch.getPrice()).indexOf(searchKeyword) > -1){
                        return true; // means we found a match in product name
                    }else if(formattedDate.toLowerCase().indexOf(searchKeyword) > -1){
                        return true;
                    }else if(formattedDate1.toLowerCase().indexOf(searchKeyword) > -1){
                        return true;
                    }else
                        return false; // no match found

                });
            });

            SortedList<Bilan> sortedData = new SortedList<>(filterdData);
            //Bind sorted result wih table view
            sortedData.comparatorProperty().bind(BilansId.comparatorProperty());
            //apply filtred and sorted data to the table view
            BilansId.setItems(sortedData);
            /////fin recherche



        } catch (SQLException e) {
            showError(e.getMessage());
        }


    }

   /* private void handleUpdateAction(Bilan bilan) {
        BilanService bs = new BilanService();
        Bilan client = new Bilan(1,"2021-03-10",);
        bs.handleUpdateAction(client);
    }*/

    // Error Message
    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Success Message
    private void showSuccess(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Success");
        alert.setContentText(message);
        alert.showAndWait();
    }


    @FXML
    void ButtonBackToLaboratories(ActionEvent event) {

        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/dashboard.fxml"));
            Parent root = loader.load();
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void handleUpdateAction(Bilan bilan) {
        try {
            // Charger le FXML de UpdateBilan
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/UpdateBilan.fxml"));
            Parent root = loader.load();
            UpdateBilan updateBilanController = loader.getController();
            updateBilanController.fillFormWithBilan(bilan); // Passer le bilan à UpdateBilan

            // Créer une nouvelle scène pour afficher UpdateBilan
            Scene scene = new Scene(root);

            // Créer un nouveau stage pour la fenêtre UpdateBilan
            Stage stage = new Stage();
            stage.setScene(scene);
            stage.initModality(Modality.APPLICATION_MODAL);
            stage.setTitle("Update Bilan");

            // Afficher la fenêtre UpdateBilan
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }


}
