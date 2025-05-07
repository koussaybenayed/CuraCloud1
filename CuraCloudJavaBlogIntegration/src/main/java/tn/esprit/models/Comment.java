package tn.esprit.models;

import java.sql.Timestamp;
import java.time.LocalDateTime;

public class Comment {

    private String content;

    private Timestamp submmission_date;

    private int id, blog_id_id,user_id;

    private Blog blog; // Add a field to store the Blog object
    private User user; // Add a field to store the Blog object

    //Constructors


    public Comment(String content, Timestamp submmission_date, int id, int blog_id_id) {
        this.content = content;
        this.submmission_date = submmission_date;
        this.id = id;
        this.blog_id_id = blog_id_id;
    }

    public Comment(String content, Timestamp submmission_date, int blog_id_id) {
        this.content = content;
        this.submmission_date = submmission_date;
        this.blog_id_id = blog_id_id;
    }

    public Comment(String content, Timestamp submmission_date) {
        this.content = content;
        this.submmission_date = submmission_date;
    }

    public Comment(String content, int blog_id_id) {
        this.content = content;
        this.submmission_date = Timestamp.valueOf(LocalDateTime.now());
        this.blog_id_id = blog_id_id;
    }



    public Comment() {
    }

    //Getters


    public String getContent() {
        return content;
    }

    public Timestamp getSubmmission_date() {
        return submmission_date;
    }

    public int getId() {
        return id;
    }

    public int getIdBlog() {
        return blog_id_id;
    }

    public Blog getBlog() {
        return blog;
    }

    public int getUser_id() {
        return user_id;
    }

    public User getUser() {
        return user;
    }

    //Setters


    public void setContent(String content) {
        this.content = content;
    }

    public void setSubmmission_date(Timestamp submmission_date) {
        this.submmission_date = submmission_date;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setIdBlog(int idBlog) {
        this.blog_id_id = idBlog;
    }
    public void setBlog(Blog blog) {
        this.blog = blog;
        if (blog != null) {
            this.blog_id_id = blog.getId();
        } else {
            this.blog_id_id = 0; // or any default value if needed
        }
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }
    public void setUser(User user) {
        this.user = user;
        if (user != null) {
            this.user_id = user.getId();
        } else {
            this.user_id = 0; // or any default value if needed
        }
    }




    @Override
    public String toString() {
        return "Comment{" +
                "content='" + content + '\'' +
                ", submmission_date=" + submmission_date +
                ", id=" + id +
                '}';
    }


}
