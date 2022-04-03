<?php get_header() ?>
    <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>
            <div class="card_single">
                <div class="card_single_left">
                    <h2 class="card_single_title"><?php the_title()?></h2>
                    <p class="card_single_content "><?php the_content(); ?></p>
                </div>
                <div class="card_single_right">
                    <img class="card_single_img" src=<?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif; ?>
<?php get_footer() ?>