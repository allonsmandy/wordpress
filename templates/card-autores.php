<?php
    $autores = get_field('autores_post');
    if($autores):
?>
<div class="autores">
    <span>Autores</span>

    <?php foreach($autores as $autor):?>
        <h2><?php echo $autor['display_name']; ?></h2>
        <figure>
            <?php echo $autor['user_avatar']; ?>
        </figure>
    <?php endforeach; ?>
</div>

<?php endif;?>