<?php 

    add_theme_support('post-thumbnails'); //adiciona suporte a alguma funcionalidade, no caso, um campo para adicionar imagem destacada
    add_image_size('thumb-post', '700', '300', true);
    
    // habilita o painel de widget e disponibiliza uma area para cadastrar widgets
    register_sidebar(
        array(
            'name' => 'Sidebar homepage', 
            'id' => 'sidebar-principal'
            )
        ); 

    register_sidebar(
        array(
            'name' => 'Sidebar arquivo', 
            'id' => 'sidebar-archive'
            )
        );

    // backgrounds dinamicos

    $args = array ('default-color' => '#ccc'); //seta uma cor default do background
    add_theme_support('custom-background'); //adiciona suporte para background dinamico

    // header dinamico

    $default = array (
        'default-image' => get_template_directory_uri() . '/img/banner-design.png', //imagem padrao para o header
        'height' => 400,
        'width' => 1600,
        'header-text' => true,
        'video' => true
    );

    add_theme_support('custom-header', $default);

    // logo customizada
    $args_logo = array(
        'width' => '150',
        'height' => '150'
    );
    add_theme_support('custom-logo', $args_logo);
?>