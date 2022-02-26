package actions;

import com.opensymphony.xwork2.ActionSupport;

public class CalculetteNulle extends ActionSupport {
    private String operande1;
    private String operande2;
    private String type;
    private String result;

    public String getOperande1() {
        return operande1;
    }

    public String getOperande2() {
        return operande2;
    }

    public String getType() {
        return type;
    }

    public String getResult() {
        return result;
    }

    public void setOperande1(String operande1) {
        this.operande1 = operande1;
    }

    public void setOperande2(String operande2) {
        this.operande2 = operande2;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String execute() {
        if (operande1.matches("-?\\d+") && operande2.matches("-?\\d+")) {
            if (type.equals("add")) {
                result = String.valueOf(Integer.parseInt(operande1) + Integer.parseInt(operande2));
            }
            else if (type.equals("sou")) {
                result = String.valueOf(Integer.parseInt(operande1) - Integer.parseInt(operande2));
            }
            else if (type.equals("mul")) {
                result = String.valueOf(Integer.parseInt(operande1) * Integer.parseInt(operande2));
            }
            else if(type.equals("div")){
                result = String.valueOf(Integer.parseInt(operande1) / Integer.parseInt(operande2));
            }

            return SUCCESS;
        }

        else {
            if (operande1.matches("-?\\d+") == false) {
                addFieldError("operande1", "opérande incorrecte !");
            } else {
                addFieldError("operande2", "opérande incorrecte !");
            }

            return INPUT;
        }
    }
}
