<?php get_header() ?>
    <h1>Recettes Promo</h1>
    <?php if (have_posts()) : ?>  
        <div class="idearecette">
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>
                <div class="lignerecette">
                    <?php the_category()?>
                    <a href="<?php the_permalink()?>"> <img class="imagerecette" src=<?php the_post_thumbnail(); ?> </a>
                    <h2 class="namerecette"><?php the_title()?></h2>
                    <?php
                    if (get_post_meta(get_the_id(), 'promomarmishlag', true)) {
                    ?>
                        <p>contenue en promo</p>
                    <?php
                    }
                    ?>
                </div>
            <?php endwhile ?>
        </div>
    <?php endif; ?>
<?php get_footer() ?>