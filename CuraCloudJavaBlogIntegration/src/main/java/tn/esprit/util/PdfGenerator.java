package tn.esprit.util;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.pdmodel.PDPage;
import org.apache.pdfbox.pdmodel.PDPageContentStream;
import org.apache.pdfbox.pdmodel.font.PDType1Font;
import org.apache.pdfbox.pdmodel.graphics.image.PDImageXObject;
import tn.esprit.models.Bilan;
import tn.esprit.models.User;
import tn.esprit.services.BilanService;
import tn.esprit.services.Session;
import tn.esprit.services.UserService;

import java.io.IOException;
import java.io.InputStream;

public class PdfGenerator {

        public static void generatePDF(Bilan bilan) {
            User user = new User();
            final UserService userService = new UserService();
            BilanService bs = new BilanService();

            String session = Session.getInstance().getUserSession().get("email").toString();
            String role = userService.getUserRoleByEmail(session);
            int id = bs.getUserIDByEmail(session);

            try (PDDocument document = new PDDocument()) {
                PDPage page = new PDPage();
                document.addPage(page);
                PDPageContentStream contentStream = new PDPageContentStream(document, page);

                // Définir le padding
                float padding = 20;
                float pageWidth = page.getMediaBox().getWidth();
                float pageHeight = page.getMediaBox().getHeight();

                // Ajouter la bordure avec padding
                contentStream.setStrokingColor(0, 0, 0); // Couleur de la bordure
                contentStream.addRect(padding, padding, pageWidth - 2 * padding, pageHeight - 2 * padding); // Rectangle avec padding
                contentStream.stroke();

                // Ajouter le logo et le texte à côté en haut à gauche de la page
                try (InputStream logoStream = PdfGenerator.class.getResourceAsStream("/img/LOGO1.png")) {
                    PDImageXObject logoImage = PDImageXObject.createFromByteArray(document, logoStream.readAllBytes(), "logo");

                    // Ajuster les dimensions et la position du logo
                    float scale = 1.0f;
                    float logoWidth = logoImage.getWidth() * scale;
                    float logoHeight = logoImage.getHeight() * scale;

                    float logoX = 50; // Coordonnée X de départ (décalage de la marge)
                    float logoY = 792 - logoHeight - 50; // Hauteur de la page A4 en points (792 pour portrait, 612 pour paysage) moins la hauteur du logo moins un décalage

                    // Dessiner le logo agrandi en haut à gauche de la page
                    contentStream.drawImage(logoImage, logoX, logoY, logoWidth, logoHeight);

                    // Convertir la référence hexadécimale en valeurs RGB
                    int red = Integer.parseInt("01", 16); // Rouge
                    int green = Integer.parseInt("16", 16); // Vert
                    int blue = Integer.parseInt("63", 16); // Bleu

                    // Définir la couleur du texte avec les valeurs RGB calculées
                    contentStream.setNonStrokingColor(red, green, blue);

                    // Écrire un texte à côté du logo
                    contentStream.setFont(PDType1Font.TIMES_ROMAN, 16);
                    contentStream.beginText();
                    contentStream.newLineAtOffset(logoX + logoWidth + 10, logoY + (logoHeight / 2)); // Positionner le texte à côté du logo
                    contentStream.showText("CuraCloud");
                    contentStream.endText();

                    // Position initiale des informations
                    float infoX = logoX + logoWidth + 280;
                    float infoY = logoY ;

                    // Ajouter des informations à droite du logo
                    contentStream.setFont(PDType1Font.TIMES_ROMAN, 14);
                    contentStream.beginText();
                    contentStream.newLineAtOffset(infoX, infoY); // Position des informations

                    // Afficher chaque attribut sur une ligne distincte
                    contentStream.showText("Nom du laboratoire :" + user.getFirst_name() + "  " + user.getLast_name()); // Nom du laboratoire
                    contentStream.newLineAtOffset(0, -20); // Passer à une nouvelle ligne

                    contentStream.showText("Adresse :" + user .getAddress()); // Adresse
                    contentStream.newLineAtOffset(0, -20); // Passer à une nouvelle ligne

                    contentStream.showText("Date :"+ bilan.getSubmission_date()); // Date
                    contentStream.newLineAtOffset(0, -20); // Passer à une nouvelle ligne

                    contentStream.showText("Téléphone :" + user.getPhone_number()); // Numéro de téléphone
                    contentStream.newLineAtOffset(0, -20); // Passer à une nouvelle ligne

                    contentStream.showText("Email :"+ user.getEmail()); // Adresse email
                    contentStream.endText();

                } catch (IOException e) {
                    e.printStackTrace();
                }

                // Définir la couleur en noir pour le texte restant
                contentStream.setNonStrokingColor(0, 0, 0);
                contentStream.setFont(PDType1Font.TIMES_ROMAN, 12);

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 600);
                contentStream.showText("Bilan ID: " + bilan.getId());
                contentStream.newLine();
                contentStream.endText();

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 580);
                contentStream.showText("Result: " + bilan.getResult());
                contentStream.newLine();
                contentStream.endText();

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 560);
                contentStream.showText("Price: " + bilan.getPrice());
                contentStream.newLine();
                contentStream.endText();

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 540);
                contentStream.showText("Realisation Date: " + bilan.getRealisation_date());
                contentStream.newLine();
                contentStream.endText();

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 520);
                contentStream.showText("Submission Date: " + bilan.getSubmission_date());
                contentStream.newLine();
                contentStream.endText();

                contentStream.beginText();
                contentStream.newLineAtOffset(100, 500);
                contentStream.showText("LabComments: " + bilan.getLab_comment());
                contentStream.newLine();
                contentStream.endText();


                contentStream.beginText();
                contentStream.newLineAtOffset(100, 480);
                contentStream.showText("Image: " + bilan.getImagePath());
                contentStream.newLine();
                contentStream.endText();

                contentStream.close();


                document.save("Bilan" + bilan.getId() + ".pdf");
                System.out.println("PDF file created: Bilan" + bilan.getId() + ".pdf");
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
}

