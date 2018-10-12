<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_config.php') ?>

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
      "@type": "Organization",
      "name": "simplement Web",
      "url": "https://www.simplement-web.com/",
      "logo": "https://www.simplement-web.com/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+33781948086",
        "contactType": "customer service",
        "areaServed": "FR",
        "availableLanguage": "French"
      },
      "founders": [
        {
            "@type": "Person",
            "name": "Nathanaël Martel",
            "email": "mailto:nathanael@simplement-web.com",
            "image": "https://www.simplement-web.com/assets/images/janvier2015-byHenri-2.jpg",
            "telephone": "+33781948086",
            "url": "https://nathanaelmartel.net",
            "sameAs": [
              "https://www.linkedin.com/in/nathana%C3%ABl-martel-15299753",
              "https://twitter.com/simplementNat",
              "https://github.com/nathanaelmartel",
              "http://fr.viadeo.com/fr/profile/nathanael.martel"
            ]
        }]
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
  _paq.push(["setDoNotTrack", true]);
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
<noscript><p><img src="https://stats.simplement-web.com/piwik.php?idsite=14&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
