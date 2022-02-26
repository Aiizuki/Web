package controlleur;

import modele.Utilisateur;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.io.IOException;

public class ControleurLogin extends HttpServlet {

    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String login = request.getParameter( "user" );
        String password = request.getParameter( "mdp" );
        if ( login == null ) login = "";
        if ( password == null ) password = "";

        HttpSession session = request.getSession( true );
        session.setAttribute( "login", login );
        session.setAttribute( "password", password );

        request.getRequestDispatcher( "/WEB-INF/pages/Acceuil.jsp" ).forward( request, response );
    }

    @Override
    public void doPost (HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        String[][] users = {{"test","test"}};

        String page = "/WEB-INF/pages/Acceuil.jsp";
        String login = req.getParameter("user");
        String mdp = req.getParameter("mdp");

        HttpSession session = req.getSession( true );
        session.setAttribute( "login", login );
        session.setAttribute( "password", mdp );
        session.setAttribute("AllUsers",users);

        Utilisateur user = new Utilisateur(login,mdp);

        // ajouter le user dans la façade
        // application listener pour le transfert de la façade
        // servlet context listener

        if ( login.equals( "admin" ) && mdp.equals( "admin" ) ) {
            session.setAttribute( "user", user);
            page = "/WEB-INF/pages/ConnectedAdmin.jsp";
        }
        else {
            for(int i=0; i< users.length; i++){
                System.out.println(users[i][0]);
                if(users[i][0].equals(login) && users[i][1].equals(mdp)){
                    session.setAttribute( "user", user);
                    page = "/WEB-INF/pages/Connected.jsp";
                }
            }
    }

        req.getRequestDispatcher( page ).forward( req, res );
    }
}
