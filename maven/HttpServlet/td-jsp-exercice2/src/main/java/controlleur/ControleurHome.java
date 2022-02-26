package controlleur;


import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.io.IOException;

public class ControleurHome extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {
        String page = "";
        HttpSession session = req.getSession( true );
        if(session.getAttribute("login").equals("admin")){
            page = "/WEB-INF/pages/ConnectedAdmin.jsp";
        }
        String[][] user = (String[][]) session.getAttribute("AllUsers");
        for(int i=0; i< user.length;i++){
            if(user[i][0]==session.getAttribute("login")){
                page="/WEB-INF/pages/Connected.jsp";
            }
        }

        req.getRequestDispatcher( page ).forward( req, res );
    }

    @Override
    public void doPost (HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {

    }
}
