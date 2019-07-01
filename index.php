<?php get_header(); ?> <!-- pega o header.php -->

    <h1><?php bloginfo('name'); ?></h1>     <!-- mostra o nome do blog dinamicamente -->
    <strong><?php bloginfo('description'); ?></strong>     <!-- mostra a descrição do blog -->

   <?php get_search_form(); ?>

    <!-- POSTS -->
    <?php while(have_posts()) : the_post();   // ver se tem posts ou não 
        
    get_template_part('templates/card', 'home');

     endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->

    <?php get_sidebar(); ?> <!-- chama a sidebar -->

<?php get_footer(); ?> <!-- pega o footer.php -->