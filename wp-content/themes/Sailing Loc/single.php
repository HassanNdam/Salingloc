<?php get_header(); ?>

<div class="container mb-4">
    <div class="row">
        <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?>>
                <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative p-5">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </strong>
                        <div class="mb-1 text-muted mb-2">Publié le <?php echo get_the_date();?> </div>
                        <p class="card-text mb-auto"> <?php the_content(); ?></p>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <div class="container text-center mb-5">
                    <a href="http://salingloc.local/contact/" 
                        class="btn btn-warning btn-lg text-dark mt-4" title="Contacter - Sailing Loc ">Nous
                        contacter</a>
                </div>
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
            <div class="col mb-4 text-center">
                <div class="card h-100 py-4">
                    <div class="card-body">
                        <i class="fas fa-blog mb-4"></i>
                        <p class="card-text mt-1"> Lancez-vous et naviguez maintenant !!</p>
                        <a href="#" class="btn btn-warning text-blog-call" title="Louer un bateau - Sailing Loc"> Louer un bateau</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card h-100 py-4">
                    <div class="card-body">
                        <i class="fas fa-comments mb-4"></i>
                        <p class="card-text mt-1">Nos services de location de bateau font des heureux.</p>
                        <a href="http://salingloc.local/avis-client/" class="btn btn-warning text-blog-call" title="Les avis - Sailing Loc">Ils nous adorent</a>
                    </div>
                </div>
            </div>
        </div>
        <?php 

            //Affiche des SideBar & Pagination

            if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
        <?php endif; ?>
        <?php the_posts_pagination();?>
    </div>
</div>

<?php get_footer(); ?>