<?php get_header(); ?> <!-- pega o header.php -->

    <h1><?php bloginfo('name'); ?></h1>     <!-- mostra o nome do blog dinamicamente -->
    <strong><?php bloginfo('description'); ?></strong>     <!-- mostra a descrição do blog -->

    <!-- POSTS -->
    <?php while(have_posts()) : the_post();  ?> <!-- ver se tem posts ou não -->
        
        <h1 class="titulo-post"><?php the_title(); ?></h1> <!-- pega o titulo do post -->
        <p class="post"><?php the_content("Continue lendo, baby..."); ?></p> <!-- pega o conteudo do post -->
        
        <?php endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->

<?php get_footer(); ?> <!-- pega o footer.php -->