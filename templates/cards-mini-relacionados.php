
<?php 
    $postsRelacionados = get_field("posts_relacionados");
    if($postsRelacionados) :
        ?> <h2> Posts Relacionados </h2> <?php
        foreach($postsRelacionados as $post) :
            setup_postdata($post); 
?>

        <?php the_post_thumbnail(); ?>
        <h4><?php the_title() ?></h4>

<?php   
        endforeach;
        wp_reset_postdata();
    endif;
?>