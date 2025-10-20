<?php
$error = http_response_code();
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL_PUBLIC ?>recursos/96.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL_PUBLIC ?>recursos/32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL_PUBLIC ?>recursos/16.png">
<meta property="og:title" content="x" />
<meta property="og:url" content="https://www.url.com" />
<meta property="og:image" content="https://www.url.com/recursos/x.png" />
<meta property="og:type" content="website" />
<meta property="og:description" content="..." />
<meta property="fb:app_id" content="" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="x" />
<meta name="twitter:site" content="@x" />
<meta name="twitter:image" content="https://www.url.com/recursos/x.png" />
<meta name="twitter:creator" content="@x" />
<meta name="twitter:description" content="" />
<link rel="canonical" href="https://www.url.com" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400;500;700&family=Montserrat:wght@400;600;900&family=Playfair+Display:wght@400;700&display=swap"
    rel="stylesheet">
<?php
foreach ($metaParams[1] as $key => $value) {
    echo '<link rel="stylesheet" type="text/css" href="' . URL_PUBLIC . 'styles/' . $value . '.css">' . PHP_EOL;
}
?>
<title><?php echo SITE_NAME; ?> - Error <?php echo $error ?></title>