<?php get_header(); ?>

    <h2>Oi meu bem, tu tá na pagina da autora: 
        <?php the_author_meta('display_name'); ?> <!-- exibe nome do autor do usuario no wordpress -->
    </h2>

    <div>
        <h3>informações da autora hihi</h3>
        <?php echo get_avatar(get_the_author_meta('ID')); ?> <!-- exibe o avatar do autor que estás no gravatar -->
        <span><?php the_author_meta('description'); ?></span> <!-- descrição do autor -->
        <span><?php the_author_meta('user_login'); ?></span> <!-- login do autor -->
        <span><?php the_author_meta('user_email'); ?></span> <!-- email do autor -->
    </div>

      <!-- POSTS -->
      <?php while(have_posts()) : the_post();   // ver se tem posts ou não 
        
        get_template_part('templates/card', 'archive');
        
        endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->

<?php get_footer(); ?>