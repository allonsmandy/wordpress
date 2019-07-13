<h1><?php the_title(); ?> </h1>
<?php the_content(); ?>


<!-- CARREGANDO INFORMAÇÕES DO OBJETO POST -->

<?php 
    $post = get_field('extras');
    if($post):
?>

<h2>Saiba mais</h2>
<details>
    <?php
        setup_postdata($post); ?>
        <summary> <?php the_title(); ?> </summary>
        <p> <?php the_content();?> </p>

        <?php wp_reset_postdata();
        endif; ?>
</details>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>