<?php get_header(); ?>

<div id="blog">
    <div class="container p-4 p-md-5 mb-5 rounded bleu-1-bg text-white">
        <div class="row">
            <div class="col-md-8 px-0">
                <h1 class="display-4 fst-italic">Le meilleur de l'actu de la location de bateau</h1>
                <p class="lead mb-0 mt-4">Profitez du blog de SailingLoc : évadez-vous !</p>
            </div>
            <div class="col-md-4 px-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/location-de-bateau-de-plaisance.jpg"
                    class="img-thumbnail float-end mx-auto" alt="Location de bateau de plaisance" width="250" height="100" title="">
            </div>
        </div>
    </div>
    
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </strong>
                            <div class="mb-1 text-muted mb-2">Publié le <?php echo get_the_date();?> </div>
                            <p class="card-text mb-auto"> <?php the_excerpt(); ?></p>
                            <p class="blog-link"><a href="<?=the_permalink();?>">Lire la suite</a></p>
                        </div>
                        <div class="col-auto d-none d-lg-block p-5 img-thumbnail">
                                <?php the_post_thumbnail('custom-size');?>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-body bleu-1-bg text-white rounded-3 p-4 text-center mb-4">
                    <h5 class="card-title mt-3 mb-4">Appelez-nous maintenant !</h5>
                    <?php
                            //Appel Fonction vérification journée ou soirée

                            if (est_journee()): ?>

                    <a href="tel:+0783587928" class="btn btn-warning text-blog-call" title="Appeler - SailingLoc"><i
                            class="fas fa-phone"></i> Appeler</a>

                    <?php else: ?>
                    <p class="card-text mt-3 mb-3"> RDV de 9h00 - 18h00 du Lundi au Vendredi</p>
                    <?php
                         endif;
                            ?>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 py-4">
                        <div class="card-body">
                            <i class="fas fa-blog mb-4"></i>
                            <h5 class="card-title"><a href="#" class="jaune" title="Louer un bateau"> Louer un
                                    bateau</a></h5>
                            <p class="card-text mt-3"> Lancez-vous et naviguez maintenant !!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 py-4">
                        <div class="card-body">
                            <i class="fas fa-comments mb-4"></i>
                            <h5 class="card-title fw-bold"><a href="http://salingloc.local/avis-client/" class="jaune"
                                    title="Consulter notre blog">Ils nous adorent</a></h5>
                            <p class="card-text mt-3">Nos services de location de bateau font des heureux.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            
            //Affiche des SideBar

            if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar' ); ?>
            </div>
            <?php endif; ?>
            <?php the_posts_pagination();?>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>