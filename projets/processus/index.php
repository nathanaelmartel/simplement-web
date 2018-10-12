<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_head.php') ?>
    <title>Tableau de bord de gestion orienté processus - Nathanaël Martel - simplement Web</title>

  </head>
  <body>


    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_header.php') ?>

        <section id="content">

            <h1>Tableau de bord de gestion</h1>
            <h2>Processus</h2>


            <h3>Problématique</h3>
            <ul>
                <li>Se retrouver dans une masse de données</li>
                <li>Avoir les bonnes informations au bon moment </li>
                <li>Extraire les données</li>
                <li>Ne pas oublier quelque chose</li>
            </ul>
            <h4>Le contexte</h4>
            <ul>
                <li>Site de prévente</li>
                <li>Beaucoup de données éparses (les commandes des clients, les tarifs des fournisseurs)</li>
                <li>Au cours de la prévente les questions se posent -Que dois-je commander? (produit, carton...) -Que dois-je envoyer (et à qui)?-Combien d’argent ais-je gagner? -Combien je dois à mes fournisseur?</li>
            </ul>
            <h3>Solutions</h3>
            <ul>
                <li>Mise en place d’un tableau de bord pour chaque prévente</li>
            </ul>
            <h4>La mise en place</h4>
            <ul>
                <li>Récupération des données (via les API de WordPress et Woocommerce)</li>
                <li>Calcul automatique du chifre d’afaire, du poids...du nombre de cartons nécessaire à l’expédition, du nombre de produits à acheter aux fournisseurs, de la marge net </li>
                <li>Affichage de ces informations dans l’ordre du déroulement de la vente</li>
                <li>Création d’étiquette</li>
            </ul>
            <h3>Bilan</h3>
            <ul>
                <li>Réduction des erreurs</li>
                <li>Meilleurs vue d’ensemble</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
