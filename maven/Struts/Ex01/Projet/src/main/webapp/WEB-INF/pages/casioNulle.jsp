<%@ taglib prefix="s" uri="/struts-tags" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>

<head>
    <title> Casio pour les nuls </title>
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
            <s:a class="nav-item nav-link active" action="casioNulle">La casio<span class="sr-only">(current)</span></s:a>
            <s:a class="nav-item nav-link" action="casioDeluxe">La Casio Deluxe (WIP)</s:a>
        </div>
    </div>
</nav>

<p> cette casion est vraiment nulle, alors n'hésitez pas à acheter notre version deluxe pour seulement 999 BTC !</p>
<s:form action="calculetteNulle" class="calculette">
    <s:textfield class="form-control" name="operande1" label="Entrez la première opérande"/>
    <p> <s:fielderror name="operande1"/> </p>
    <s:textfield class="form-control" name="operande2" label="Entrez la deuxième opérande"/>
    <p> <s:fielderror name="operande2"/> </p>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Type de calcul :</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="add" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Addition
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="sou">
                    <label class="form-check-label" for="gridRadios2">
                        Soustraction
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="type" id="gridRadios3" value="mul">
                    <label class="form-check-label" for="gridRadios3">
                        Multiplication
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="type" id="gridRadios4" value="div">
                    <label class="form-check-label" for="gridRadios4">
                        Division (Entière)
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="type" id="gridRadios5" value="divN" disabled>
                    <label class="form-check-label" for="gridRadios5">
                        Division (WIP)
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <s:submit class="btn btn-primary"/>
</s:form>


<div class="card" style="width: 18rem;">
    <img src= "https://makeameme.org/media/templates/250/roll-safe-black-guy-pointing-at-his-head-.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-text">Résultat :</h4><input class="form-control" type="text" placeholder="<s:property value="result"></s:property>" readonly>
    </div>
</div>

</body>

</html>