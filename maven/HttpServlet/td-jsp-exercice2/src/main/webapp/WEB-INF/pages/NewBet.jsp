<%--
  Created by IntelliJ IDEA.
  User: o2185673
  Date: 17/01/2022
  Time: 09:41
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<jsp:useBean id="user" type="modele.Utilisateur" scope="session"/>
<html>
<head>
    <title>Lancer un nouveau Pari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .submit{padding:5px; margin:5px;}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">WinaMin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Home">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Bet">Lancer un Nouveau Pari<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Result">Annoncer un résultat</a>
            </li>
        </ul>
        <span class="navbar-text">
            Bonjour ${user.getLogin()}
        </span>
    </div>
</nav>

<form action="Bet" method="post">
    <div>
        <h3>Lancer un nouveau pari</h3>
    </div>
    <div>
        <label for="home"> Home : </label>
        <input type="home" name="home" id="home" placeholder="Enter 1st challenger">
    </div>
    <div>
        <label for="visitor"> Visitor : </label>
        <input type="visitor" id="visitor" name="visitor" placeholder="Enter 2nd challenger">
    </div>
    <div>
        <label for="date"> Fin du Pari :</label>
        <input type="date" id="date" name="date">
        <input type="time" id="time" name="time">
    </div>

    <button type="submit" class="submit"> Lancer le pari </button>

</form>

</body>
</html>
