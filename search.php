<?php get_header(); ?>

    <section>

        <?php if(have_posts()): ?>
            
            <h2>Resultado da tua busca</h2>

        <?php while(have_posts()) : the_post(); 
            get_template_part('templates/card', 'home');
        endwhile; 
        else: ?>

            <h2>Nenhum resultado foi encontrado, meu bem :(</h2>
            <p>Realize uma nova consulta :)</p>
            <?php get_search_form(); ?>
            <a href="<?php bloginfo('url'); ?>">Voltar para página iniciail :)</a>

        <?php endif; ?>

    </section>

<?php get_footer(); ?>