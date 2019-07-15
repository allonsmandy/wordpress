<h1><?php the_title(); ?> </h1>
<?php the_content(); ?>


<!-- CARREGANDO INFORMAÇÕES DO OBJETO POST -->

<?php 
    $extras = get_field('extras');
    if($extras):
?>

<h2>Saiba mais</h2>
<?php foreach($extras as $post): ?>
<details>
    <?php
        setup_postdata($post); ?>
        <summary> <?php the_title(); ?> </summary>
        <p> <?php the_content();?> </p>

        <?php wp_reset_postdata();
        ?>
</details>
<?php endforeach;
        endif; ?>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>