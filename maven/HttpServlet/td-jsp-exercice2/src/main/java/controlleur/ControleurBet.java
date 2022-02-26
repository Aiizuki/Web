package controlleur;

import facade.FacadeParis;
import facade.FacadeParisStaticImpl;
import facade.exceptions.UtilisateurNonAdminException;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;

public class ControleurBet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {
        String page = "/WEB-INF/pages/NewBet.jsp";
        req.getRequestDispatcher( page ).forward( req, res );
    }

    @Override
    public void doPost (HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        String page = "";

        String Home = req.getParameter("home");
        String Visitor = req.getParameter("visitor");
        String Date = req.getParameter("date");
        String Time = req.getParameter("time");

        LocalDate date = LocalDate.parse(Date);
        LocalTime time = LocalTime.parse(Time);
        LocalDateTime limit  = LocalDateTime.of(date, time);


        FacadeParis back = new FacadeParisStaticImpl();
        try {
            long idMatch = back.ajouterMatch("admin","foot",Home,Visitor,limit);
            System.out.println(idMatch);
        } catch (UtilisateurNonAdminException e) {
            e.printStackTrace();
        }

        page = "/WEB-INF/pages/ConnectedAdmin.jsp";

        req.getRequestDispatcher( page ).forward( req, res );
    }
}
