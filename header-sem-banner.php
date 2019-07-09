<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>Tema básico</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!--  -->

<header>
 <!-- se existir uma logo customizada então vai exibir ela -->
    <?php 
        if(has_custom_logo()):
        the_custom_logo(); 
        else: ?>
<!-- se nao existe a logo, exibe o titulo do site-->
    <h1><?php bloginfo('name'); ?></h1>
    <?php endif; ?> <!-- fim loop da logo customizada -->

    <!-- exibe o menu dinamico  -->
        <?php wp_nav_menu(array(
            'theme_location' => 'main'
        )); ?>

</header>