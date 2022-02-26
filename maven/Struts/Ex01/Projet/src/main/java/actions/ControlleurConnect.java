package actions;

import com.opensymphony.xwork2.ActionSupport;

public class ControlleurConnect extends ActionSupport {
    private String username;
    private String password;
    private String[][] database = {{"test","test"}};

    public String getUsername() {
        return username;
    }

    public String getPassword() {
        return password;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String execute() throws Exception{
        for(int i=0; i< this.database.length;i++){
            if(this.database[i][0].equals(username) && this.database[i][1].equals(password)) {
                return SUCCESS;
            }
        }
        addFieldError("username", "Username or Password incorrect !");
        return INPUT;
    }
}
