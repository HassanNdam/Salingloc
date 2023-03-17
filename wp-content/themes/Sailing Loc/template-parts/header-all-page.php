 <!-- Header promo -->
 <header class="site-header-promo">
     <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
         <strong class="fs-5">-10%</strong> sur votre première location avec le code promo <strong
             class="fs-5">SAILING10</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <a href="http://salingloc.local/wp-content/uploads/2023/03/Offre-location-bateau-Dieppe-ete.png"
             target="_blank" class=" bg-warning text-dark mt-4 p-2 rounded-2"
             title="Offre de promotion - Location de bateau à Dieppe le mois d'Août">Consulter l'offre d'été</a>
     </div>
 </header>

 <!-- Header general -->
 <header class="site-header sticky-top">
     <div class="container-fluid  shadow-sm bg-white">
         <header
             class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
             <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"
                 href="<?php echo get_site_url(); ?>" aria-label="Product">
                 <img src="<?php echo (get_template_directory_uri() . '/assets/logo/logo.png'); ?>"
                     alt="Logo - meilleur service de location de bateau"
                     title="Logo - meilleur service de location de bateaux" height="50" width="40">
             </a>

             <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                 <li><a href="http://salingloc.local/vendor-register/" class="nav-link px-2 link-dark  fs-5"
                         title="Ajouter un bateau en ligne">
                         Ajouter un bateau</a>
                 </li>
                 <li><a href="http://salingloc.local/permis-bateaux/" class="nav-link px-2 link-dark  fw-bold fs-5"
                         title="Passer mon permis bateau">
                         Passer mon permis</a>
                 </li>
                 <li><a href="http://salingloc.local/faq/" class="nav-link px-2 link-dark  fs-5"
                         title="Consulter notre FAQ - de Sailing Loc">
                         Aide</a>
                 </li>
                 <li><a href="http://salingloc.local/notre-actu/" class="nav-link px-2 link-dark  fs-5"
                         title="Le blog - de Sailing Loc">
                         Notre blog</a>
                 </li>
             </ul>

             <!-- Gestion login & Page -->
             <div class="col-md-3 text-end">
                 <a href="http://salingloc.local/nos-bateaux/">
                     <button type="button" class="btn jaune-bg" title="Réserver un bateau maintenant ">Réserver un
                         bateau</button>
                 </a>

                 <?php if (!is_user_logged_in()): ?>
                 <a href="<?=wp_login_url();?>">
                     <button type="button" class="btn me-2" title="Mon compte sailingloc"> <i class="far fa-user"></i>
                         Mon compte</button>
                 </a>

                 <?php else:
                    // Si l'utilisateur est connecté, afficher un message de bienvenue
                    $user = wp_get_current_user();
                    echo  $user->user_login;
                    ?>
                 <a href="<?=wp_logout_url();?> " class="text-muted">Déconnexion</a>
                 <?php 
                    endif;
                    ?>
             </div>
         </header>
     </div>
 </header>
 </div>