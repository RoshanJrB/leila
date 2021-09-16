<?php

    // META
    /*$titreAccueil = "accueil";
    $titreMenu = "menu";
    $titreVins = "ac";
    */

    //2e essai
    /*$titres = [];
    array_push($titres, "Accueil");
    array_push($titres, "Menu");
    array_push($titres, "Carte Des Vins");
    */

    // troisiem et dernier essai (à retenir)
    // remplacer le tableau postionnel à un tableau associatif
    /*$titres = [
        "accueil" => "Accueil",
        "menu" => "Menu",
        "vins" => "Carte Des Vins"
    ];*/
    
    $meta = [
        "accueil" => [
                        "titre" => "Bienvenue", 
                        "desc"  => "Restaurant Leila - Montréal",
                        "h1"    => "leila"
                     ],

        "menu"    => [
                        "titre" => "Nos menus", 
                        "desc"  => "Menu du restaurant Leila à Montréal.",
                        "h1"    => "menu"
                     ],

        "vins"    => [
                        "titre" => "Cartes des vins", 
                        "desc"  => "Carte des vins du restaurant Leila à Montréal",
                        "h1"    => "vins"
                     ]
    ];

    //texte statique du restaurant Leila.
    
    //header (entête)
    $en_sousTitre = "CUISINE BISTRONOMIQUE";
    $en_heuresOuverture = "Ouvert aujourd'hui jusqu'à 23 h";
    $en_adresse = "275 rue Notre-Dame Est, Montréal, Québec";
    $en_telephone = "(514) 958-2580";

    
    //entete navigation principale

    $en_altMenu = "Les menus";
    $en_altVins = "Carte des vins";
    $en_altHoraire = "Réservation en ligne - à venir";


    //pied de page

    $pp_infoTitre = "Info pratique";
    $pp_heuresOuverture1 = "Cuisine ouverte de 11 h à 22 h.";
    $pp_heuresOuverture2 = "Fermé le lundi.";
    $pp_etiquetteReservation = "Pour réservation : ";
    $pp_telephone = "(514) 958-2580";
    $pp_titreGoogleMap = "Cliquez ici pour localiser le restaurant sur Google Maps";


    //page d'accueil

    $ac_titrePage = "Cuisine créative de saison";
    


?>