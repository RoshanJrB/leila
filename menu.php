<?php
  $page = 'menu';

  // Inclure l'entête
  include('inclusions/entete.php');

  // inclure la librairie "citation"
  include('lib/citations.lib.php');

  $citation = citationAleatoire($langueChoisie, 'menu');

  //gestion de l'affichage dynamique du menu
  // etape 1 lire le contenu du fichier dans uen chaine de caractères
  // tester si le fichier existe avant...
  $menuChaine = file_get_contents("data/menu-$langueChoisie.json");

  //étape 2 decoder la chaine JSON pour obtenir un tableau PHP
  $menuTab = json_decode($menuChaine, true);

?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
          <?= $citation['texte']; ?>
          <cite>- <?= $citation['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">
        <!-- Boucle pour générer  dynamiquement les sections du menu -->
        <?php foreach($menuTab as $titre => $platsSection) : ?>
        <section>
          <h2><?= $titre; ?></h2>
          <ul>
            <!-- bouvle pour générer dynamiquement les les plats dans la sectin du menu courant -->
            <?php foreach($platsSection as $plat) : ?>
            <li>
              <span><?= $plat['nom']; ?><br><i><?= $plat['description']; ?></i></span>
              <span class="prix"><i class="article-menu-portion">(2 portions)</i><?= $plat['prix']; ?></span>
            </li>
            <?php endforeach; ?>
            <!-- fin de la boucle des plats d'une section -->
          </ul>
        </section>
        <?php endforeach; ?>
        <!-- fin de la boucle des sections -->

      </div>
    </div>
<?php
  // Inclure le pied de page
  include('inclusions/pied2page.php');
?>