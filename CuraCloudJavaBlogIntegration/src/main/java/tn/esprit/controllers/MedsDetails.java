package tn.esprit.controllers;

import com.stripe.Stripe;
import com.stripe.exception.StripeException;
import tn.esprit.models.Meds;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import tn.esprit.services.MedsService;
import com.stripe.model.checkout.Session;
import com.stripe.param.checkout.SessionCreateParams;

import java.io.IOException;
import java.util.Optional;

public class MedsDetails {

    @FXML
    private Label doseLabel;

    @FXML
    private Label medicationLabel;

    @FXML
    private Label priceLabel;

    @FXML
    private Label typeLabel;

    private final MedsService ms = new MedsService();
    private Meds meds;
    private Stage stage;

    public void initData2(Meds meds) {
        this.meds = meds;
        displayMedsDetails();
    }

    private void displayMedsDetails() {
        if (meds != null) {
            medicationLabel.setText("Medication: " + meds.getName());
            typeLabel.setText("Type: " + meds.getType());
            doseLabel.setText("Dose: " + meds.getDose());
            priceLabel.setText("Price: " + meds.getPrice());
        }
    }

    @FXML
    void cancelM(ActionEvent event) {
        redirectToShowMeds();
    }

    @FXML
    void deleteMeds(ActionEvent event) {

            // Display a confirmation dialog to confirm deletion
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText("Delete Medication");
            alert.setContentText("Are you sure you want to delete this Medication?");

            Optional<ButtonType> result = alert.showAndWait();
            if (result.isPresent() && result.get() == ButtonType.OK) {
                // User confirmed deletion
                System.out.println("Deleting Medication ID: " + meds.getId()); // Debug
                // Perform deletion logic here, assuming ps is your PrescriptionService instance
                ms.deleteMeds(meds.getId());

                // Redirect to ShowPrescription.fxml
                redirectToShowMeds();
            }
        }


    @FXML
    void updateMeds(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UpdateMeds.fxml"));
            Parent root = loader.load();
            stage = (Stage) medicationLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
            // Initialize prescription if not null
            UpdateMeds controller = loader.getController();
            if (meds != null) {
                controller.initData2(meds);
            }
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
        private void redirectToShowMeds() {
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/ShowMeds.fxml"));
                Parent root = loader.load();
                MedsIndex controller = loader.getController();
                controller.loadMeds(); // Reload prescriptions
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.show();

                // Close the current stage
                ((Stage) medicationLabel.getScene().getWindow()).close();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    @FXML
    void handlePayment(ActionEvent event) {
        processPayment();
    }
    private void processPayment() {
        try {
            // Set your secret key here
            Stripe.apiKey = "sk_test_51OrpfpI4zlfP8CIES2418Uy7Cae2WTx7GtJuayOKW5PvdvN3noxVgq9MhLs8PZmgjSClfOfnB8xVuO6Ua8sB06BV00tpM9Zq70";

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
                                                    .setUnitAmount((long) (meds.getPrice() * 100)) // Price in cents
                                                    .setProductData(
                                                            SessionCreateParams.LineItem.PriceData.ProductData.builder()
                                                                    .setName("Medication: " + meds.getName())
                                                                    .build()
                                                    )
                                                    .build()
                                    )
                                    .build()
                    )
                    .build();

            Session session = Session.create(params);

            // Redirect user to the Stripe Checkout session URL
            String url = session.getUrl();
            Stage currentStage = (Stage) medicationLabel.getScene().getWindow();
            currentStage.close(); // Close the current stage
            openStripeCheckout(url);
        } catch (StripeException e) {
            // If there was an error processing the payment, display the error message
            System.out.println("Payment failed. Error: " + e.getMessage());
        }
    }

    // Method to open the Stripe Checkout URL in the default web browser
    private void openStripeCheckout(String url) {
        try {
            java.awt.Desktop.getDesktop().browse(new java.net.URI(url));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public void cancelMF(ActionEvent actionEvent) {
    }


    @FXML
    void dashMedication(ActionEvent actionEvent) {
        redirectToScene1("/ShowMeds.fxml");
    }

    @FXML
    void dashPrescription(ActionEvent actionEvent) {
        redirectToScene1("/ShowPrescription.fxml");
    }

    private void redirectToScene1(String fxmlFilePath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlFilePath));
            Parent root = loader.load();
            Stage stage = (Stage) medicationLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
