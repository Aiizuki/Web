package actions;

import com.opensymphony.xwork2.ActionSupport;
import modele.CalculatriceDynamiqueDuFutur;
import modele.CalculatriceDynamiqueDuFuturImpl;

import java.util.Collection;


public class CalculetteDeluxe extends ActionSupport {
    private double operande1;
    private double operande2;
    private String operation;
    private double result;
    private Collection<String> operators;

    CalculatriceDynamiqueDuFutur Calculette = new CalculatriceDynamiqueDuFuturImpl();

    public double getOperande1() {
        return operande1;
    }

    public double getOperande2() {
        return operande2;
    }

    public String getType() {
        return operation;
    }

    public double getResult() {
        return result;
    }

    public Collection<String> getOperators() {
            return Calculette.getOperations();
    }

    public void setOperande1(double operande1) {
        this.operande1 = operande1;
    }

    public void setOperande2(double operande2) {
        this.operande2 = operande2;
    }

    public void setOperation(String type) {
        this.operation = type;
    }

    public String execute(){
        return SUCCESS;

    }

    public String parDefaut(){
        return SUCCESS;
    }

    @Override
    public void validate() {
        super.validate();
    }
}
