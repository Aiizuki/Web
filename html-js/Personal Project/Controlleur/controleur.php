<?php

require_once('modele/modele.php');
require_once('vue/vue.php');

function CtlAcceuil(){
    $items = getItems();
    afficherInventaire($items);
}

function MemberConnect($login,$mdp){
    if(!empty($login) && !empty($mdp) && !empty($msg)){
        ConnectSession($login,$mdp);
        CtlAcceuil();


 
    }

    else{throw new Exception("nom ou message invalide !");}
}

function CtlSupprimerMessage($id){
    if(ctype_digit($id)){
        supprimerMessage($id);
        CtlAcceuil();
    }
    
    else {throw new Exception("id message invalide !");}
}

function CtlErreur($erreur){
    afficherErreur($erreur);
}

