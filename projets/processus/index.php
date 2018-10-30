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

            <h3>La problématique</h3>
            <ul>
                <li>Se retrouver dans une masse de données (tarifs fournisseurs, commandes clients…)</li>
                <li>Avoir les bonnes informations au bon moment </li>
                <li>Extraire les données de sources différentes</li>
                <li>Rappeller les étapes</li>
            </ul>
            <h4>Le contexte</h4>
            <ul>
                <li>Site de prévente</li>
                <li>Beaucoup de données éparses (les commandes des clients, les tarifs des fournisseurs)</li>
                <li>Aux différentes étapes de la prévente des questions se posent&nbsp;
                    <ul>
                        <li>Que faut-il commander&nbsp;? (produits, emballages…)</li>
                        <li>Que faut-il expédier&nbsp;? À quelle adresse&nbsp;? Via quel transporteur&nbsp;?</li>
                        <li>Combien l'entreprise a-t-elle gagné&nbsp;?</li>
                        <li>Combien l'entreprise doit-elle à ses fournisseurs&nbsp;?</li>
                    </ul>
                </li>
            </ul>
            <h3>La solution</h3>
            <p>Un tableau de bord pour chaque prévente.</p>
            <h4>La mise en place</h4>
            <ul>
                <li>Récupération des données (via les API de WordPress et WooCommerce)</li>
                <li>Calcul automatique du chiffre d’affaires, du poids... du nombre de cartons nécessaires à l’expédition, du nombre de produits à acheter aux fournisseurs, de la marge nette… </li>
                <li>Affichage de ces informations, par étapes, dans l’ordre du déroulement de la vente</li>
                <li>Création d’étiquettes</li>
            </ul>
            <h3>Le bilan</h3>
            <ul>
                <li>Le processus bien cadré et la visualisation des données de manière appropriée permet la réduction des erreurs</li>
                <li>L'entreprise possède une meilleure visibilité de son fonctionnement global et de sa rentabilité</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
