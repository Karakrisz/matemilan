<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">

    <title><?php echo 'Független pénzügyi tanácsadó - ' . $title;  ?></title>

    <!-- favicons Icons -->
    <link rel="icon" href="Boaz/img/logo.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="Boaz/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Boaz/img/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="Boaz/img/logo.png" />
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> -->

    <meta property="og:title" content="Máté Milán - független pénzügyi tanácsadó" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Máté Milán - független pénzügyi tanácsadó" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="Máté Milán - független pénzügyi tanácsadó" />
    <meta name="DC.title" content="" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Alex+Brush&family=Alfa+Slab+One&family=Amiri&family=Bebas+Neue&family=Exo+2:wght@400;500;600;700;800&family=Lato:wght@300&family=Montserrat:wght@700&family=Open+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:wght@100;400;500;600;700;800;900&family=Tilt+Prism&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Alex+Brush&family=Alfa+Slab+One&family=Amiri&family=Bebas+Neue&family=Exo+2:wght@400;500;600;700;800&family=Kumbh+Sans:wght@100..900&family=Lato:wght@300&family=Montserrat:wght@700&family=Open+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:wght@100;400;500;600;700;800;900&family=Tilt+Prism&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/ogency-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/ogency.css" />
    <link rel="stylesheet" href="assets/css/ogency-light.css" />
    <!-- Boaz styles -->
    <link rel="stylesheet" href="Boaz/css/style.css" />
</head>

<body class="custom-cursor">
    <div class="page-wrapper">
        <?php
    require_once "header.php";
    require_once "$view.php";
    require_once "footer.php";
    ?>
    </div>
</body>

</html>