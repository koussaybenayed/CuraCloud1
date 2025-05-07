package tn.esprit.services;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;

public class SMS {


    private static final String ACCOUNT_SID = "AC022216070c707bb1ab959f5f57cee7a3";
    private static final String AUTH_TOKEN = "a21ed7d85fedfdc780dc24d20e16e70c";


    private static final String TWILIO_PHONE_NUMBER = "+18507896910";


    public static void sendSMS(String toPhoneNumber, String message) {
        Twilio.init(ACCOUNT_SID, AUTH_TOKEN);


        Message.creator(
                new PhoneNumber(toPhoneNumber),
                new PhoneNumber(TWILIO_PHONE_NUMBER),
                message
        ).create();
    }
}
