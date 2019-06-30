<?php get_header(); ?>

    <?php while(have_posts()) : the_post(); ?>

        <h2> <?php the_title(); ?> </h2>
        <p> <?php the_content(); ?> </p>

        <a href="<?php bloginfo('url'); ?>">Voltar para a home </a>
        
    <?php endwhile; ?>

<?php get_footer(); ?>