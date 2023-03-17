<?php get_header();?>


<!-- Appelle des différentes pages & blocs-->
<?php get_template_part('template-parts/content-liste-bateaux'); ?>
<?php get_template_part('template-parts/content-a-propos'); ?>
<?php get_template_part('template-parts/content-nos-destinations'); ?>
<?php get_template_part('template-parts/content-blog'); ?>
<?php get_template_part('template-parts/content-activity'); ?>
<?php include 'page-avis-client.php';?>


<?php get_footer();?>