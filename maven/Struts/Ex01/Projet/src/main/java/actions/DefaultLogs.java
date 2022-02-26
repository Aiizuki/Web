package actions;

import com.opensymphony.xwork2.ActionSupport;

public class DefaultLogs extends ActionSupport {
    private String username = "Vous n'êtes pas connecté !";
    private String password = "Vous n'êtes pas connecté !";

    public String getUsername() {
        return username;
    }

    public String getPassword() {
        return password;
    }
}
