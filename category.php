<?php get_header(); ?>

    <!-- Se esiver na categoria design, carrega o banner -->
    <?php if(is_category('design')) : ?>
        <img src="<?php bloginfo('template_url'); ?>/img/banner-design.png" >
    <?php else: ?>
    <!-- se não, carrega o titulo -->

    <h2 class="title-category">Hey baby, tu estás na categoria:
        <?php single_cat_title(); ?> <!-- titulo da categoria -->
    </h2>
    <span><?php echo category_description(); ?></span> <!-- descrição da categoria -->
    
    <?php endif; ?>

       <!-- POSTS -->
       
       <?php while(have_posts()) : the_post();  //ver se tem posts ou não
        
        get_template_part('templates/card', 'archive');
        
        endwhile; ?>
    <!-- FIM DO LOOP DE POSTS -->


<?php get_footer(); ?>