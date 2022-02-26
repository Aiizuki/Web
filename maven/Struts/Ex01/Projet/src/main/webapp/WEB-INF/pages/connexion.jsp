<%@ taglib prefix="s" uri="/struts-tags" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>

<head>
    <title> <s:text name="connexion.titre"/> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html,body{
            background-image: url('https://www.seekpng.com/png/full/178-1786533_did-sombody-say-pingu-noot-noot-transparent.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        .container{
            height: 100%;
            align-content: center;
        }

        .card{
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }

        .card-header h3{
            color: white;
        }

        .input-group-prepend span{
            width: 50px;
            background-image : url("https://webmail.partage.renater.fr/service/home/~/?auth=co&loc=fr&id=9613&part=2.2");
            color: black;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember input
        {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color: white;
        }

        .links{
            color: white;
        }

        .links a{
            margin-left: 4px;
        }

        .errorMessage {
            color: red;
            font-size : 12px;
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
            <s:a class="nav-item nav-link active" action="connexionPage">Connexion<span class="sr-only">(current)</span></s:a>
            <s:a class="nav-item nav-link" action="casioNulle">La casio</s:a>
            <s:a class="nav-item nav-link" action="casioDeluxe">La Casio Deluxe</s:a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Connexion</h3>
            </div>
            <div class="card-body">
                <form action="connexion" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="username" type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input name="password" type="password" class="form-control" placeholder="password">
                    </div>
                    <p> <s:fielderror name="username"/> </p>
                    <div class="form-group">
                        <input type="submit" value="Connexion" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Pas de compte ? Bah c'est padbol
                </div>
                <div class="d-flex justify-content-center">
                    <s:a action="forgotPWD">Mot de passe oublié ?</s:a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


</html>