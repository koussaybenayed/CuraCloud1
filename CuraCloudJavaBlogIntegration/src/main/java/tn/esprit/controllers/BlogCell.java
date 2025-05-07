package tn.esprit.controllers;

import javafx.geometry.Pos;
import javafx.scene.control.Label;
import javafx.scene.control.ListCell;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import tn.esprit.models.Blog;




public class BlogCell extends VBox {
    private static final int MAX_CONTENT_LENGTH = 30;
    private Blog blog;

    public BlogCell(Blog blog) {
        this.blog = blog;

        setSpacing(10); // Set spacing between elements in the VBox

        Label titleLabel = new Label(blog.getTitle());
        titleLabel.getStyleClass().add("blog-title"); // Apply CSS style to the title label

        Label contentLabel = new Label(truncateContent(blog.getContent()));
        contentLabel.getStyleClass().add("blog-content"); // Apply CSS style to the content label

        Label dateLabel = new Label("Date: " + blog.getSubmmission_date().toString());
        dateLabel.getStyleClass().add("blog-date"); // Apply CSS style to the date label

        getChildren().addAll(titleLabel, contentLabel, dateLabel);

        // Set mouse click event on the cell
        setOnMouseClicked(this::handleMouseClicked);
    }

    private String truncateContent(String content) {
        if (content.length() > MAX_CONTENT_LENGTH) {
            return content.substring(0, MAX_CONTENT_LENGTH) + "...";
        } else {
            return content;
        }
    }

    private void handleMouseClicked(MouseEvent event) {
        // Open the blog details or perform any action on cell click
        System.out.println("Clicked blog: " + blog.getTitle());
        // You can add code here to open the detailed view of the blog
    }
}
