<%--
  Created by IntelliJ IDEA.
  User: o2185673
  Date: 17/01/2022
  Time: 09:59
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Résultats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
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
                <a class="nav-link" href="/Bet">Lancer un Nouveau Pari</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Result">Annoncer un résultat<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <span class="navbar-text">
            Bonjour ${user.getLogin()}
        </span>
    </div>
</nav>

<h1> Historique des matchs : </h1>
</body>
</html>
