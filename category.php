<?php get_header(); ?>

    <h2 class="title-category">Hey baby, tu estás na categoria:
        <?php single_cat_title(); ?> <!-- titulo da categoria -->
    </h2>
    <span><?php echo category_description(); ?></span> <!-- descrição da categoria -->

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