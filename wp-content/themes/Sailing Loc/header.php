<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-REBBZRQE59"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-REBBZRQE59');
    </script>

    <meta charset="<?php bloginfo('chars+et');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php sailingloc_change_title()?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icone/icone.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head();?>
</head>

<body <?php body_class();?> class="bg-light">

    <header>
        <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
            <strong class="fs-5">-10%</strong> sur votre première location avec le code promo  <strong class="fs-5">SAILING10</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="http://salingloc.local/wp-content/uploads/2023/03/Offre-location-bateau-Dieppe-ete.png"
                target="_blank" class=" bg-warning text-dark mt-4 p-2 rounded-2"
                title="Offre de promotion - Location de bateau à Dieppe le mois d'Août">Consulter l'offre d'été</a>
        </div>
    </header>