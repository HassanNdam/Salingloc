
<!-- Affichage des articles sur l'accueil -->

<div class="container">
    <h3 class="mb-5 text-center fs-1">Le <span class="bleu2">Blog </span> de Sailing Loc !</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php if (have_posts()): while (have_posts()): the_post();?>
            <?php $args = array(
            'post_type' => 'post', //Type de publication
            'order' => 'DESC', //Ordre décroissant
            'posts_per_page' => 3, //3 articles à afficher

        );
        $my_query = new WP_query($args);

        ?>
            <div <?php post_class();?>>
                <?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post();?>
                <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-5 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">
                            <h2><a href="<?php the_permalink();?>" class="bleu1"><?php the_title();?></a></h2>
                        </strong>
                        <div class="mb-1 text-muted mb-2">Publié le <?php echo get_the_date(); ?> </div>
                        <p class="card-text mb-auto"> <?php the_excerpt();?></p>
                        <p class="blog-link"><a href="<?=the_permalink();?>" class="bleu1">Lire la suite</a></p>
                    </div>
                    <div class="col-auto d-none d-lg-block p-5 img-thumbnail">
                        <?php the_post_thumbnail('custom-size');?>
                    </div>
                </div>
            </div>
            <?php endwhile;endif;?>
        </div>
    </div>
    <?php endwhile;endif;?>
</div>

<!-- Affichage bouton - Visiter notre Blog -->
<div class="container text-center mb-5">
    <a href="http://salingloc.local/notre-actu/" class="btn btn-warning btn-lg text-dark mt-5"
        title="Consulter FAQ - Je suis locataire de bateau">Visiter le blog</a>
</div>