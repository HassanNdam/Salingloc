
<!-- Fonction ajoutées (personnalisées - Themes) -->

<?php

//Déclarer l'emplacement des menus

register_nav_menus(
    array(
        'main' => 'Menu principal',
        'footer' => 'Bas de page',
    ));

// Ajout automatiquement le titre du site dans l'entête du site

add_theme_support('title-tag');

function sailingloc_register_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');

    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', array(), '1.0');
    wp_enqueue_style('font2', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), '1.0');

    // wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');

    //wp_enqueue_script => name the script, src, position links, version used, footer(true|false)
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js', ['jquery'], false, true);

    //On annule le jquery
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);
    wp_enqueue_script('script', get_template_directory_uri() . 'js/script.js', [], '1.0', true);
}

// Déclencher l'action sur la fonction
add_action('wp_enqueue_scripts', 'sailingloc_register_assets');

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');


// Fonction changement de titre

function sailingloc_change_title()
{
    if (is_home() or is_front_page()) {
        echo "SailingLoc - Le meilleur de la location de bateaux";
    }

}

?> 