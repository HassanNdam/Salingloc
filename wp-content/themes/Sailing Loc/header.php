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

    <!-- Affichage header all pages -->
    <?php get_template_part('template-parts/header-all-page'); ?>

    <!-- Affichage header page accueil -->
    <?php if (is_front_page()): ?>

    <?php get_template_part('template-parts/header-front-page');?>

    <!-- Affichage header single_post -->
    <?php elseif (is_single()): ?>

    <section class="container-fluid py-5 mb-5 text-center d-flex header-photo-single">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-8 col-sm-6 mx-auto bg-white rounded-3 shadow-sm p-5 text-start">
                <h1 class="bleu2"><?php echo get_the_title(); ?> </h1>

            </div>
        </div>
    </section>

    <!-- Affichage header single_post -->
    <?php elseif (is_page() && !is_front_page()): ?>

    <section class="container-fluid py-5 mb-5 text-center header-photo-page">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-8 col-sm-6 mx-auto bg-white rounded-3 shadow-sm p-4 text-start">
                <h1 class="bleu2"><?php echo get_the_title(); ?> </h1>

            </div>
        </div>
    </section>

    <!-- Affichage header single_post -->
    <?php elseif (is_home() && !is_front_page()): ?>

    <section class="container-fluid py-5 mb-5 text-center d-flex header-photo-actu">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-8 col-sm-6 mx-auto bg-white rounded-3 shadow-sm p-5 text-start">
                <?php
                        $page_for_posts_id = get_option('page_for_posts'); // Récupérez l'ID de la page blog
                        $title = get_the_title($page_for_posts_id); // Récupérez le titre de la page blog
                        echo '<h1>' . $title . '</h1>'; // Affichez le titre de la page blog
                ?>

            </div>
        </div>
    </section>

    <?php endif;?>

    <!-- Affichage fil d'ariane -->
    <div class="container mb-4 mt-5">
        <?php

    if (!is_front_page()) {
        custom_breadcrumb();
    }

    ?>
    </div>
