<h1><?php the_title(); ?> </h1>
<?php the_content(); ?>


<!-- CARREGANDO INFORMAÇÕES DO OBJETO POST -->
<?php
    $extras = get_field('extras');

    echo '<h3>' . $extras->post_title . '</h3>';
    echo $extras->post_content;
?>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>