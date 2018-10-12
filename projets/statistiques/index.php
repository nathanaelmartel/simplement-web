<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_head.php') ?>
    <title>Projets - Nathanaël Martel - simplement Web</title>

  </head>
  <body>


    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_header.php') ?>

        <section id="content">

            <h1>Tableau de bord de gestion</h1>
            <h2>Statistiques</h2>

            <h3>Problématique</h3>
            <ul>
                <li>Se retrouver dans une masse de données</li>
                <li>Avoir les bonnes informations au bon moment </li>
                <li>Extraire les données</li>
                <li>Gestion du stock</li>
                <li>Évaluer l’efficacité et identifer les sources d’amélioration</li>
            </ul>
            <h4>Le contexte</h4>
            <ul>
                <li>Gestion de plusieurs restaurants</li>
                <li>Commandes clients par restaurant</li>
                <li>Commandes fournisseurs par restaurant</li>
            </ul>
            <h3>Solution</h3>
            <ul>
                <li>Mise en place d’un tableau de bord</li>
            </ul>
            <h4>La mise en place</h4>
            <ul>
                <li>Outil de commande fournisseurs: suivi des coûts </li>
                <li>Récupération des données des caisses des restaurants (via les API de zelty et innovorder): suivi du chifre d’affaire</li>
                <li>Suivi de charge salariale</li>
                <li>Calcul de ra rentabilité, de la marge: tableau de bord mensuel et hebdomadaire pour suivre l’évolution</li>
            </ul>
            <img src="/assets/images/Cas3-illustration-01.png" alt="Impression d'écran de la soluton : statistiques sur plusieurs mois" class="align-center">
            <h3>Bilan</h3>
            <ul>
                <li>Processus cadré pour les restaurants</li>
                <li>Vue d’ensemble pour la gestion</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
