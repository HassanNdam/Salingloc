<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="container mb-5 text-center">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0 ">
                    <div class="card">
                        <div class="card-body bleu-1-bg text-white rounded-3">
                            <h5 class="card-title mt-3 mb-4">Appelez-nous maintenant !</h5>
                            <?php

                            //Appel Fonction vérification journée ou soirée

                            if (est_journee()): ?>

                            <a href="tel:+0783587928" class="btn btn-warning text-dark" title="Appeler - SailingLoc"><i
                                    class="fas fa-phone"></i> Appeler</a>

                            <?php else: ?>
                            <p class="card-text mt-3 mb-3"> RDV de 9h00 - 18h00 du Lundi au Vendredi</p>
                            <?php

                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bleu-1-bg text-white rounded-3">
                            <h5 class="card-title mt-3 mb-4">Naviguez dans notre FAQ</h5>
                            <a href="http://salingloc.local/locataire-faq/" class="btn btn-warning text-dark"
                                title="Consulter notre FAQ"><i class="fas fa-eye"></i> Consluter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-3">Rien trouvé ? Ecrivez-nous !</h2>

    <?php

if (have_posts()): while (have_posts()): the_post();?>

		    <div>
		        <?=the_content();?>
		    </div>

		    <?php endwhile;?>

	    <?php endif;?>
</div>


<?php get_footer();?>