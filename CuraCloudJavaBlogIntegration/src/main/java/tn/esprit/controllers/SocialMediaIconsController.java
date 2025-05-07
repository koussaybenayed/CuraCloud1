package tn.esprit.controllers;

import javafx.event.ActionEvent;

import java.awt.*;
import java.io.*;
import java.net.*;
import java.nio.file.Files;
import java.util.Base64;
import java.util.UUID;

public class SocialMediaIconsController {

    private String title;
    private String subject;
    private String content;
    private byte[] imageData;
    private String ImagePath;

    public void setTitle(String title) {
        this.title = title;
        System.out.println("Title set to: " + title); // Add this line for debugging
    }

    public void setSubject(String subject) {
        this.subject = subject;
        System.out.println("Subject set to: " + subject); // Add this line for debugging
    }

    public void setContent(String content) {
        this.content = content;
        System.out.println("Content set to: " + content); // Add this line for debugging
    }

    public void setImageString(String imagePath) {
        this.ImagePath = "images/" + imagePath;
        System.out.println("ImagePath set to: " + ImagePath); // Add this line for debugging
    }

    public void setImageData(byte[] imageData) {
        this.imageData = imageData;
        System.out.println("Image data set."); // Add this line for debugging
    }




    public void shareOnReddit(ActionEvent actionEvent) {
        try {
            // Encode the title, subject, and content for the Reddit share URL
            String encodedTitle = URLEncoder.encode(title, "UTF-8");
            String encodedSubject = URLEncoder.encode(subject, "UTF-8");
            String encodedContent = URLEncoder.encode(content, "UTF-8");

            // Construct the Reddit share URL with the encoded title, subject, and content
            String redditShareUrl = "https://www.reddit.com/submit?url=" +
                    URLEncoder.encode("https://your-website.com/your-post-url", "UTF-8") +
                    "&title=" + encodedTitle +
                    "&text=" + encodedSubject + "%0A" + encodedContent; // %0A is the newline character

            // Open the Reddit share URL in a browser
            openWebpage(redditShareUrl);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public void shareOnFacebook(ActionEvent actionEvent) {
        try {
            // Compose the post message
            String postMessage = "Check out this awesome blog post:\n" +
                    title + "\n" +
                    subject + "\n" +
                    content;

            // Encode the message for the Facebook URL
            String encodedMessage = URLEncoder.encode(postMessage, "UTF-8");

            // Construct the Facebook share URL
            String facebookShareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodedMessage;

            // Open the Facebook share URL in the default browser
            Desktop.getDesktop().browse(new URI(facebookShareUrl));
        } catch (Exception e) {
            // Handle the exception gracefully (e.g., show an error message to the user)
            e.printStackTrace();
        }
    }

    public void shareOnTwitter() {
        try {
            if (ImagePath != null && !ImagePath.isEmpty()) {
                // Read the image file
                File imageFile = new File(ImagePath);
                byte[] imageData = Files.readAllBytes(imageFile.toPath());

                // Encode the image data in base64
                String imageDataBase64 = Base64.getEncoder().encodeToString(imageData);

                // Upload the image to a file hosting service or your server
                String imageUrl = uploadImageToHostingService(imageDataBase64);

                if (imageUrl != null) {
                    // Compose the tweet message with the image link
                    String text = "Check out this awesome blog post: \n " + title + " \n " + subject + "\n" + content;
                    String encodedText = URLEncoder.encode(text, "UTF-8");

                    // Construct the tweet URL with the encoded message
                    String tweetUrl = "https://twitter.com/intent/tweet?text=" + encodedText;
                    URI uri = new URI(tweetUrl);
                    openWebpage(uri.toString()); // Open the URI in a browser
                } else {
                    System.out.println("Failed to upload image. Cannot share on Twitter.");
                }
            } else {
                System.out.println("Image path is null or empty. Cannot share on Twitter.");
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private String uploadImageToHostingService(String imageDataBase64) {
        // Placeholder logic to simulate image upload and return image URL
        try {
            // Decode the base64-encoded image data
            byte[] imageData = Base64.getDecoder().decode(imageDataBase64);

            // Simulate uploading the image to a hosting service
            // In a real application, this would involve calling the hosting service's API
            // Here, we'll just create a dummy image URL for demonstration purposes
            String imageUrl = "https://example.com/uploads/" + UUID.randomUUID().toString() + ".png";

            // Simulate a successful upload
            System.out.println("Image uploaded successfully to: " + imageUrl);
            return imageUrl;
        } catch (Exception e) {
            e.printStackTrace();
            // Simulate upload failure
            System.err.println("Failed to upload image.");
            return null;
        }
    }




    private String uploadImageToTwitter() throws IOException {
        // Twitter API endpoint for media uploads
        String mediaUploadUrl = "https://upload.twitter.com/1.1/media/upload.json";

        // Encode the image data in base64
        String imageDataBase64 = Base64.getEncoder().encodeToString(imageData);

        // Construct the POST request to upload the image
        URL url = new URL(mediaUploadUrl);
        HttpURLConnection connection = (HttpURLConnection) url.openConnection();
        connection.setRequestMethod("POST");
        connection.setDoOutput(true);
        connection.setRequestProperty("Authorization", "Bearer <1787194851118710784-TzYw1cGX7n4sUqTlR2IP6p41FV0LlM>");
        connection.setRequestProperty("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");

        // Construct the request body with the base64-encoded image data
        String requestBody = "media_data=" + URLEncoder.encode(imageDataBase64, "UTF-8");
        OutputStream outputStream = connection.getOutputStream();
        outputStream.write(requestBody.getBytes());
        outputStream.flush();

        // Get the response from Twitter API
        InputStream inputStream = connection.getInputStream();
        BufferedReader reader = new BufferedReader(new InputStreamReader(inputStream));
        StringBuilder response = new StringBuilder();
        String line;
        while ((line = reader.readLine()) != null) {
            response.append(line);
        }
        reader.close();

        // Parse the response to get the media ID
        // This part depends on the JSON structure of the Twitter API response
        // Extract the media ID from the response JSON

        return "<media_id_from_response>"; // Replace this with the actual media ID from Twitter
    }

    private void openWebpage(String url) {
        try {
            Desktop.getDesktop().browse(new URI(url));
        } catch (IOException | URISyntaxException e) {
            e.printStackTrace();
        }
    }



}
