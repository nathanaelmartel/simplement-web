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


            <h3>Les problématiques</h3>
            <ul>
                <li>Un trafic mobile insignifiant</li>
                <li>Une ergonomie difficilement utilisable</li>
                <li>Google pénalise les sites non adapté aux mobiles</li>
            </ul>

            <h3>les solutions</h3>

            <p>Conception de l'interface spécialement pour les mobiles. Par exemple :</p>

            <h4>Laisser le plus de place possible au contenu</h4>

            <figure class="align-center">
                <img src="/assets/images/responsive-menu-1.gif" alt="Menu sur mobile">
                <figcaption>Menu de navigation sur mobile</figcaption>
            </figure>
            <ul>
                <li>Logo plus petit</li>
                <li>Menu de navigation qui apparait sur une action</li>
                <li>Limitation du nombre de boutons fixes et d'éléments affichés</li>
            </ul>

            <h4>Réorganisation des tableaux</h4>
            <ul>
                <li>Regrouper les informations reliées entre elles pour ne pas avoir à faire défiler l'écran</li>
            </ul>

            <div class="flex">
                <figure class="align-center">
                    <img src="/assets/images/responsive-tableau-liste-1.png" alt="Affichage en tableau sur un écran large">
                    <figcaption>Exemple&nbsp;: affichage en tableau sur un écran large</figcaption>
                </figure>
                <figure class="align-center">
                    <img src="/assets/images/responsive-tableau-liste-2.png" alt="Affichage en liste sur un écran étroit">
                    <figcaption>Exemple&nbsp;: affichage en liste sur un écran étroit</figcaption>
                </figure>
            </div>

            <h3>Le bilan</h3>
            <ul>
                <li>Augmentation du trafic mobile sur votre site</li>
                <li>Amélioration de l'engagement des internautes</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
