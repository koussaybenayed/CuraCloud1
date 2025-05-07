package tn.esprit.controllers.labController;

import de.jensd.fx.glyphs.fontawesome.FontAwesomeIconView;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
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
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.FlowPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import tn.esprit.controllers.BlogDetailsController;
import tn.esprit.models.Bilan;
import tn.esprit.models.Blog;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.models.User;
import tn.esprit.services.*;

import java.io.IOException;
import java.sql.Date;
import java.sql.SQLException;
import java.util.List;
import java.util.Objects;
import java.util.Optional;

public class Dashboard {

    private final UserService userService = new UserService();

    //Dashboard
        @FXML
        private Label emailsession;
        @FXML
        private Button DashboardBtnId;
        @FXML
        private Button LaboratoiresBtnId;
        @FXML
        private AnchorPane dashboardInterface;
        @FXML
        private ImageView imageView;
        @FXML
        private ImageView imageBackground;
        @FXML
        private AnchorPane LastBilanAnchroPane;
        @FXML
        private TableColumn<Bilan,String> DetailsId;
        @FXML
        private TableColumn<Bilan,String> ResultId;

        @FXML
        private AnchorPane BlogInterface;

        @FXML
        private FontAwesomeIconView addBlogBtn;

        @FXML
        private FlowPane blogFlowPane;

        @FXML
        private Button blogsButton;

        @FXML
        private TextField searchField;

        @FXML
        private Button prevPageButton;

        @FXML
        private Button nextPageButton;


