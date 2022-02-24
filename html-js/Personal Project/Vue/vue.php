<?php

function afficherInventaire($items){
    $contenu='';
    foreach($items as $ligne){
        $contenu.='<p>'.$ligne->nom.':'.$ligne->msg.'['.$ligne->id.']</p>';    
    }
    require_once('vue/Classes.php');
}

function afficherErreur($erreur){
    $contenu='<p>'.$erreur.'</p> </br> <p><a href="forum.php"/> Revenir au forum </a></p></br>';
    require_once('vue/gabarit.php');
}

