<h2> <?php the_title(); ?> </h2>
<p> <?php the_content(); ?> </p>

<p>Categorias: <?php the_category(', ') ?></p>

<!--  Exibe o custom-field caso o slug cadastrado seja post_level e tenha a categoria desenvolvimento-->
<?php if(get_post_meta(get_the_ID(), 'post_level', true) && has_category('Desenvolvimento')): ?>
    Nivel do post: <?php echo get_post_meta(get_the_ID(), 'post_level', true); ?>
<?php endif; ?>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>