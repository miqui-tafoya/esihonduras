<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL_PUBLIC ?>recursos/96.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL_PUBLIC ?>recursos/32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL_PUBLIC ?>recursos/16.png">
<meta property="og:title" content="x" />
<meta property="og:url" content="https://www.url.com" />
<meta property="og:image" content="./recursos/og.jpg" />
<meta property="og:type" content="website" />
<meta property="og:description" content="ESI Honduras" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="x" />
<meta name="twitter:site" content="@x" />
<meta name="twitter:image" content="./recursos/og.jpg" />
<meta name="twitter:creator" content="@x" />
<meta name="twitter:description" content="ESI Honduras" />
<link rel="canonical" href="https://www.url.com" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Onest:wght@100..900&display=swap"
    rel="stylesheet">
<?php
foreach ($metaParams[1] as $key => $value) {
    echo '<link rel="stylesheet" type="text/css" href="' . URL_PUBLIC . 'styles/' . $value . '.css">' . PHP_EOL;
}
?>
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function () {
        var u = "//localhost/prod/esihonduras/Public/analytics/";
        _paq.push(['setTrackerUrl', u + 'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
    })();
</script>
<!-- End Matomo Code -->

<title>
    <?php echo SITE_NAME; ?> -
    <?php echo $metaParams[0]; ?>
</title>