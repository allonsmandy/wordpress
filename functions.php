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

?>