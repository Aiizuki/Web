package controlleur;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;

public class ControleurResults extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {
        String page = "/WEB-INF/pages/Results.jsp";
        req.getRequestDispatcher( page ).forward( req, res );
    }

    @Override
    public void doPost (HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {

    }
}
