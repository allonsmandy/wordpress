<?php 
if(function_exists('get_field')): //só exibe as funçoes get field se o plugin adf estiver ativado
    if(get_field('id_video')): ?>
    <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/<?php the_field('id_video'); ?>"
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
<?php endif; 
    endif; ?>

<h2> <?php the_title(); ?> </h2>
<p> <?php the_content(); ?> </p>

<p>Categorias: <?php the_category(', ') ?></p>

<!--  Exibe o custom-field caso o slug cadastrado seja post_level e tenha a categoria desenvolvimento-->
<?php 
if(function_exists('get_field')): 
if(get_field('post_level') && has_category('Desenvolvimento')): ?>
    Nivel do post: <?php the_field('post_level'); ?>
<?php endif; 
    endif; ?>

<!-- relacionados -->
<?php 
    get_template_part('templates/cards', 'mini-relacionados');
?>

<!-- autores -->
<?php
    get_template_part('templates/card', 'autores');
?>

<a href="<?php bloginfo('url'); ?>">Voltar para a home </a>