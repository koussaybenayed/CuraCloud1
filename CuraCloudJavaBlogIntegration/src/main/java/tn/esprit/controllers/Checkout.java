package tn.esprit.controllers;
import com.stripe.Stripe;
import com.stripe.exception.StripeException;
import com.stripe.model.checkout.Session;
import com.stripe.param.checkout.SessionCreateParams;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import tn.esprit.models.Meds;
import tn.esprit.models.Prescription;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.scene.control.SelectionMode;
import javafx.stage.Stage;
import tn.esprit.services.PrescriptionService;

import java.io.IOException;
import java.util.List;

public class Checkout {

    @FXML
    private ListView<Prescription> listC;

    @FXML
    private Button pay;

    private final PrescriptionService prescriptionService = new PrescriptionService();
    private final ObservableList<Prescription> selectedPrescriptions = FXCollections.observableArrayList();

    @FXML
    public void initialize() {
        loadPrescriptions();
        listC.setCellFactory(new PrescriptionListCellFactory1());
        // Set the selection mode to MULTIPLE
        listC.getSelectionModel().setSelectionMode(SelectionMode.MULTIPLE);

        // Add listener for item selection
        listC.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue != null) {
                if (listC.getSelectionModel().getSelectedItems().contains(newValue)) {
                    // If not already in selectedPrescriptions, add it
                    if (!selectedPrescriptions.contains(newValue)) {
                        selectedPrescriptions.add(newValue);
                    }
                } else {
                    // If deselected, remove it from selectedPrescriptions
                    selectedPrescriptions.remove(newValue);
                }
            }
        });
    }


    public void loadPrescriptions() {
        List<Prescription> prescriptions = prescriptionService.getAllPrescriptionsByUserId();
        listC.getItems().setAll(prescriptions);
    }

    @FXML
    void handlePay(ActionEvent event) {
        processPayment();
    }
    private void processPayment() {
        try {
            // Set your secret key here
            Stripe.apiKey = "sk_test_51OrpfpI4zlfP8CIES2418Uy7Cae2WTx7GtJuayOKW5PvdvN3noxVgq9MhLs8PZmgjSClfOfnB8xVuO6Ua8sB06BV00tpM9Zq70";

            // Calculate total cost
            float totalCost = 0;
            for (Prescription prescription : selectedPrescriptions) {
                for (Meds med : prescription.getMedications()) {
                    totalCost += med.getPrice();
                }
            }

            // Create a Checkout Session
            SessionCreateParams params = SessionCreateParams.builder()
                    .addPaymentMethodType(SessionCreateParams.PaymentMethodType.CARD)
                    .setMode(SessionCreateParams.Mode.PAYMENT)
                    .setSuccessUrl("https://yourwebsite.com/success")
                    .setCancelUrl("https://yourwebsite.com/cancel")
                    .addLineItem(
                            SessionCreateParams.LineItem.builder()
                                    .setQuantity(1L)
                                    .setPriceData(
                                            SessionCreateParams.LineItem.PriceData.builder()
                                                    .setCurrency("usd")
                                                    .setUnitAmount((long) (totalCost * 100)) // Price in cents
                                                    .setProductData(
                                                            SessionCreateParams.LineItem.PriceData.ProductData.builder()
                                                                    .setName("Medications")
                                                                    .build()
                                                    )
                                                    .build()
                                    )
                                    .build()
                    )
                    .build();

            Session session = Session.create(params);

            // Get the URL for the Stripe Checkout session
            String url = session.getUrl();

            // Open a new stage for displaying the payment page
            Stage paymentStage = new Stage();
            WebView webView = new WebView();
            WebEngine webEngine = webView.getEngine();
            webEngine.load(url);
            Scene scene = new Scene(webView);
            paymentStage.setScene(scene);
            paymentStage.show();

            // Close the current stage
            Stage currentStage = (Stage) pay.getScene().getWindow();
            currentStage.close();
        } catch (StripeException e) {
            // If there was an error processing the payment, display the error message
            System.out.println("Payment failed. Error: " + e.getMessage());
        }
    }

    public void back(ActionEvent actionEvent) {
        try {
            // Get the stage from the action event
            Stage stage = (Stage) ((Node) actionEvent.getSource()).getScene().getWindow();

            // Close the current stage
            stage.close();

            // Load the FXML file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowPrescriptionF.fxml"));
            Parent root = loader.load();

            // Create a new scene with the loaded FXML
            Scene scene = new Scene(root);

            // Create a new stage for the new scene
            Stage newStage = new Stage();
            newStage.setScene(scene);
            newStage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }}
