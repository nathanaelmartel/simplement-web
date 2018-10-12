<?php

$current_page = rtrim($_SERVER['REQUEST_URI'], '/');

$nav = array(
    array(
        'url' => '',
        'name' => 'Compétences',
        'childs' => array(
            '/integration-developpement-frontend' => 'UI et UX',
            '/devoloppment-web' => 'Modélisation',
            '/ergonomie-accessibilite' => 'Audit qualité web',
            '/presence-en-ligne' => 'Présence en ligne',
        ),
    ),
    array(
        'url' => '/technologies',
        'name' => 'Technologies',
        'childs' => array(
            '/technologies/api' => 'API et manipulation de données',
            '/technologies/responsive' => 'Responsive',
            '/technologies/donnees-structurees' => 'Données structurées',
        ),
    ),
    array(
        'url' => '/projets',
        'name' => 'Projets',
        'childs' => array(
            '/projets/sepa' => 'Automatisation de processus (SEPA)',
            '/projets/processus' => 'Tableau de bord de gestion (Processus)',
            '/projets/statistiques' => 'Tableau de bord de gestion (Statistiques)',
        ),
    ),
    array(
        'url' => '/references',
        'name' => 'Clients',
    ),
    array(
        'url' => '/contact',
        'name' => 'Contact',
    ),
);

function getBreadcrumb($current_page, $nav)
{
    $breadcrumb = array(
        '' => 'simplement Web',
    );

    foreach ($nav as $category) {
        if ($current_page == $category['url']) {
            $breadcrumb[$category['url']] = $category['name'];
        }
        if (isset($category['childs']) && is_array($category['childs']) && (count($category['childs']) > 0)) {
            if (isset($category['childs'][$current_page])) {
                $breadcrumb[$category['url']] = $category['name'];
                $breadcrumb[$current_page] = $category['childs'][$current_page];
            }
        }
    }

    return $breadcrumb;
}

$breadcrumb = getBreadcrumb($current_page, $nav);

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/simplement-web.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/fonts/fontawesome/css/all.min.css" />

	<link rel="author" href="/humans.txt" />

    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
	<meta name="application-name" content="simplement Web">

	<!-- «Vivre tous simplement pour que tous puissent simplement vivre.» Gandhi -->


    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Corporation",
      "name": "simplement Web",
      "url": "https://www.simplement-web.com/",
      "logo": "https://www.simplement-web.com/assets/images/logo.png",
      "sameAs": [
        "https://www.linkedin.com/in/nathana%C3%ABl-martel-15299753",
        "https://twitter.com/simplementNat",
        "https://github.com/nathanaelmartel",
        "http://fr.viadeo.com/fr/profile/nathanael.martel"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+33781948086",
        "contactType": "customer service",
        "areaServed": "FR",
        "availableLanguage": "French"
      }
    }
    </script>


    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
      <?php $item = 1; foreach ($breadcrumb as $item_url => $item_name): ?>
            "@type": "ListItem",
            "position": <?php echo $item++ ?>,
            "name": "<?php echo $item_name ?>",
            "item": "https://www.simplement-web.com<?php echo $item_url ?>"
        }<?php echo ($item < count($breadcrumb)+1)?',{':''; ?>
      <?php endforeach ?>
        ]
    }
    </script>




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
