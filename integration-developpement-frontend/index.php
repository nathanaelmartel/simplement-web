<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Intégration &amp; Développement Web Front End - simplement Web" />
<meta name="robots" content="index, follow" />
    <title>Intégration &amp; Développement Web Front End - simplement Web</title>

    <link rel="stylesheet" type="text/css" media="screen" href="/css/simplement-web.css" />

		<link rel="author" href="https://plus.google.com/114188409678832581888" />
		<link rel="author" href="/humans.txt" />

    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <meta name="msapplication-TileColor" content="#D9C7A7">
		<meta name="msapplication-TileImage" content="/pinned-favicon.png">
		<meta name="application-name" content="simplement Web">

		<!-- «Vivre tous simplement pour que tous puissent simplement vivre.» Gandhi -->


        <!-- Matomo -->
        <script type="text/javascript">
          var _paq = _paq || [];
          /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
          _paq.push(["disableCookies"]);
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="https://stats.simplement-web.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '14']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        </script>
        <!-- End Matomo Code -->


  </head>
  <body>


<div class="header grid-container">
	<header>
	  <div class="grid-100 tablet-grid-100 mobile-grid-100"><a href="/">simplement Web</a></div>
	</header>
</div>



<div class="grid-container content">
  <div class="grid-60 tablet-grid-50 mobile-grid-100 section">
    <section>
      <h1>Intégration &amp; Développement Web Front End</h1>

      <h2>Intégration, Réalisation de template</h2>

      <p>Vous avez des maquettes ? Je vous les transforme en pages web : HTML5, CSS3, javascript.</p>

      <p>Tout en prenant un soin particulier à :</p>
      <ul>
      	<li>Écrire une sémantique HTML5 propre et concise</li>
      	<li>Tester sur les navigateurs les plus courant et assurer une dégradation grâcieuse sur les plus anciens</li>
      	<li>Séparer le fond de la forme avec CSS</li>
        <li>Respecter les bonnes pratiques</li>
        <li>Assurer l’accessibilité et l'ergonomie de la page</li>
        <li>Adpapter votre design initial aux écrans plus petit avec media query CSS</li>
        <li>Développer de petites animations CSS3 ou jQuery</li>
        <li>Prendre soins des performances HTTP, en compressant les images, en faisant des sprites ou en utilisant les data-uri</li>
      </ul>

      <p>Selon le CMS que vous avez choisie, je peux réaliser le thème et la configuration de l'outil.</p>

      <h2>Conception Agile dans le navigateur</h2>

      <p>Je peux également intervenir en amont, pour réaliser un zonning ou un prototype fonctionnel. Cette première version de page pourra être testé dans le navigateur ou sur un mobile afin de l'évaluer et de vérifier qu'elle répond à la problématique.</p>

      <p>Par la suite, une succession d'ittérations permettra d'arriver à la page final.</p>

    </section>
  </div>
  <div class="grid-40 tablet-grid-50 mobile-grid-100 aside">
    <aside>
      <div class="box box-front">
        <div class="h1">Devis</div>

        <div id="devis">


<form action="/devis-frontend" method="post">
	<fieldset>


	<div class="row  ">

		  <div class="labels grid-60 tablet-grid-70 mobile-grid-100">
		  <label for="devis_nb_template">Nombre de templates</label>		  			    <em class="help"></em>
		  </div>

		  <div class="fields grid-40 tablet-grid-30 mobile-grid-100">
		    <select name="devis[nb_template]" id="devis_nb_template">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
</select>		  </div>

	  <div class="clear"></div>

	</div>

	<div class="row  ">

		  <div class="fields grid-100">
		  			    <select name="devis[layout]" id="devis_layout">
<option value="desktop">Desktop</option>
<option value="mobile">Mobile</option>
<option value="mobiledesktop">Mobile + Desktop</option>
<option value="mobiledesktoptablette">Mobile + Desktop + Tablette</option>
</select>		  </div>

	</div>

	<div class="row  ">

		  <div class="fields grid-100">
		  			    <select name="devis[cms]" id="devis_cms">
<option value="none">template uniquement</option>
<option value="wordpress">WordPress</option>
<option value="symofny">symfony (projet existant)</option>
<option value="symofnyapostrophe">symfony + apostrophe</option>
<option value="magento">Magento</option>
<option value="prestashop">Prestashop</option>
</select>		  </div>

	</div>

		</fieldset>
</form>


						        </div>

        <div class="h1">HTML5</div>
        <ul>
          <li>sémantique</li>
          <li>audio / vidéo</li>
          <li>géolocalisation</li>
        </ul>
        <div class="h1">CSS3</div>
        <ul>
          <li>transition</li>
          <li>animation</li>
          <li>transformation (3D)</li>
          <li>media query</li>
          <li>sass</li>
        </ul>
        <div class="h1">javascript</div>
        <ul>
          <li>javascript</li>
          <li>jQuery</li>
          <li>Ajax</li>
        </ul>
      </div>
    </aside>
  </div>
  <div class="clear"></div>
</div>


<div class="clear"></div>
<div class="footer">
  <div class="grid-container">
    <footer>
      <div class="grid-60 tablet-grid-50 mobile-grid-100">
        <div class="h1">Contact</div>

        <div itemscope itemtype="http://schema.org/Organization">
          <a href="https://certificates.opquast.com/certificate/QY5WTB/" target="_blank" title="Certification Expert Opquast : Maîtrise de la qualité en projet Web" style="float:left;margin-right:1em;"><img src="/images/issuer_QY5WTB.svg" alt="Badge Expert par Opquast" width="150"></a>
        	<a itemprop="url" href="https://www.simplement-web.com/" class="brand" ><strong itemprop="name">simplement Web</strong></a>
        	<div itemprop="founder" itemscope itemtype="http://schema.org/Person">
            Votre expert qualité web <br />
		        <a href="https://nathanaelmartel.net/" itemprop="url" ><span itemprop="name">Nathanaël Martel</span></a> <br />
		        Tel : <a class="tel" itemprop="telephone" href="tel:+33781948086">07 81 94 80 86</a><br />
		        mail : <a href="mailto:nathanael@simplement-web.com" class="mail"><span itemprop="email">nathanael@simplement-web.com</span></a><br /><br />
	        </div>
        </div>
        <a href="/mentions-legales">Mentions Légales</a>
      </div>
      <div class="grid-40 tablet-grid-50 mobile-grid-100">
        <div class="h1">Navigation</div>
        <div class="nav">
        	<nav>
        		<ul>
              <li><a href="/references">Références</a></li>
              <li><a href="/integration-developpement-frontend">Développement Front End &amp; Intégration</a></li>
        			<li><a href="/responsive-design">Passage au web mobile</a></li>
        			<li><a href="/ergonomie-accessibilite">Ergonomie &amp; Accessibilité</a></li>
              <li><a href="/devoloppment-web">Développement Web sur Mesure</a></li>
              <li><a href="/contact">Contact</a></li>
        		</ul>
        	</nav>
        </div>
      </div>
      <div class="clear"></div>
    </footer>
  </div>
</div>

    <script type="text/javascript" src="/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>

  </body>
</html>
