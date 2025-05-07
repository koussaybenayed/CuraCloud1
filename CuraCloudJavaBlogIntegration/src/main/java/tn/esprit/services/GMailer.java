package tn.esprit.services;

import com.google.api.client.auth.oauth2.Credential;
import com.google.api.client.extensions.java6.auth.oauth2.AuthorizationCodeInstalledApp;
import com.google.api.client.extensions.jetty.auth.oauth2.LocalServerReceiver;
import com.google.api.client.googleapis.auth.oauth2.GoogleAuthorizationCodeFlow;
import com.google.api.client.googleapis.auth.oauth2.GoogleClientSecrets;
import com.google.api.client.googleapis.javanet.GoogleNetHttpTransport;
import com.google.api.client.googleapis.json.GoogleJsonError;
import com.google.api.client.googleapis.json.GoogleJsonResponseException;
import com.google.api.client.http.javanet.NetHttpTransport;
import com.google.api.client.json.gson.GsonFactory;
import com.google.api.client.util.store.FileDataStoreFactory;
import com.google.api.services.gmail.Gmail;
import com.google.api.services.gmail.model.Message;
import org.apache.commons.codec.binary.Base64;

import javax.mail.Session;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import java.io.*;
import java.nio.charset.StandardCharsets;
import java.nio.file.Paths;
import java.util.Objects;
import java.util.Properties;
import java.util.Set;
import java.util.Random;

import static com.google.api.services.gmail.GmailScopes.GMAIL_SEND;
import static javax.mail.Message.RecipientType.TO;

import java.nio.file.Files;

public class GMailer {

    private final Gmail service;

    public GMailer() throws Exception {
        NetHttpTransport httpTransport = GoogleNetHttpTransport.newTrustedTransport();
        GsonFactory jsonFactory = GsonFactory.getDefaultInstance();
        service = new Gmail.Builder(httpTransport, jsonFactory, getCredentials(httpTransport, jsonFactory))
                .setApplicationName("Test Mailer")
                .build();
    }

    private static Credential getCredentials(final NetHttpTransport httpTransport, GsonFactory jsonFactory)
            throws IOException {
        GoogleClientSecrets clientSecrets = GoogleClientSecrets.load(jsonFactory, new InputStreamReader(Objects.requireNonNull(GMailer.class.getResourceAsStream("/json/client_secret_750974091249-upjlql29jhiualqafgbtqnqjhme5nmv9.apps.googleusercontent.com.json"))));

        GoogleAuthorizationCodeFlow flow = new GoogleAuthorizationCodeFlow.Builder(
                httpTransport, jsonFactory, clientSecrets, Set.of(GMAIL_SEND))
                .setDataStoreFactory(new FileDataStoreFactory(Paths.get("tokens").toFile()))
                .setAccessType("offline")
                .build();

        LocalServerReceiver receiver = new LocalServerReceiver.Builder().setPort(8888).build();
        return new AuthorizationCodeInstalledApp(flow, receiver).authorize("user");
    }

    public void sendBanMail(String subject,String receiver) throws Exception {
        Properties props = new Properties();
        Session session = Session.getDefaultInstance(props, null);
        MimeMessage email = new MimeMessage(session);
        InputStream inputStream = getClass().getClassLoader().getResourceAsStream("html/ban.html");
        String htmlContent = new String(inputStream.readAllBytes(), StandardCharsets.UTF_8);
        email.setFrom(new InternetAddress(receiver));
        email.addRecipient(TO, new InternetAddress(receiver));
        email.setSubject(subject);
        email.setContent(htmlContent, "text/html; charset=utf-8");

        ByteArrayOutputStream buffer = new ByteArrayOutputStream();
        email.writeTo(buffer);
        byte[] rawMessageBytes = buffer.toByteArray();
        String encodedEmail = Base64.encodeBase64URLSafeString(rawMessageBytes);
        Message msg = new Message();
        msg.setRaw(encodedEmail);

        try {
            msg = service.users().messages().send("me", msg).execute();
            System.out.println("Message id: " + msg.getId());
            System.out.println(msg.toPrettyString());
        } catch (GoogleJsonResponseException e) {
            GoogleJsonError error = e.getDetails();
            if (error.getCode() == 403) {
                System.err.println("Unable to send message: " + e.getDetails());
            } else {
                throw e;
            }
        }
    }
    // Method to generate random code
    public String generateRandomCode(int length) {
        StringBuilder sb = new StringBuilder(length);
        Random random = new Random();
        for (int i = 0; i < length; i++) {
            sb.append(random.nextInt(10));
        }
        return sb.toString();
    }

    public String sendForgetMail(String subject, String receiver) throws Exception {
        // Generate random 6-digit code
        String randomCode = generateRandomCode(6);
        Properties props = new Properties();
        Session session = Session.getDefaultInstance(props, null);
        MimeMessage email = new MimeMessage(session);
        InputStream inputStream = getClass().getResourceAsStream("/html/forget.html");

        if (inputStream != null) {
            String htmlContent = new String(inputStream.readAllBytes(), StandardCharsets.UTF_8);

            // Insert random code into HTML content
            htmlContent = htmlContent.replace("{{RANDOM_CODE}}", randomCode);

            email.setFrom(new InternetAddress(receiver));
            email.addRecipient(TO, new InternetAddress(receiver));
            email.setSubject(subject);
            email.setContent(htmlContent, "text/html; charset=utf-8");

            ByteArrayOutputStream buffer = new ByteArrayOutputStream();
            email.writeTo(buffer);
            byte[] rawMessageBytes = buffer.toByteArray();
            String encodedEmail = Base64.encodeBase64URLSafeString(rawMessageBytes);
            Message msg = new Message();
            msg.setRaw(encodedEmail);

            try {
                msg = service.users().messages().send("me", msg).execute();
                System.out.println("Message id: " + msg.getId());
                System.out.println(msg.toPrettyString());
            } catch (GoogleJsonResponseException e) {
                GoogleJsonError error = e.getDetails();
                if (error.getCode() == 403) {
                    System.err.println("Unable to send message: " + e.getDetails());
                } else {
                    throw e;
                }
            }
        } else {
            System.err.println("InputStream is null. Check resource path and availability.");
            throw new IOException("InputStream is null");
        }
        return randomCode;
    }



    public void sendInfoMail(String subject,String receiver) throws Exception {
        Properties props = new Properties();
        Session session = Session.getDefaultInstance(props, null);
        MimeMessage email = new MimeMessage(session);
        InputStream inputStream = getClass().getResourceAsStream("/html/LinkPDF.html");
        String htmlContent = new String(inputStream.readAllBytes(), StandardCharsets.UTF_8);
        email.setFrom(new InternetAddress(receiver));
        email.addRecipient(TO, new InternetAddress(receiver));
        email.setSubject(subject);
        email.setContent(htmlContent, "text/html; charset=utf-8");

        ByteArrayOutputStream buffer = new ByteArrayOutputStream();
        email.writeTo(buffer);
        byte[] rawMessageBytes = buffer.toByteArray();
        String encodedEmail = Base64.encodeBase64URLSafeString(rawMessageBytes);
        Message msg = new Message();
        msg.setRaw(encodedEmail);

        try {
            msg = service.users().messages().send("me", msg).execute();
            System.out.println("Message id: " + msg.getId());
            System.out.println(msg.toPrettyString());
        } catch (GoogleJsonResponseException e) {
            GoogleJsonError error = e.getDetails();
            if (error.getCode() == 403) {
                System.err.println("Unable to send message: " + e.getDetails());
            } else {
                throw e;
            }
        }
    }


}