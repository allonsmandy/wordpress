<?php the_post_thumbnail('thumb-post'); ?>
<h2> <?php the_title(); ?> </h2>

<?php the_content(); ?>

<aside>
    <h3>Onde nos encontrar :3</h3>

    <dl>
        <dt>Endereço</dt>
        <dd>
            <?php the_field("endereco"); ?> <!-- exibe a informação do contato com o the_field -->
        </dd>
        <dt>Cidade</dt>
        <dd>
            <?php the_field("cidade"); ?> 
        </dd>
        <dt>Estado</dt>
        <dd>
            <?php the_field("estado"); ?> 
        </dd>
        <dt>Telefone</dt>
        <dd>
            <a href="tel:<?php the_field("telefone"); ?>">
                <?php the_field("telefone"); ?>
            </a>
        </dd>
        <dt>E-mail</dt>
        <dd>
            <a href="mailto:<?php the_field("email"); ?>">
                <?php the_field("email"); ?>
            </a>
        </dd>
    </dl>

</aside>