<?php get_header();?>


<!-- Affichage - Nos bateaux Sailing Loc -->

<div class="container">
    <h3 class="mb-5 text-center fs-1">Nos <span class="orange">meilleurs</span> bateaux !</h3>
</div>



<!-- Affichage - Nos destinations Sailing Loc -->

<div class="container">
    <h3 class="mb-5 text-center fs-1">Nos  <span class="orange">destinations </span> de charme !</h3>

</div>


<!-- Affichage - Les avantages de Sailing loc -->

<div class="container">
    <h3 class="mb-5 text-center fs-1">Pourquoi <span class="orange">Sailing Loc </span> !</h3>
</div>

<!-- Affichage titre - de de notre blog -->

<div class="container-fluid p-4 p-md-5 mb-5 bleu-1-bg text-white text-center">
    <h2 class="display-6 fst-italic">Naviguez à Dieppe cet été : offre incroyable ! </h2>
    <a href="http://salingloc.local/wp-content/uploads/2023/03/Offre-location-bateau-Dieppe-ete.png" target="_blank"
        class="btn btn-warning btn-lg text-dark mt-4" title="Offre de promotion - Location de bateau à Dieppe ">Je
        profite de l'offre</a>
</div>

<!-- Affichage des articles sur l'accueil -->

<div class="container">
    <h3 class="mb-5 text-center fs-1">Le <span class="orange">Blog </span> de Sailing Loc !</h3>
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
</div>

<!-- Affichage bouton - Visiter notre Blog -->

<div class="container text-center mb-5">
    <a href="http://salingloc.local/notre-actu/" class="btn btn-warning btn-lg text-dark mt-5"
        title="Consulter FAQ - Je suis locataire de bateau">Visiter le blog</a>
</div>


<!-- Affichage de la page des avis -->

<?php include 'page-avis-client.php';?>

<?php get_footer();?>