<?php if (is_home() or is_front_page()) : ?>

<!-- Values - before footer -->
<div class="container">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col align-items-start text-center">
            <div
                class="icon-square bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 p-2 rounded-3">
                <i class="fas fa-truck-monster display-3 mb-3"></i>
            </div>
            <div>
                <h3 class="fs-3 mb-2 ">Offre variée</h3>
                <p>Bateaux à moteur, cataraman, jeski, bateaux électriques et bien plus.</p>
            </div>
        </div>
        <div class="col align-items-start text-center">
            <div
                class="icon-square bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 p-2 rounded-3">
                <i class="fas fa-check-circle display-3 mb-3"></i>
            </div>
            <div>
                <h3 class="fs-3 mb-2">Haute disponibilité</h3>
                <p>Vous aurez toujours de quoi faire un tour chez sailing loc !</p>
            </div>
        </div>
        <div class="col align-items-start text-center">
            <div
                class="icon-square bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 p-2 rounded-3">
                <i class="fas fa-users display-3 mb-3"></i>
            </div>
            <div>
                <h3 class="fs-3 mb-2">Profils variés</h3>
                <p>Amateurs, professionnels ou juste curieux ? Nos bateaux et voiliers vous attendent. </p>
            </div>
        </div>
    </div>
</div>

<!-- Avant footer - Newsletter -->
<div class="container text-center">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 p-3">
            <p class="fs-5 fw-bold mb-4">Abonnez-vous à la newsletter !
            </p>
            <?php 
        echo do_shortcode("[mc4wp_form id=9]");  
?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 p-3">
            <div class="display-6 mb-4">
                Contact
            </div>
            <p class="fs-5 mb-4">
                Vous avez des questions ?
            </p>
            <a href="http://salingloc.local/contact/" class="btn btn-warning btn-lg text-dark"
                title="Contactez SailingLoc Aujourd'hui">Nous écrire</a>
        </div>
    </div>
</div>

<?php endif; ?>

<!-- footer - blocs -->
<footer>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-4 mb-3">
                    <h5 class="fs-4">Sailing Loc</h5>
                    <p class="mt-4">
                        Sailing Loc est le premier né d’un couple passionné de sports nautiques.
                        Céline et Bernard sont un couple dieppois qui a toujours eu cette ambition de démocratiser la
                        location de voiliers et de bateaux. Notre service de location de bateau entre particuliers
                        offre un catalogue complet de bateaux, voiliers et des bateaux électriques. Bien mieux, obtenez
                        votre permis bateau chez nous !
                    </p>
                    <a href="<?php echo get_site_url(); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo_blanc.png"
                            alt="Le meilleur de la location de bateaux" width="50" height="80"
                            title="Logo de SailingLoc"></a>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="mb-4 fs-4">À propos</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="http://salingloc.local/faq/" class="nav-link p-0"
                                title="Foire Aux Questions">FAQ</a>
                        </li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/contact/" class="nav-link p-0"
                                title="Contactez SailingLoc">Contactez-nous</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/nos-bateaux/"
                                class="nav-link p-0" title="Réserver un bateau maintenant">Réserver un bateau</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/vendor-register/" class="nav-link p-0"
                                title="Enregistrer un bateau maintenant">Enregistrer un bateau</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/permis-bateaux/" class="nav-link p-0"
                                title="Passer mon permis côtier à Dieppe">Passer mon permis côtier <span
                                    class="badge bg-warning text-dark jaune">Nouveau</span></a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/politique-de-confidentialite/"
                                class="nav-link p-0" title="Politique de confidentialité">Politique de
                                confidentialité</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/cgu-cgv/" class="nav-link p-0"
                                title="conditions générales d'utilisation.">CGU & CGV</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/nos-mentions-legales/"
                                class="nav-link p-0" title="Mentions légales">Mentions
                                légales</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/avis-client/" class="nav-link p-0"
                                title="Nos clients parlent de nous">Avis clients</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/notre-actu/" class="nav-link p-0"
                                title="Ne manquez rien de l'actualité nautique">Notre actualité</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="mb-4 fs-4">Quoi louer</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="http://salingloc.local/product-category/bateau-a-moteur/"
                                class="nav-link p-0" title="Louer - Bateaux à moteur">Bateaux à moteur</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/product-category/voiliers/"
                                class="nav-link p-0" title="Louer - Voiliers">Voiliers</a>
                        </li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/product-category/catamarans/"
                                class="nav-link p-0" title="Louer - Catamarans">Catamarans</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/product-category/jet-ski/"
                                class="nav-link p-0" title="Louer - Jet Ski">Jet Ski</a>
                        </li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/product-category/bateaux-electriques/"
                                class="nav-link p-0" title="Louer - Bateaux électriques">Bateaux électriques</a></li>
                    </ul>
                </div>

                <div class="col-md-2 offset-md-1 mb-3">
                    <h5 class="mb-4 fs-4">Destination</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://www.youtube.com/watch?v=D0QE0mV1aYI&ab_channel=Jean-LucVERLHAC"
                                class="nav-link p-0" title="Découvrir Dieppe en Normandie">Découvrir Dieppe</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>
                    <span class="text-italic">Vos données sont protégées </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-rgpd.png" class="img-fluid"
                        alt="Logo - RGPD" width="50" height="50" title="Vos données sont protégées chez SailingLoc">
                </p>
                <p>
                    &copy; <?php echo Date('Y') ?>
                    SailingLoc, Tous droits réservés.
                </p>

                <ul class="list-unstyled d-flex">
                    <li class="ms-2"><a href="https://www.tiktok.com/@sailingloc?_t=8aWJgWADnGf&_r=1"
                            target="_blank"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/tiktok.png"
                                class="img-fluid" alt="Suivez-nous sur - Tiktok" width="30"
                                title="Suivez-nous sur - Tiktok"></a></li>
                    <li class="ms-2"><a href="https://www.linkedin.com/company/sailingloc/" target="_blank"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/linkedin.png"
                                class="img-fluid" alt="Suivez-nous sur - Linkedin" width="30"
                                title="Suivez-nous sur - Linkedin"></a></li>
                    <li class="ms-2"><a href="https://www.instagram.com/sailinglocdieppe/?igshid=YmMyMTA2M2Y%3D"
                            target="_blank"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/instagram.png"
                                class="img-fluid" alt="Suivez-nous sur - Instagram" width="30"
                                title="Suivez-nous sur - Instagram"></a></li>
                    <li class="ms-2"><a href="https://www.facebook.com/profile.php?id=100090579865409"
                            target="_blank"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/facebook.png"
                                class="img-fluid" alt="Suivez-nous sur - Facebook" width="30"
                                title="Suivez-nous sur - Facebook"></a></li>
                </ul>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moyen-paiement.png" class="img-fluid"
                    alt="Logo - RGPD" width="200" height="50" title="Vos données sont protégées chez SailingLoc">
            </div>
        </footer> <!-- end footer -->

        <?php wp_footer();?>

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

        </body>

        </html>