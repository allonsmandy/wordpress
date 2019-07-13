<h1><?php the_title(); ?> </h1>
<?php the_content(); ?>


<!-- CARREGANDO INFORMAÇÕES DO OBJETO POST -->
<?php
    $post = get_field('extras');

    setup_postdata($post);
    echo '<h3>' . get_the_title() . '</h3>';
    echo get_the_content();
    wp_reset_postdata();
?>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>