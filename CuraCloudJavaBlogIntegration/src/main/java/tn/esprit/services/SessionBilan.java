package tn.esprit.services;

import java.util.HashMap;
import java.util.Map;

public class SessionBilan {
    private final Map<String, Object> bilanSession;
    private static final SessionBilan instance = new SessionBilan();

    private SessionBilan() {
        bilanSession = new HashMap<>();
    }

    public static synchronized SessionBilan getInstance() {
        return instance;
    }

    public Map<String, Object> getBilanSession() {
        return bilanSession;
    }

    public void logoutBilan() {
        bilanSession.clear();
    }
}
