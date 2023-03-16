<?php get_header();?>

<!-- Formulaire de recherche -->
<div class="container col-lg-4 text-center">
    <h3 class="mb-5">Bonjour, vous avez une question ? </h3>
    <?php get_template_part('template-parts/searchform')?>
</div>

<!-- FAQ -->
<div class="container mb-5 mt-5">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Mon compte</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Réservation</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Louer son
                bateau</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Mot de passe
                oublié</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                tabindex="0">
                <p class="fw-bold"> Comment puis-je m'inscrire ?</p>
                <p>
                    J'ai oublié / perdu mon mot de passe
                    Ai-je besoin d'avoir un compte pour louer un bateau?
                    J'ai souscrit à une assurance caution ou annulation, comment trouver mon numéro assuré?
                    Comment avoir un profil complet ?
                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">
                <p class="fw-bold"> Quelle sont les condition pour louer un bateau sur Sailingloc?</p>
                <p>
                    Est ce que je peux annuler ma réservation
                    Quand serai-je débité ?
                    Quelle est la différence entre une réservation avec et/ou sans capitaine ?
                    Je n'ai pas de réponse du propriétaire, que faire?
                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">
                <p class="fw-bold"> Quelle sont les conditions pour louer un bateau sur Sailingloc?</p>

                <p>
                    Vous voulez louer un bateau sans moteur ? Super ! Pas besoin de permis !
                    Par contre, l'expérience en matière de navigation sera quand même utile : Demandez à votre
                    propriétaire
                    s'il peut prévoir un skipper ou capitaine, ou bien remplissez avec précision votre CV nautique, pour
                    lui
                    montrer ce dont vous êtes capable.
                    Si vous êtes à la recherche d'un bateau doté d'un moteur, vous devrez être un peu plus prudent :
                    En France, si la puissance du moteur est inférieure à 6 chevaux, alors vous pourrez louer sans
                    permis
                    bateau ; autrement, un permis bateau côtier ou hauturier sera obligatoire. Heureusement, si vous
                    louez
                    un voilier sans capitaine, le permis bateau n'est pas requis.
                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0">
                <p class="fw-bold">J'ai oublié / perdu mon mot de passe</p>
                <p>Pour procéder à la remise à zéro de votre mot de passe, il vous suffit d'appuyer sur "Se connecter"
                    et ensuite sur "Mot de passe oublié".
                    Un email sera automatiquement envoyé à l'adresse que vous avez fournie lors de l'inscription à votre
                    compte.
                    Au cas où vous ne recevez rien, n'hésitez pas à consulter vos courriers indésirables, il se peut que
                    le message s'y trouve.
                    Attention : Si vous êtes déjà connecté au site, il vous suffit de vous déconnecter, de cliquer sur
                    "Se connecter" et enfin "Mot de passe oublié".</p>

            </div>
        </div>
    </div>
</div>

<!-- COntactez-nous -->
<div class="container text-center mb-5">
    <h4>Vous avez une question ? </h4>
    <a href="http://salingloc.local/contact/" class="btn btn-warning btn-lg text-dark mt-4"
        title="Contacter - Sailing Loc ">Nous
        contacter</a>
</div>

<?php get_footer();?>