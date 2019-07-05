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

        <?php if(has_header_image() && is_home()) : ?>  <!-- exibe se tiver uma imagem no header e se estiver na home do site -->

            <img src="<?php header_image(); ?>"> <!-- pega o endereço da imagem do header que foi adicionado dinamicamente -->
            <h1><?php bloginfo('description'); ?></h1> <!-- descrição do site -->
        
        <?php endif; ?>

</header>