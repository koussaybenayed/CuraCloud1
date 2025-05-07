package tn.esprit.models;


import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.List;

public class Blog {
    private String content, subject, title, image;

    private Timestamp submmission_date;

    private int id,author_id;

    //Relations / jointure

    private List<Comment> comments = new ArrayList();


    public Blog(String content, String subject, String title, String image, Timestamp submmission_date, int id) {
        this.content = content;
        this.subject = subject;
        this.title = title;
        this.image = image;
        this.submmission_date = submmission_date;
        this.id = id;
    }


    public Blog(String content, String subject, String title, String image) {
        this.content = content;
        this.subject = subject;
        this.title = title;
        this.image = image;
    }

    public Blog(String content, String subject, String title, String image, Timestamp submmission_date) {
        this.content = content;
        this.subject = subject;
        this.title = title;
        this.image = image;
        this.submmission_date = submmission_date;
    }

    public Blog() {
    }

    public String getContent() {
        return content;
    }

    public void setContent(String content) {
        this.content = content;
    }

    public String getSubject() {
        return subject;
    }

    public void setSubject(String subject) {
        this.subject = subject;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public Timestamp getSubmmission_date() {
        return submmission_date;
    }

    public void setSubmmission_date(Timestamp submmission_date) {
        this.submmission_date = submmission_date;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public List<Comment> getComments() {
        return comments;
    }

    public void setComments(List<Comment> comments) {
        this.comments = comments;
    }

    public int getAuthorId() {
        return author_id;
    }

    public void setAuthorId(int author_id) {
        this.author_id = author_id;
    }

    @Override
    public String toString() {
        return "Blog{" +
                "content='" + content + '\'' +
                ", subject='" + subject + '\'' +
                ", title='" + title + '\'' +
                ", image='" + image + '\'' +
                ", submmission_date=" + submmission_date +
                ", id=" + id +
                '}';
    }
}
