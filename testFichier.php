<?php
    //exemple d'acces au système de fichier
    // lecture du contenu d'un dossier
    $contenuTextes = scandir('textes');
    // afficher le tableau obtenu
    print_r($contenuTextes);

    //parcourir le tableau obtenue et afficher les noms de dossiers réels
    for($i = 0; $i < count($contenuTextes); $i++){

        // considère seulement les dossiers réels
        if($contenuTextes[$i] != '.' && $contenuTextes[$i] != '..') {
            echo $contenuTextes[$i]."<hr>";
        }
        
    }

?>