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

            <h3>Problématique</h3>
            <ul>
                <li>Se faire payer!</li>
                <li>Chronophage, source d’erreurs, travail pénible...</li>
            </ul>
            <h4>Le contexte</h4>
            <ul>
                <li>Vente en ligne de marchandise en B2B</li>
                <li>Paiement difcile à obtenir&nbsp;: 60 jours, chèques...</li>
            </ul>
            <h3>Solution</h3>
            <ul>
                <li>Faire des prélèvements SEPA.</li>
            </ul>
            <h4>La mise en place</h4>
            <ul>
                <li>Demander l’accord aux clients</li>
                <li>Tous les mois, faire les prélèvements</li>
                <li>Processus automatisé: tous les 15 jours, création d’un fichier d’ordre de prélèvement bancaire (format xml normé ISO 20022) contenant toutes les commandes dues.Envoyer ce fichier à la banque, soit manuellement via l’interface, soit automatiquement via le protocole EBICS</li>
            </ul>
            <img src="/assets/images/Cas1-illstration-01.png" alt="Impression d'écran de la soluton : la liste des prélèvement SEPA à effectuer" class="align-center">
            <h3>Bilan</h3>
            <ul>
                <li>Pas d’erreur de saisie</li>
                <li>Trésorerie maîtrisé</li>
                <li>Garantie de paiement</li>
                <li>Rien à faire (ou presque)</li>
            </ul>
            <h4>Est-ce vraiment bien d’automatiser&nbsp;?</h4>
            <ul>
                <li>Oui, car le coût humain est élevé</li>
                <li>Oui, car cela réduit le nombre d’erreurs</li>
                <li>Avantage du prélèvement SEPA: vous maximisez les chances d’être payé en temps et en heure.</li>
            </ul>

        </section>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_footer.php') ?>


  </body>
</html>
