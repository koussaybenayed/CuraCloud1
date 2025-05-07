package tn.esprit.models;

public class Favorites {
    private Long id;
    private int userId;
    private int blogId;

    public Favorites() {
    }

    public Favorites(Long id, int userId, int blogId) {
        this.id = id;
        this.userId = userId;
        this.blogId = blogId;
    }

    public Favorites(int userId, int blogId) {
        this.userId = userId;
        this.blogId = blogId;
    }

    // Getters and setters

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public int getBlogId() {
        return blogId;
    }

    public void setBlogId(int blogId) {
        this.blogId = blogId;
    }

    @Override
    public String toString() {
        return "Favorites{" +
                "id=" + id +
                ", userId=" + userId +
                ", blogId=" + blogId +
                '}';
    }

}
