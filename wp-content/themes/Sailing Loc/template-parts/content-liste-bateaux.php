<!-- Affichage - Nos bateaux Sailing Loc -->
<div class="container mt-5">
    <h3 class="mb-4 text-center fs-1">Nos <span class="bleu2">meilleurs</span> bateaux !</h3>
    <p class="text-center mb-5">
        Envie de sortir en mer pendant vos vacances? <strong>Louer un bateau à Dieppe immédiatement</strong> avec Sailing Loc.
    </p>
</div>

<div class="container">
    <div class="row">
        <?php
        // Récupérer les catégories de bateaux
        $categories = get_terms( array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
        ) );
        
        // Parcourir la liste des catégories et les afficher sous forme de grille d'images
        foreach ( $categories as $category ) {
            ?>
        <div class="col-md-4 mt-4">
            <a href="<?php echo get_term_link( $category ); ?>" title="<?php echo 'Visiter la sélection de ' . $category->name; ?>">
                <?php
                    // Récupérer l'image de la catégorie (si elle existe)
                    $image = get_term_meta( $category->term_id, 'thumbnail_id', true );
                    if ( $image ) {
                        echo wp_get_attachment_image( $image, 'medium', false, array( 'class' => 'img-fluid rounded-1' ) );
                    } else {
                        echo '<img src="' . wc_placeholder_img_src() . '" class="img-fluid" alt="' . esc_attr( $category->name ) . '" />';
                    }
                    ?>
                <h4 class="mt-3 bleu1"><?php echo  $category->name; ?></h4>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
</div>