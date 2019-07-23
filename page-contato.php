<?php 

/*
    Template Name: Contato
*/

get_header(); ?>

    <?php while(have_posts()) : the_post(); ?>

        <?php get_template_part('templates/card', 'contato'); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>