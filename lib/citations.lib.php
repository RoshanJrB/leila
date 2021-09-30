<?php
    // librairie de fonction pour gerer les citations

    /**
     * retourne une citation aléatoire
     * 
     * @param string $langue Code de la langue de la citation demandée
     * @param string $page identifiant de la page sur laquelle la citation sera utilisée
     * 
     * @return array tableau associatif contenant une citation ("texte" et "auteur")
     */

    function citationAleatoire($langue, $page){
        $citationTab = json_decode(file_get_contents("data/citations-$page.json"), true);
        // s'il n'y a pas de citation dans la langue spécifiée, utiliser 'fr'
        $citationLangueChoisie = (isset($citationTab[$langue])) ? $citationTab[$langue] : $citationTab['fr'];
        $positionAleatoire = rand(0, count($citationLangueChoisie)- 1);
        return $citation = $citationLangueChoisie[$positionAleatoire];
         
    } 

    // gerer le choix d'une citation aléatoire
    // étape 1 accèder au fichier
    // remarquer l'interpolation de la variable $page
    
    //echo $citationsChaine;

    // etape 2 interprêter "parser" le code json dans la variable citationChaine
    
    //afficher le tableau au complet pour le débogage
    //print_r($citationTab);

    // étape 3 afficher uniquement le tableau des citations dans le langue choisie sur le site
    

    // étape 4 choisir une citation aléatoirement dans celui-ci

    //print_r($citation); 

?>