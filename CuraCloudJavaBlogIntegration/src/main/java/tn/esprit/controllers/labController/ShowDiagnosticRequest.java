package tn.esprit.controllers.labController;

import tn.esprit.models.DiagnosticRequest;
import tn.esprit.services.DiagnosticRequestService;
import tn.esprit.services.Session;
import tn.esprit.services.SessionBilan;
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
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Callback;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.sql.Date;
import java.sql.SQLException;
import java.util.List;

public class ShowDiagnosticRequest {

    //Att
    private final DiagnosticRequestService drs = new DiagnosticRequestService();
    @FXML
    private ImageView imageView; //Logo
    @FXML
    private Button addDiagnosticBtn;
    @FXML
    private TableColumn<DiagnosticRequest, String> AnalyseTypeDiagnosticRequest;
    @FXML
    private TableView<DiagnosticRequest> DiagnosticRequestTableView;
    @FXML
    private TableColumn<DiagnosticRequest, String> DoctorName;
    @FXML
    private TableColumn<DiagnosticRequest, String> PatientName;
    @FXML
    private TableColumn<DiagnosticRequest, String> ResultDiagnosticRequest;
    @FXML
    private TableColumn<DiagnosticRequest, String> StatusDiagnosticRequest;
    @FXML
    private TableColumn<DiagnosticRequest, Date> creationDateDiagnosticRequest;
    @FXML
    private TableColumn<DiagnosticRequest, String> doctorNotesDiagnosticRequest;
    @FXML
    private TableColumn<DiagnosticRequest, String> radioTypeDiagnosticRequest;
    @FXML
    private TableColumn<DiagnosticRequest, String> typeDiagnosticRequet;
    @FXML
    private TableColumn<DiagnosticRequest, Void> ActionsUpdateId;
    @FXML
    private TextField SearchTextField;
    private final UserService userService = new UserService();

