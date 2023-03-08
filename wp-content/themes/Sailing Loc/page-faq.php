<?php get_header();?>

<div class="container mb-5 text-center">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0 ">
            <div class="card">
                <div class="card-body bleu-1-bg text-white rounded-3">
                    <i class="fas fa-anchor"></i>
                    <h5 class="card-title mt-3 mb-4">Je suis propriétaire de bateau</h5>
                    <a href="http://salingloc.local/proprietaire-faq/" class="btn btn-warning text-dark"
                        title="Consulter notre FAQ - Je suis propriétaire de bateau">Consulter</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body bleu-1-bg text-white rounded-3">
                    <i class="fas fa-anchor"></i>
                    <h5 class="card-title mt-3 mb-4">Je suis locataire de bateau</h5>
                    <a href="http://salingloc.local/locataire-faq/" class="btn btn-warning text-dark"
                        title="Consulter FAQ - Je suis locataire de bateau">Consulter</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 py-4">
                <div class="card-body">
                    <i class="far fa-calendar-alt mb-4"></i>
                    <h5 class="card-title fs-4">Horraire d'ouverture du service clients</h5>
                    <p class="card-text mt-3"> 9h00 - 18h00 du lundi au vendredi</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 py-4">
                <div class="card-body">
                    <i class="fas fa-blog mb-4"></i>
                    <h5 class="card-title"><a href="http://salingloc.local/notre-actu/" class="jaune"
                            title="Consulter notre blog"> Consulter notre Blog</a></h5>
                    <p class="card-text mt-3"> Partez à l'aventure dans notre blog !</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 py-4">
                <div class="card-body">
                    <i class="fas fa-comments mb-4"></i>
                    <h5 class="card-title fw-bold"><a href="http://salingloc.local/avis-clients/" class="jaune"
                            title="Consulter notre blog">Ils nous adorent</a></h5>
                    <p class="card-text mt-3">Nos services de location de bateau font des heureux.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container bg-light rounded-2 p-5 mb-5 mt-5 text-center">
    <div class="row">
        <div class="col-lg-6">
            <div class="display-6 mt-5 mb-3">
                Contactez-nous !
            </div>
            <p class="fs-4 mb-4">
                Vous avez des questions ? Laissez-nous un message.
            </p>
            <a href="http://salingloc.local/contact/" class="btn btn-warning btn-lg orange"
                title="Contactez SailingLoc Aujourd'hui">Nous écrire</a>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/location-bateau-prix.jpg"
                class="img-fluid rounded-3" alt="Contactez SailingLoc Aujourd'hui">
        </div>
    </div>
</div>
</div>

<?php get_footer();?>