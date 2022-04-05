<?php get_header() ?>
    <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>
            <div class="">
                
                    <h2 class=""><?php the_title()?></h2>
                    <p class=""><?php the_content(); ?></p>

                    <img class="" src=<?php the_post_thumbnail(); ?>

                <?php
                    if (get_post_meta(get_the_id(), 'promomarmishlag', true)) {
                    ?>
                        <p>contenue en promo</p>
                    <?php
                    }
                    ?>
            </div>
        <?php endwhile ?>
    <?php endif; ?>
<?php get_footer() ?>