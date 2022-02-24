<?php

require_once('controlleur/controleur.php');

try{
    if(isset($_POST['connexion'])){
        $login=$_POST['login'];
        $mdp=$_POST['mdp'];
        MemberConnect($login,$mdp);
    }

    elseif(isset($_POST['supprimer'])){
        $id=$_POST['idmsg'];
        CtlSupprimerMessage($id);
    }

    else {
        CtlAcceuil();
    }

}

catch(Exception $e){
    $msg=$e->getMessage();
    CtlErreur($msg);
}

