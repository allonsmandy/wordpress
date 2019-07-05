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

        <?php if(has_header_image() && is_home()) : ?>  <!-- exibe se tiver uma imagem no header e se estiver na home do site -->

            <img src="<?php header_image(); ?>"> <!-- pega o endereço da imagem do header que foi adicionado dinamicamente -->
            <h1><?php bloginfo('description'); ?></h1> <!-- descrição do site -->
        
        <?php endif; ?>

</header>