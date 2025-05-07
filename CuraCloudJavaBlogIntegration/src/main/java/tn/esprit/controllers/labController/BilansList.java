package tn.esprit.controllers.labController;

import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import tn.esprit.models.Bilan;
import tn.esprit.models.DiagnosticRequest;
import tn.esprit.services.BilanService;
import tn.esprit.services.SessionBilan;

public class BilansList {


  /*  private void showBilanForDiagnostic(DiagnosticRequest diagnosticRequest) {
        try {
            // Récupérer le bilan associé au diagnostic
            Bilan bilan = getBilanForDiagnostic(diagnosticRequest); // Méthode à implémenter

            // Vérifier si un bilan a été trouvé
            if (bilan != null) {
                // Créer un FXMLLoader pour charger le fichier FXML de l'interface du bilan
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/votre_chemin_vers_votre_fichier_fxml.fxml"));
                Parent root = loader.load();

                // Récupérer le contrôleur de l'interface du bilan
                VotreControllerBilan controller = loader.getController();

                // Passer le bilan au contrôleur de l'interface du bilan pour affichage
                controller.setBilan(bilan);

                // Créer une nouvelle scène pour l'interface du bilan
                Scene scene = new Scene(root);

                // Créer une nouvelle fenêtre pour afficher l'interface du bilan
                Stage stage = new Stage();
                stage.setScene(scene);
                stage.setTitle("Bilan for Diagnostic " + diagnosticRequest.getId());
                stage.show();
            } else {
                // Afficher un message d'erreur si aucun bilan n'est associé au diagnostic
                showError("No Bilan found for Diagnostic " + diagnosticRequest.getId());
            }
        } catch (IOException e) {
            e.printStackTrace();
            showError("Error loading Bilan interface: " + e.getMessage());
        }
    }

   */

    @FXML
    private TableColumn<Bilan, Integer> BilanId;
    @FXML
    private TableView<Bilan> BilansId;
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


    SessionBilan sb = SessionBilan.getInstance();
    DiagnosticRequest diag = new DiagnosticRequest();
    private DiagnosticRequest diagnosticRequest;

    public void getbilan(DiagnosticRequest diagnosticRequest) {
        this.diagnosticRequest = diagnosticRequest;
        initializeBilansTable();
    }
    private void initializeBilansTable() {
        // Utilisez diagnosticRequest pour charger les bilans associés
        ObservableList<Bilan> bilans = bs.getByDiagnosticRequestId(diagnosticRequest.getId());
        // Mettez à jour la TableView avec les bilans chargés
        BilansId.setItems(bilans);
    }
    @FXML
  void initialize() {
      //Affichage
        ObservableList<Bilan> bilans = bs.getByDiagnosticRequestId(diag.getId());
        //List<Bilan> bilans = bs.getByDiagnosticRequestId(diag.getId());
        System.out.println(diag.getId());
        //ObservableList<Bilan> observableList = FXCollections.observableList(bilans);
        imageId.setCellValueFactory(new PropertyValueFactory<>("image_name"));
        labCommentsId.setCellValueFactory(new PropertyValueFactory<>("lab_comment"));
        priceId.setCellValueFactory(new PropertyValueFactory<>("price"));
        realisationDateId.setCellValueFactory(new PropertyValueFactory<>("realisation_date"));
        resultId.setCellValueFactory(new PropertyValueFactory<>("result"));
        submissionDateId.setCellValueFactory(new PropertyValueFactory<>("submission_date"));
        BilansId.setItems(bilans);


    }
}
