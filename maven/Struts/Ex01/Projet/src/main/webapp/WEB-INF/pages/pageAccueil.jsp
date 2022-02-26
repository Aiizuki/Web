<%@ taglib prefix="s" uri="/struts-tags" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://www.nicepng.com/png/full/43-435515_noot-noot-pingu-render-pingu-noot-noot-png.png");
        }

        .card{
            margin: 0 auto;
            width: 100px;

        }
    </style>
    <title><s:text name="pageAccueil.titre"/></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">GPeM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <s:a class="nav-item nav-link active" action="accueil">Acceuil <span class="sr-only">(current)</span></s:a>
            <s:a class="nav-item nav-link" action="connexionPage">Connexion</s:a>
            <s:a class="nav-item nav-link" action="casioNulle">La casio</s:a>
            <s:a class="nav-item nav-link" action="casioDeluxe">La Casio Deluxe (WIP)</s:a>
        </div>
    </div>
</nav>

<div class="card" style="width: 18rem;">
    <img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5IfpkdeNuSaGmKIzaVffeUcWQSRIsJ1-O67S43Op3jli6n00OnWQqAzxeFvIkw6PFaPk&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-text">Votre username :</h4><input class="form-control" type="text" placeholder="<s:property value="username"></s:property>" readonly>
        <h4 class="card-text">Votre mot de passe :</h4><input class="form-control" type="text" placeholder="<s:property value="password"></s:property>" readonly>
    </div>
</div>

</body>
</html>