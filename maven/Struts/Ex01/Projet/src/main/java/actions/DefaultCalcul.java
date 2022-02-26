package actions;

import com.opensymphony.xwork2.ActionSupport;

public class DefaultCalcul extends ActionSupport {
    private String result = "";

    public String getResult() {
        return result;
    }

    public void setResult(String result) {
        this.result = result;
    }
}
