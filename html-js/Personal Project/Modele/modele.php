<?php

function getConnect(){
    $conn=new PDO('mysql:host='.'localhost'.';dbname='.'rp','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->query('SET NAMES UTF8');
    return $conn;
}

function getItems(){
    $conn=getConnect();
    getJoueur();
    $requete = "select * from itemconso, itemfixe where Proprio=$resultat";
    $resultat=$conn->query($requete);
    $resultat->closeCursor();
}

function ConnectSession($login,$mdp){
    $conn=getConnect();
    $stmt = $conn->prepare("select * from compte where Login=?");
    $stmt2 = $conn->prepare("select * from compte where Mdp=?");
    $stmt->execute([$login]);
    $stmt2->execute([$mdp]);
    $user = $stmt->fetch();
    $pass = $stmt2->fetch();
    if($user && $pass){
        session_start();
        $_SESSION['id'] = $user['idCompte'];
        $_SESSION['pseudo'] = $user
    }

    else {echo "identifiants incorrects, vérifiez votre login et votre mot de passe"}
}

function getJoueur(){
    $conn=getConnect();
    if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])){
        $requete="select idJoueur from joueur where Proprio=$_SESSION['id']";
        $joueur=$conn->query($requete);
        return $joueur;
    }
    
    else {echo "Vous n'êtes pas connecté !"}
}