<?php
    //exemple d'acces au système de fichier
    // lecture du contenu d'un dossier
    $contenuLeila = scandir('images/iu');
    // afficher le tableau obtenu
    print_r($contenuLeila);

?>