    SessionBilan sb = SessionBilan.getInstance();
    public void Session() {
        String session = Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = drs.getUserIDByEmail(session);
        System.out.println("Role: " + role);
        if (role.equals("[\"ROLE_DOCTOR\"]")) {
            addDiagnosticBtn.setDisable(false); // Disable the ComboBox
            addDiagnosticBtn.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
        } else if (role.equals("[\"ROLE_PATIENT\"]")) {
            addDiagnosticBtn.setDisable(true); // Disable the ComboBox
            addDiagnosticBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        }
        else if (role.equals("[\"ROLE_RADIOLOGY\"]")) {
            addDiagnosticBtn.setDisable(true); // Disable the ComboBox
            addDiagnosticBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
        }
    }
    //Function initialize
    public void initialize() {
        Session();
        //Charger le LOGO
        String imagePath = "/img/LOGO1.png";
        Image image = new Image(getClass().getResourceAsStream(imagePath));
        imageView.setImage(image);
        String session = Session.getInstance().getUserSession().get("email").toString();
        String role = userService.getUserRoleByEmail(session);
        int id = drs.getUserIDByEmail(session);
        //Afficher la liste des diagnosticRequest
        try {
            List<DiagnosticRequest> diagnosticRequests = drs.getUserAll(id);
            ObservableList<DiagnosticRequest> observableList = FXCollections.observableList(diagnosticRequests);
            DiagnosticRequestTableView.setItems(observableList);
            AnalyseTypeDiagnosticRequest.setCellValueFactory(new PropertyValueFactory<>("analyseType"));
            creationDateDiagnosticRequest.setCellValueFactory(new PropertyValueFactory<>("creationDate"));
            StatusDiagnosticRequest.setCellValueFactory(new PropertyValueFactory<>("status"));
            doctorNotesDiagnosticRequest.setCellValueFactory(new PropertyValueFactory<>("doctorNotes"));
            typeDiagnosticRequet.setCellValueFactory(new PropertyValueFactory<>("type"));
            radioTypeDiagnosticRequest.setCellValueFactory(new PropertyValueFactory<>("radioType"));

            // Créez une cellule personnalisée pour la colonne result
            Callback<TableColumn<DiagnosticRequest, String>, TableCell<DiagnosticRequest, String>> cellFactory = new Callback<TableColumn<DiagnosticRequest, String>, TableCell<DiagnosticRequest, String>>() {
                @Override
                public TableCell<DiagnosticRequest, String> call(TableColumn<DiagnosticRequest, String> param) {
                    final TableCell<DiagnosticRequest, String> cell = new TableCell<>() {
                        private final Button btn = new Button("Result");

                        {
                            btn.setOnAction(event -> {
                                try {
                                    DiagnosticRequest diagnosticRequest = getTableView().getItems().get(getIndex());
                                   //sb.getBilanSession().put("Id",)
                                    showDiagnoticResult(diagnosticRequest); // Appeler la méthode pour afficher l'autre interface

                                } catch (Exception e) {
                                    showError("Error " + e.getMessage());
                                }
                            });
                            btn.setStyle("-fx-background-color: linear-gradient(to bottom right, #00b362, #5381ac); " + /* Couleur de fond */
                                    "-fx-text-fill: white; " + /* Couleur du texte */
                                    "-fx-font-weight: bold; " + /* Police en gras */
                                    "-fx-padding: 5px 10px;"+
                                    "-fx-border-radius: 1px");
                        }

                        @Override
                        protected void updateItem(String item, boolean empty) {
                            super.updateItem(item, empty);
                            if (empty) {
                                setGraphic(null);
                            } else {
                                setGraphic(btn);
                            }
                        }
                    };
                    return cell;
                }
            };
            ResultDiagnosticRequest.setCellFactory(cellFactory);



// Modifier le code de la cellule personnalisée pour inclure l'action d'afficher l'interface de mise à jour
            Callback<TableColumn<DiagnosticRequest, Void>, TableCell<DiagnosticRequest, Void>> updateCellFactory = new Callback<TableColumn<DiagnosticRequest, Void>, TableCell<DiagnosticRequest, Void>>() {
                @Override
                public TableCell<DiagnosticRequest, Void> call(TableColumn<DiagnosticRequest, Void> param) {
                    final TableCell<DiagnosticRequest, Void> cell = new TableCell<>() {
                        private final Button updateBtn = new Button("Update");

                        {
                            updateBtn.setOnAction(event -> {
                                try {
                                    DiagnosticRequest diagnosticRequest = getTableView().getItems().get(getIndex());
                                    //displayUpdateDiagnosticRequest(); // Appeler la méthode pour afficher l'interface de mise à jour
                                    displayUpdateForm(diagnosticRequest);
                                } catch (Exception e) {
                                    showError("Error " + e.getMessage());
                                }
                            });
                            updateBtn.setStyle("-fx-background-color: linear-gradient(to bottom right, #00b362, #5381ac); " +
                                    "-fx-text-fill: white; " +
                                    "-fx-font-weight: bold; " +
                                    "-fx-padding: 5px 10px;" +
                                    "-fx-border-radius: 1px");
                        }

                        @Override
                        protected void updateItem(Void item, boolean empty) {
                            super.updateItem(item, empty);
                            if (empty) {
                                setGraphic(null);
                            } else {
                                setGraphic(updateBtn);
                            }
                        }
                    };
                    return cell;
                }
            };

// Définissez cette cellule personnalisée pour la colonne "ActionsUpdateId"
            ActionsUpdateId.setCellFactory(updateCellFactory);


            //recherche
            FilteredList<DiagnosticRequest> filterdData = new FilteredList<>(observableList, b -> true);
            SearchTextField.textProperty().addListener((observable ,oldValue, newValue)->{
                filterdData.setPredicate(DiagnosticSearch ->{
                    if(newValue.isEmpty() || newValue.isBlank() || newValue == null){
                        return true ;
                    }
                    String searchKeyword = newValue.toLowerCase();
                    if(DiagnosticSearch.getStatus().toLowerCase().indexOf(searchKeyword) > -1){
                        return true; // means we found a match in product name
                    }else if(DiagnosticSearch.getType().toLowerCase().indexOf(searchKeyword) > -1){
                        return true;
                    }else if(DiagnosticSearch.getRadioType().toLowerCase().indexOf(searchKeyword) > -1){
                        return true;
                    }else if(DiagnosticSearch.getAnalyseType().toLowerCase().indexOf(searchKeyword) > -1){
                        return true;
                    }else
                        return false; // no match found

                });
            });

            SortedList<DiagnosticRequest> sortedData = new SortedList<>(filterdData);
            //Bind sorted result wih table view
            sortedData.comparatorProperty().bind(DiagnosticRequestTableView.comparatorProperty());
            //apply filtred and sorted data to the table view
            DiagnosticRequestTableView.setItems(sortedData);
            /////fin recherche


        } catch (SQLException e) {
           showError(e.getMessage());

        }

    }

