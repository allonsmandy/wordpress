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
      <?php while(have_posts()) : the_post();  ?> <!-- ver se tem posts ou não -->
        
        <h1 class="titulo-post">
            <a href="<?php the_permalink(); ?>"> <!-- link do post em sua single page -->
                <?php the_title(); ?> <!-- pega o titulo do post -->
            </a>
        </h1>

        <span><?php the_category(', '); ?> </span> <!-- exibe as categorias do post -->
        <span><?php the_time('d/m/Y - h:i:s'); ?></span> <!-- exibe a data e hora do post -->

        <p class="post"><?php the_excerpt(); ?></p> <!-- faz um resumo do post com 55 palavras -->
        <?php endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->

<?php get_footer(); ?>