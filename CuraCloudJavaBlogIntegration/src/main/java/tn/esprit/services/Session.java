package tn.esprit.services;

import java.util.HashMap;
import java.util.Map;

public class Session {
    private final Map<String, Object> userSession;
    private static final Session instance = new Session();

    private Session() {
        userSession = new HashMap<>();
    }

    public static synchronized Session getInstance() {
        return instance;
    }

    public Map<String, Object> getUserSession() {
        return userSession;
    }

    public void logoutUser() {
        userSession.clear();
    }


}
