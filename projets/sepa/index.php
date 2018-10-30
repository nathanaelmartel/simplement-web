<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_head.php') ?>
    <title>Projets - Nathanaël Martel - simplement Web</title>

  </head>
  <body>


    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_header.php') ?>

        <section id="content">

            <h1>Automatisation de processus</h1>
            <h2>Prélèvement SEPA</h2>

            <h3>La problématique</h3>
            <ul>
                <li>Se faire payer&nbsp;!</li>
                <li>Tâches chronophage, répétitive, source d’erreurs, travail pénible...</li>
            </ul>
            <h4>Le contexte</h4>
            <ul>
                <li>Un outil de vente en ligne de marchandise en B2B</li>
                <li>Des paiements difcile à obtenir&nbsp;: 60 jours, chèques...</li>
            </ul>
            <h3>La solution</h3>
            <ul>
                <li>Faire des prélèvements SEPA.</li>
                <li>Automatiser la gestion des paiements</li>
            </ul>
            <h4>La mise en place</h4>
            <ul>
                <li>Demander l’accord aux clients</li>
                <li>Tous les mois, faire les prélèvements</li>
                <li>Processus automatisé: tous les 15 jours, création d’un fichier d’ordre de prélèvement bancaire (format xml normé ISO 20022) contenant toutes les commandes dues. Envoyer ce fichier à la banque, soit manuellement via l’interface, soit automatiquement via le protocole EBICS</li>
            </ul>
            <img src="/assets/images/Cas1-illstration-01.png" alt="Impression d'écran de la soluton : la liste des prélèvement SEPA à effectuer" class="align-center">
            <h3>Le bilan</h3>
            <ul>
                <li>Plus d’erreur de saisie</li>
                <li>Des paiements qui arrivent en temps et heure, et donc une trésorerie maîtrisé</li>
                <li>Une quasi-garantie de paiement et par consséquence un risque financier moindre</li>
                <li>La réduction du travail à réaliser&nbsp;: Il n'y a presque plus rien à faire</li>
            </ul>
            <h4>Est-ce vraiment bien d’automatiser&nbsp;?</h4>
            <ul>
                <li>Oui&nbsp;: le coût humain est élevé</li>
                <li>Oui&nbsp;: cela réduit le nombre d’erreurs</li>
                <li>Avantage du prélèvement SEPA: vous maximisez les chances d’être payé en temps et en heure.</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
