<!-- POSTS RELACIONADOS -->
<?php if(get_field('posts_relacionados')) : ?> <!-- só exibe se existir post_relacionado -->
    <h3>Post Relacionado</h3>
    <?php 
        $linkRelacionado = get_field('posts_relacionados');
    ?>

    <a href="<?php echo $linkRelacionado['url'] ?>" 
        target="<?php echo $linkRelacionado['target'] ?>">
        <?php echo $linkRelacionado['title']; ?>
    </a>
<?php endif; ?>

<!-- PÁGINAS RELACIONADAS -->
<?php $paginasRelacionadas = get_field('paginas_relacionadas'); 
    if($paginasRelacionadas) {
        echo '<h3>Páginas Relacionadas</h3>';
        foreach($paginasRelacionadas as $pagina) {
            echo $pagina . '<br>';
        }
    }
?>