    //Function Show diagnostic Result
 /*   private void showDiagnoticResult(DiagnosticRequest diagnosticRequest) {
      try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/bilansList.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
           /* BilansList controller=loader.getController();
            controller.getbilan(diagnosticRequest);*/

          /* Alert alert = new Alert(Alert.AlertType.ERROR);
           alert.setTitle("Error");
           alert.setContentText(String.valueOf(diagnosticRequest.getId()));
           alert.showAndWait();
            Stage stage = new Stage();
            stage.setScene(scene);
            stage.setTitle("DiagnosticResult");
            stage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
        }
*/
        private void showDiagnoticResult(DiagnosticRequest diagnosticRequest) {
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/bilansList.fxml"));
                Parent root = loader.load();
                Scene scene = new Scene(root);

                // Récupérer le contrôleur de BilansList
                BilansList controller = loader.getController();

                // Passer le DiagnosticRequest au contrôleur BilansList
                controller.getbilan(diagnosticRequest);

                // Afficher la scène
                Stage stage = new Stage();
                stage.setScene(scene);
                stage.setTitle("DiagnosticResult");
                stage.show();

            } catch (IOException e) {
                e.printStackTrace();
            }
        }



    private void displayUpdateForm(DiagnosticRequest diagnosticRequest) {
        try {
            // Chargez le fichier FXML du formulaire d'édition du diagnostic
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/UpdateDiagnosticRequest.fxml"));
            Parent root = loader.load();

            // Obtenez le contrôleur du formulaire
            UpdateDiagnosticRequest controller = loader.getController();

            // Appelez la méthode du contrôleur pour remplir les champs avec les données du diagnostic sélectionné
            controller.fillFormWithDiagnostic(diagnosticRequest);

            // Créez une nouvelle fenêtre pour afficher le formulaire
            Stage stage = new Stage();
            stage.setTitle("Update Diagnostic");

            // Créez une scène et définissez le contenu
            Scene scene = new Scene(root);
            stage.setScene(scene);

            // Affichez la fenêtre
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }




   /* private void displayUpdateDiagnosticRequest() {
        try {
            // Charger le fichier FXML de l'interface updatediagnosticRequest.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UpdateDiagnosticRequest.fxml"));
            Parent root = loader.load();

            // Créer une nouvelle fenêtre pour afficher l'interface de mise à jour
            Stage stage = new Stage();
            stage.setTitle("Update Diagnostic Request");
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showError("Error loading Update Diagnostic Request interface");
        }
    }
*/





    //Function go back to Dashboard(Laboratory)
    @FXML
    void navigateToBack(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/Dashboard.fxml"));
            Parent root = loader.load();
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    //Function navigate to add diagnostic Request
    @FXML
    void NavigateToAddDiagnostic(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/AddDiagnosticRequest.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            // Créer un nouveau stage pour la nouvelle fenêtre
            Stage newStage = new Stage();
            newStage.setScene(scene);
            // Définir la modalité du nouveau stage (peut être modifié selon vos besoins)
            newStage.initModality(Modality.APPLICATION_MODAL);
            // Définir le titre de la nouvelle fenêtre
            newStage.setTitle("Add new Diagnostic");
            // Afficher la nouvelle fenêtre
            newStage.show();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
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


}
