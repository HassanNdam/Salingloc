<?php


function sailingloc_register_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');

    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', array(), '1.0');
    wp_enqueue_style('font2', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), '1.0');
    wp_enqueue_style('ms-font',"https://use.fontawesome.com/releases/v5.7.0/css/all.css", array(), 
'5.7.0', 'All');


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
    }else {
        $title = get_the_title(); 
        echo  'SailingLoc' . ' - ' . $title; 
    }

}


//Fonction vérification journée ou soirée
function est_journee() {
    $heure = date('H');
    return ($heure >= 6 && $heure < 20);
  }


// Ajout blog - Widget au theme 
function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'mytheme' ),
        'id'            => 'sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );


// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');


//Ajouter taille personnalisée image en avant
add_image_size( 'custom-size', 300, 300, true );


// Ajout fil d'ariane
function custom_breadcrumb() {
    global $post;
    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li class="breadcrumb-item"><a href="'.home_url().'">'.__('Accueil', 'textdomain').'</a></li>';
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            the_category('</li><li class="breadcrumb-item">');
            echo '</li>';
            if (is_single()) {
                echo '<li class="breadcrumb-item active" aria-current="page">';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $anc = array_reverse($anc);
                foreach ( $anc as $ancestor ) {
                    echo '<li class="breadcrumb-item"><a href="'.get_permalink($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
            }
            echo '<li class="breadcrumb-item active" aria-current="page">'.get_the_title().'</li>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li class='breadcrumb-item'>".get_the_time('Y')."</li><li class='breadcrumb-item'>".get_the_time('F')."</li><li class='breadcrumb-item active' aria-current='page'>".get_the_time('d')."</li>";}
    elseif (is_month()) {echo"<li class='breadcrumb-item'>".get_the_time('Y')."</li><li class='breadcrumb-item active' aria-current='page'>".get_the_time('F')."</li>";}
    elseif (is_year()) {echo"<li class='breadcrumb-item active' aria-current='page'>".get_the_time('Y')."</li>";}
    elseif (is_author()) {echo"<li class='breadcrumb-item active' aria-current='page'>".get_the_author()."</li>";}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li class='breadcrumb-item active' aria-current='page'>".__('Page').' '.$_GET['paged']."</li>";}
    elseif (is_search()) {echo "<li class='breadcrumb-item active' aria-current='page'>".__('Search results for: ', 'textdomain').get_search_query()."</li>";}
    echo '</ol>';
    echo '</nav>';
}

// Fonction ajout roles
function sailingloc_add_custom_role(){
    $capabilities = array(
        'edit_posts' => true,  
        'delete_posts' => true, 
        'edit_pages' => true, 
        'read' => true,
    ); 

    add_role('locataire', 'Locataire', $capabilities); 
    add_role('proprietaire', 'Proriétaire', $capabilities); 
}

add_action('init', 'sailingloc_add_custom_role'); 

//Changement du texte sale
function my_custom_sale_flash( $html, $post, $product ) {
    if ( $product->is_on_sale() ) {
        $html = '<span class="onsale">' . __( 'À Louer', 'woocommerce' ) . '</span>';
    }
    return $html;
}
add_filter( 'woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3 );

//Changement du texte Add to cart
add_filter( 'woocommerce_product_single_add_to_cart_text', 'custom_cart_button_text' );    // Change single product page add to cart text
add_filter( 'woocommerce_product_add_to_cart_text', 'custom_cart_button_text' );          // Change product archives (shop, category) add to cart text

function custom_cart_button_text() {
    return __( 'Ajouter ce bateau au panier', 'woocommerce' );
}








?>