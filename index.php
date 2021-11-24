<?php
/*Controleur frontal*/ 

//Chargement des dépendances
/* Ici tu mets ton require_once "config.php" pour la configuration. */

// Pour se connecter à une base de données,c'est ici

// Routeur

if(!isset($_GET['pg'])){
    // chargement de l'Accueil

    include_once "PUBLIC_PAGES/Accueil.php";
}else{
    switch($_GET['pg']){
        case "Liens":
            include_once "PUBLIC_PAGES/Liens.php";
            break;
        case "Contact":
            include_once "PUBLIC_PAGES/Contact.php";
            break;
        case "CV":
            include_once "PUBLIC_PAGES/CV.php";
            break;
        case "Gallerie":
            include_once "PUBLIC_PAGES/Gallerie.php";
            break;
        case "Tuto":
            include_once "PUBLIC_PAGES/Tuto.php";
            break;
        case "Admin":
            include_once "PUBLIC_PAGES/Admin.php";
            break;

    default:
        include_once "PUBLIC_PAGES/Accueil.php";
        

    }
}

   