module controllers {
    requires javafx.controls;
    requires javafx.fxml;
    requires java.sql;
    requires com.google.api.client;
    requires google.api.client;
    requires com.google.api.client.extensions.jetty.auth;
    requires com.google.api.client.extensions.java6.auth;
    requires org.apache.commons.codec;
    requires java.datatransfer;
    requires webrtc.java;
    requires org.glassfish.tyrus.server;
    requires javax.websocket.api;
    requires javafx.media;
    requires opencv;
    requires java.desktop;
    requires javafx.swing;
    requires boofcv.io;
    requires boofcv.swing;
    requires webcam.capture;
    requires org.java_websocket;
    requires javafx.web;
    requires org.twitter4j.core;
    requires stripe.java;
    requires org.seleniumhq.selenium.api;
    requires org.seleniumhq.selenium.chrome_driver;
    requires bcrypt;
    requires org.apache.pdfbox;
    requires de.jensd.fx.glyphs.fontawesome;
    requires com.calendarfx.view;
    requires twilio;
    requires com.google.api.client.json.gson;
    requires com.google.api.client.auth;
    requires com.google.api.services.gmail;
    requires mail;
    requires boofcv.feature;
    // ... other dependencies

    opens tn.esprit.controllers to javafx.fxml;
    opens MainFx; // Open the main package to other modules
    exports tn.esprit.controllers;
    exports tn.esprit.controllers.userController;
    exports tn.esprit.controllers.labController;
    exports tn.esprit.controllers.portalController;

    opens tn.esprit.controllers.userController to javafx.fxml;
    opens tn.esprit.controllers.labController to javafx.fxml;
    opens tn.esprit.controllers.portalController to javafx.fxml;
    opens tn.esprit.models to javafx.base; // Open specific packages to modules

}
