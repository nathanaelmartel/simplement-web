<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_head.php') ?>
    <title>Responsive - Nathanaël Martel - simplement Web</title>

  </head>
  <body>


    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_header.php') ?>

        <section id="content">

            <h1>Responsive</h1>
            <h2>Mobile, tablette</h2>


            <h3>Problématique</h3>
            <ul>
                <li>Un trafic mobile ridicule</li>
                <li>Une ergonomie difcilement utilisable</li>
                <li>Pénalité googleLe contexte</li>
                <li>Cas1&nbsp;: magazine en ligne</li>
                <li>Cas2&nbsp;: site vitrine, présentation des tarifs</li>
            </ul>

            <h3>Solutions</h3>
            <ul>
                <li>Redesign de la partie mobile </li>
            </ul>

            <h4>Laisser plus de place possible au contenu</h4>

            <figure class="align-center">
                <img src="/assets/images/responsive-menu-1.gif" alt="Menu sur mobile">
                <figcaption>Menu sur mobile</figcaption>
            </figure>
            <ul>
                <li>Logo plus petit</li>
                <li>Menu qui apparait sur une action</li>
                <li>Limiter le nombre de bouton fixe</li>
            </ul>

            <h4>Réorganiser les tableaux</h4>
            <ul>
                <li>Regrouper les informations relié entre elle pour ne pas avoir à faire défiler l'écran</li>
            </ul>

            <div class="flex">
                <figure class="align-center">
                    <img src="/assets/images/responsive-tableau-liste-1.png" alt="Affichage en tableau sur un écran large">
                    <figcaption>Affichage en tableau sur un écran large</figcaption>
                </figure>
                <figure class="align-center">
                    <img src="/assets/images/responsive-tableau-liste-2.png" alt="Affichage en liste sur un écran étroit">
                    <figcaption>Affichage en liste sur un écran étroit</figcaption>
                </figure>
            </div>

            <h3>Bilan</h3>
            <ul>
                <li>Augmentation du trafic mobile</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
