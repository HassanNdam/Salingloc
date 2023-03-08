<!-- Avant footer - Newsletter -->

<?php if (is_home() or is_front_page()) : ?>

<div class="container  mb-3">
    <p class="fs-1 mb-4">Inscrivez-vous sur notre <span class="jaune">Newsletter</span> : 10% de réduction sur votre
        première réservation
        de bateau !
    </p>
</div>
<div class="container col-lg-4 col-md-12 col-sm-12 text-center mb-5">
    <?php 
            echo do_shortcode("[mc4wp_form id=9]");  
    ?>
</div>

<?php endif; ?>

<!-- footer - blocs -->

<footer>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-4 mb-3">
                    <h5>SailingLoc</h5>
                    <p class="mt-4">
                        SailingLoc est le premier né d’un couple passionné de sports nautiques.
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
                    <h5 class="mb-4">À propos</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="http://salingloc.local/faq/" class="nav-link p-0"
                                title="Foire Aux Questions">FAQ</a>
                        </li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/contact/" class="nav-link p-0"
                                title="Contactez SailingLoc">Contactez-nous</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"
                                title="Réserver un bateau maintenant">Réserver un bateau</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"
                                title="Enregistrer un bateau maintenant">Enregistrer un bateau</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/permis-bateaux/" class="nav-link p-0"
                                title="Passer mon permis côtier à Dieppe">Passer mon permis</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/politique-de-confidentialite/"
                                class="nav-link p-0" title="Politique de confidentialité">Politique de
                                confidentialité</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/cgu-cgv/" class="nav-link p-0"
                                title="conditions générales d'utilisation.">CGU & CGV</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/nos-mentions-legales/"
                                class="nav-link p-0" title="Mentions légales">Mentions
                                légales</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/avis-clients/" class="nav-link p-0"
                                title="Nos clients parlent de nous">Avis clients</a></li>
                        <li class="nav-item mb-2"><a href="http://salingloc.local/notre-actu/" class="nav-link p-0"
                                title="Ne manquez rien de l'actualité nautique">Notre actualité</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="mb-4">Quoi louer</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"
                                title="Louer - Bateaux à moteur">Bateaux à moteur</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0" title="Louer - Voiliers">Voiliers</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"
                                title="Louer - Catamarans">Catamarans</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0" title="Louer - Jet Ski">Jet Ski</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"
                                title="Louer - Bateaux électriques">Bateaux électriques</a></li>
                    </ul>
                </div>

                <div class="col-md-2 offset-md-1 mb-3">
                    <form>
                        <h5 class="mb-4">Nos destinations</h5>
                    </form>
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
                    <li class="ms-2"><a href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/tiktok.png"
                                class="img-fluid" alt="Suivez-nous sur - Tiktok" width="30"
                                title="Suivez-nous sur - Tiktok"></a></li>
                    <li class="ms-2"><a href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/linkedin.png"
                                class="img-fluid" alt="Suivez-nous sur - Linkedin" width="30"
                                title="Suivez-nous sur - Linkedin"></a></li>
                    <li class="ms-2"><a href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/instagram.png"
                                class="img-fluid" alt="Suivez-nous sur - Instagram" width="30"
                                title="Suivez-nous sur - Instagram"></a></li>
                    <li class="ms-2"><a href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icone/facebook.png"
                                class="img-fluid" alt="Suivez-nous sur - Facebook" width="30"
                                title="Suivez-nous sur - Facebook"></a></li>
                </ul>
            </div>
        </footer>
    </div>

</footer>

<!-- end footer -->

<?php wp_footer();?>

</body>

</html>