        @FXML
        void goToShowBlogPage(ActionEvent event) {
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowBlog.fxml"));
                Parent root = loader.load();

                Stage showBlogStage = new Stage();
                showBlogStage.setScene(new Scene(root));
                showBlogStage.show();

                // Optionally, close the current stage if needed
                Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                currentStage.close();
            } catch (IOException e) {
                e.printStackTrace();
            }

        }

        @FXML
        void handleSearch(KeyEvent event) {
            String searchText = searchField.getText().toLowerCase().trim(); // Get the search text and convert to lowercase
            ObservableList<Node> filteredBlogs = FXCollections.observableArrayList();

            if (searchText.isEmpty()) {
                filteredBlogs.addAll(blogFlowPane.getChildren());
            } else {
                for (Node node : blogFlowPane.getChildren()) {
                    if (node instanceof VBox blogBox) {
                        Label titleLabel = (Label) blogBox.getChildren().get(1); // Assuming title label is the second child
                        Label contentLabel = (Label) blogBox.getChildren().get(2); // Assuming content label is the third child

                        String title = titleLabel.getText().toLowerCase();
                        String content = contentLabel.getText().toLowerCase();

                        if (title.contains(searchText) || content.contains(searchText)) {
                            filteredBlogs.add(blogBox);
                        }
                    }
                }

            }

            blogFlowPane.getChildren().setAll(filteredBlogs);

        }

        @FXML
        void searchBlogs(ActionEvent event) {

        }
        @FXML
        void goToAddBlogPage(ActionEvent event) {
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/AddBlog.fxml"));
                Parent root = loader.load();

                Stage addBlogStage = new Stage();
                addBlogStage.setScene(new Scene(root));
                addBlogStage.show();

                Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                currentStage.close();
            } catch (IOException e) {
                e.printStackTrace();
            }

        }
        @FXML
        void goToNextPage(ActionEvent event) {
            int totalPages = (allBlogs.size() + BLOGS_PER_PAGE - 1) / BLOGS_PER_PAGE;
            if (currentPage < totalPages - 1) {
                currentPage++;
                showBlogs();
            }

        }

        @FXML
        void goToPrevPage(ActionEvent event) {
            if (currentPage > 0) {
                currentPage--;
                showBlogs();
            }

        }

    private void updatePaginationButtons() {
        prevPageButton.setDisable(currentPage == 0);
        int totalPages = (allBlogs.size() + BLOGS_PER_PAGE - 1) / BLOGS_PER_PAGE;
        nextPageButton.setDisable(currentPage >= totalPages - 1);
    }

    @FXML
    private Button BlogBtnId;


    //Switch between Interfaces
        public void switchInterfaces(ActionEvent event){
            if(event.getSource()==DashboardBtnId){
                dashboardInterface.setVisible(true);
                LaboratoriesInterface.setVisible(false);
                BlogInterface.setVisible(false);

            }else if (event.getSource()==LaboratoiresBtnId){
                dashboardInterface.setVisible(false);
                LaboratoriesInterface.setVisible(true);
                BlogInterface.setVisible(false);
            }else if(event.getSource()==BlogBtnId){
                dashboardInterface.setVisible(false);
                LaboratoriesInterface.setVisible(false);
                BlogInterface.setVisible(true);
            }

        }



    //Laboratory

    private final BilanService bs = new BilanService();
    private  final DiagnosticRequestService drs = new DiagnosticRequestService();
    private  final UserService us = new UserService();
    @FXML
    private TableColumn<Bilan, Date> RealisationDate;

    @FXML
    private TableColumn<Bilan, Date> SubmissionDate;
    @FXML
    private TableView<Bilan> BilanTableViewLaboratory;
    @FXML
    private Label DeatilsLabelBilan;
    @FXML
    private TableView<DiagnosticRequest> DiagnosticRequestTableViewLaboratory;
    @FXML
    private TableColumn<DiagnosticRequest, String> DiagnosticType;
    @FXML
    private TableColumn<DiagnosticRequest, String> DoctorName;
    @FXML
    private TableColumn<DiagnosticRequest, String> Status;
    @FXML
    private TableColumn<DiagnosticRequest, Date> creationDate;
    @FXML
    private TableColumn<?, ?> Actions;
    @FXML
    private TableColumn<?, ?> DiagnosticId;
    @FXML
    private AnchorPane LaboratoriesInterface;
    @FXML
    private Button ShowDetailsBilanBtnId;
    @FXML
    private TableColumn<?, ?> dnID;
    @FXML
    private TableColumn<?, ?> emailID;
    @FXML
    private TableColumn<?, ?> specID;
    @FXML
    private TableColumn<?, ?> actionID;
    @FXML
    private TableView<User> tableviewDoc;


    /////BlogVar
    private final BlogService blogService = new BlogService();
    private final ObservableList<Blog> allBlogs = FXCollections.observableArrayList();
    private static final int BLOGS_PER_PAGE = 8;
    private int currentPage = 0;



    //Bilan Details
    @FXML
    void navigateToShowBilan1(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/ShowBilan1.fxml"));
            Parent root = loader.load();
            // Créer une nouvelle scène avec le contenu chargé depuis le FXML
            Scene scene = new Scene(root);

            // Obtenir la référence au stage actuel
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // Définir la nouvelle scène sur le stage
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }


    @FXML
    void navigateToShowDiagnosticRequest(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/labInterface/ShowDiagnosticRequest.fxml"));
            Parent root = loader.load();
            // Créer une nouvelle scène avec le contenu chargé depuis le FXML
            Scene scene = new Scene(root);

            // Obtenir la référence au stage actuel
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // Définir la nouvelle scène sur le stage
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            throw new RuntimeException(e);
        }

    }

     //Blog
     //Appointments
     //......


     public void initialize() {
         ////BLOG

         String session = Session.getInstance().getUserSession().get("email").toString();
         String role = userService.getUserRoleByEmail(session);
         int id = blogService.getUserIDByEmail(session);
         System.out.println("Role: " + role);
         if (role.equals("[\"ROLE_DOCTOR\"]")) {
             addBlogBtn.setDisable(true); // Disable the ComboBox
             addBlogBtn.setStyle("-fx-opacity: 1;"); // Set opacity to gray out the ComboBox
         } else if (role.equals("[\"ROLE_PATIENT\"]")) {
             addBlogBtn.setDisable(false); // Disable the ComboBox
             addBlogBtn.setStyle("-fx-opacity: 0;"); // Set opacity to gray out the ComboBox
         }
         loadBlogs();
         showBlogs();
        //Charger les images LOGO+Dashboard
        String imagePath = "/img/LOGO.png";
        String imagePath1 = "/img/DashBoardImage.jpg";

        Image image = new Image(getClass().getResourceAsStream(imagePath));
        Image image1 = new Image(getClass().getResourceAsStream(imagePath1));

        imageView.setImage(image);
        imageBackground.setImage(image1);

        emailsession.setText(Session.getInstance().getUserSession().get("email").toString());

        //Afficher bilan details dans dashboard
         try {
             List<Bilan> bilans = bs.getAll();
             if (!bilans.isEmpty()) {
                 Bilan dernierBilan = bilans.get(0);
                 for (Bilan bilan : bilans) {
                     if (bilan.getRealisation_date().after(dernierBilan.getRealisation_date())) {
                         dernierBilan = bilan;
                     }
                 }

                 if (dernierBilan != null) {
                     afficherBilan(dernierBilan);
                 }
             } else {
                 System.out.println("Aucun bilan trouvé.");
             }
         } catch (SQLException e) {
             throw new RuntimeException(e);
         }

         //Afficher la liste des bilans dans laboratory
         List<Bilan> bilans = null;
         try {
             bilans = bs.getAll();
             ObservableList<Bilan> observableList = FXCollections.observableList(bilans);
             BilanTableViewLaboratory.setItems(observableList);
             RealisationDate.setCellValueFactory(new PropertyValueFactory<>("realisation_date"));
             SubmissionDate.setCellValueFactory(new PropertyValueFactory<>("submission_date"));

         } catch (SQLException e) {
             Alert alert = new Alert(Alert.AlertType.ERROR);
             alert.setTitle("Error");
             alert.setContentText(e.getMessage());
             alert.showAndWait();
         }

         //Afficher la liste des diagnostic request dans laboratory
         List<DiagnosticRequest> diagnosticRequests = null;
         try {
             diagnosticRequests =drs.getUserAll(id);
             ObservableList<DiagnosticRequest> observableList1 = FXCollections.observableList(diagnosticRequests);
             DiagnosticRequestTableViewLaboratory.setItems(observableList1);
             DiagnosticType.setCellValueFactory(new PropertyValueFactory<>("type"));
             creationDate.setCellValueFactory(new PropertyValueFactory<>("creationDate"));
             Status.setCellValueFactory(new PropertyValueFactory<>("status"));
             DoctorName.setCellValueFactory(new PropertyValueFactory<>("doctorNotes"));

         }catch (SQLException e){
             Alert alert = new Alert(Alert.AlertType.ERROR);
             alert.setTitle("Error");
             alert.setContentText(e.getMessage());
             alert.showAndWait();
         }


         ObservableList<User> Doctors = null;
         ObservableList<User> clientList = us.fetchDoctors();
         emailID.setCellValueFactory(new PropertyValueFactory<>("email"));
         dnID.setCellValueFactory(new PropertyValueFactory<>("first_name"));
         specID.setCellValueFactory(new PropertyValueFactory<>("speciality"));
         tableviewDoc.setItems(clientList);


         /*Callback<TableColumn<DiagnosticRequest, Void>, TableCell<DiagnosticRequest, Void>> updateCellFactory = new Callback<TableColumn<DiagnosticRequest, Void>, TableCell<DiagnosticRequest, Void>>() {
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
         actionID.setCellFactory(updateCellFactory);


*/

     }

     //Blog

    private void loadBlogs() {
        allBlogs.setAll(blogService.getAll());
    }
    private void showBlogs() {
        blogFlowPane.getChildren().clear();
        int start = currentPage * BLOGS_PER_PAGE;
        int end = Math.min(start + BLOGS_PER_PAGE, allBlogs.size());

        for (int i = start; i < end; i++) {
            Blog blog = allBlogs.get(i);
            VBox blogBox = createBlogBox(blog);
            blogFlowPane.getChildren().add(blogBox);
        }

        updatePaginationButtons();
    }

    private VBox createBlogBox(Blog blog) {
        VBox blogBox = new VBox();
        blogBox.getStyleClass().add("blog-box"); // Apply CSS style to the blog box
        blogBox.setSpacing(10); // Set spacing between elements in the VBox

        ImageView imageView = new ImageView();
        imageView.setFitWidth(180);
        imageView.setPreserveRatio(true);
        imageView.setImage(new Image("file:images/" + blog.getImage()));
        imageView.setStyle("-fx-background-radius: 10; -fx-padding: 10; -fx-effect: dropshadow(three-pass-box, rgba(0,0,0,0.3), 5, 0, 2, 2);");

        Label titleLabel = new Label(blog.getTitle());
        titleLabel.getStyleClass().add("blog-title"); // Apply CSS style to the title label

        Label contentLabel = new Label(truncateContent(blog.getContent()));
        contentLabel.getStyleClass().add("blog-content"); // Apply CSS style to the content label

        Label dateLabel = new Label("Date: " + blog.getSubmmission_date().toString());
        dateLabel.getStyleClass().add("blog-date"); // Apply CSS style to the date label

        blogBox.getChildren().addAll(imageView, titleLabel, contentLabel, dateLabel);

        blogBox.setOnMouseClicked(event -> {
            try {
                loadBlogDetailsPage(blog);
            } catch (IOException e) {
                e.printStackTrace();
            }
        });

        return blogBox;
    }

    private String truncateContent(String content) {
        final int MAX_CONTENT_LENGTH = 40; // Maximum characters for content
        if (content.length() > MAX_CONTENT_LENGTH) {
            return content.substring(0, MAX_CONTENT_LENGTH) + "...";
        } else {
            return content;
        }
    }

    private void loadBlogDetailsPage(Blog blog) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/BlogDetails.fxml"));
        Parent root = loader.load();

        BlogDetailsController blogDetailsController = loader.getController();
        blogDetailsController.initData(blog);

        blogFlowPane.getScene().setRoot(root);
    }

     //Fonction pour afficher bilan details dans dashboard
    public void afficherBilan(Bilan bilan) {
        DeatilsLabelBilan.setText(bilan.getResult());
    }


