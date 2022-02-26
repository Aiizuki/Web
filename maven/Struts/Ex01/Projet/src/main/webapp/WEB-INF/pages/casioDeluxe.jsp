<%@ taglib prefix="s" uri="/struts-tags" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>

<head>
    <title> Casio deluxe </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .calculette{
            background: darkgray;
        }

        .errorMessage {
            color: red;
            font-size : 12px;
        }

        .card{
            background-color:lightblue;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">GPeM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <s:a class="nav-item nav-link" action="accueil">Acceuil</s:a>
            <s:a class="nav-item nav-link" action="connexionPage">Connexion</s:a>
            <s:a class="nav-item nav-link" action="casioNulle">La casio</s:a>
            <s:a class="nav-item nav-link active" action="casioDeluxe">La Casio Deluxe (WIP) <span class="sr-only">(current)</span></s:a>
        </div>
    </div>
</nav>

<s:form action="calculetteDeluxe" class="calculette">
    <s:textfield class="form-control" name="operande1" label="Entrez la première opérande"/>
    <p> <s:fielderror name="operande1"/> </p>
    <s:textfield class="form-control" name="operande2" label="Entrez la deuxième opérande"/>
    <p> <s:fielderror name="operande2"/> </p>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Type de calcul :</legend>
            <div class="col-sm-10">
                <s:radio list="operators" name="operation"/>

            </div>
        </div>
    </fieldset>
    <s:submit class="btn btn-primary"/>
</s:form>

</body>

</html>