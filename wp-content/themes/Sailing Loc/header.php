<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('chars+et');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php sailingloc_change_title()?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icone/icone.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head();?>
</head>

<body <?php body_class();?> class="bg-light">

    <header>
        <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
            <strong>-10%</strong> sur votre première location avec le code promo SAILING10
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </header>