//ahmed
    //Navigate Medical Records
    @FXML
    private void navigateToMedicalRecords(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/portalInterface/MedicalRecordsList.fxml"));
            AnchorPane medicalRecordsView = loader.load();

            Scene scene = new Scene(medicalRecordsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

    //////Navigation Ahmed

    @FXML
    private void navigateToAppointments(ActionEvent event) {
        try {
            String session = Session.getInstance().getUserSession().get("email").toString();
            String userRole = us.getUserRoleByEmail(session);

            // Determine the FXML file to load based on the user's role
            String fxmlFile;
            switch (userRole) {
                case "[\"ROLE_PATIENT\"]":
                    fxmlFile = "/portalInterface/AppointmentListPatient.fxml";
                    break;
                case "[\"ROLE_DOCTOR\"]":
                    fxmlFile = "/portalInterface/AppointmentListDoctor.fxml";
                    break;
                case "Admin":
                    fxmlFile = "/portalInterface/AppointmentListAdmin.fxml";
                    break;
                default:
                    // Handle invalid or unknown role
                    System.out.println("Invalid user role: " + userRole);
                    return;
            }

            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFile));
            AnchorPane appointmentsView = loader.load();
            Scene scene = new Scene(appointmentsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }

    @FXML
    private void navigateToPrescription(ActionEvent event) {
        try {
            String session = Session.getInstance().getUserSession().get("email").toString();
            String userRole = us.getUserRoleByEmail(session);

            // Determine the FXML file to load based on the user's role
            String fxmlFile;
            switch (userRole) {
                case "[\"ROLE_PATIENT\"]":
                    fxmlFile = "/ShowPrescriptionF.fxml";
                    break;
                case "[\"ROLE_DOCTOR\"]":
                    fxmlFile = "/ShowPrescription.fxml";
                    break;
                case "Admin":
                    fxmlFile = "/portalInterface/AppointmentListAdmin.fxml";
                    break;
                default:
                    // Handle invalid or unknown role
                    System.out.println("Invalid user role: " + userRole);
                    return;
            }

            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFile));
            AnchorPane appointmentsView = loader.load();
            Scene scene = new Scene(appointmentsView);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            ex.printStackTrace(); // Proper error handling should be implemented
        }
    }



    //logout

    @FXML
    private Button sign_out_btn;

    public void logout(ActionEvent event) {
        try {
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Logout Confirmation");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure you want to logout?");
            Optional<ButtonType> option = alert.showAndWait();

            if (option.get() == ButtonType.OK) {
                System.out.println(Session.getInstance().getUserSession().get("email"));
                //delete session
                Session.getInstance().logoutUser();
                //
                sign_out_btn.getScene().getWindow().hide();
                Parent root = FXMLLoader.load(Objects.requireNonNull(getClass().getResource("/userInterafce/Login.fxml")));
                Stage stage = new Stage();
                Scene scene = new Scene(root);

                stage.initStyle(StageStyle.TRANSPARENT);
                stage.setScene(scene);
                stage.show();
            }
            else return;
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }
}

