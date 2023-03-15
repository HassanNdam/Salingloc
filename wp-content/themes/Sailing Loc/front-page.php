<?php get_header();?>


<!-- Affichage - Nos bateaux Sailing Loc -->
<div class="container">
    <h3 class="mb-5 text-center fs-1">Nos <span class="bleu2">meilleurs</span> bateaux !</h3>
</div>

<!-- Affichage - Nos destinations Sailing Loc -->
<div class="container">
    <h3 class="mb-5 text-center fs-1">Nos  <span class="bleu2">destinations </span> de charme !</h3>

</div>

<!-- Appelle des différentes pages -->
<?php get_template_part('template-parts/content-a-propos'); ?>
<?php get_template_part('template-parts/content-blog'); ?>
<?php include 'page-avis-client.php';?>

<?php get_footer();?>