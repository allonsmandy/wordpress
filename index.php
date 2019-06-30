<?php get_header(); ?> <!-- pega o header.php -->

    <h1><?php bloginfo('name'); ?></h1>     <!-- mostra o nome do blog dinamicamente -->
    <strong><?php bloginfo('description'); ?></strong>     <!-- mostra a descrição do blog -->

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
        <span>Publicado pela linda autora: <?php the_author_posts_link(); ?></span> <!-- exibe o nome do autor do post com seu respectivo link -->
        <?php endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->

<?php get_footer(); ?> <!-- pega o footer.php -->