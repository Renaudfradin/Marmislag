<?php get_header() ?>
    <h1>Recettes</h1>
    <?php if (have_posts()) : ?>  
        <div class="col">
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>
                <div class="card">
                    <div class="card_div">
                        <?php the_category()?>
                    </div>
                    <a href="<?php the_permalink()?>"> <img class="card_img" src=<?php the_post_thumbnail(); ?> </a>
                    <div class="card_div_title">
                        <h2 class="card_title"><?php the_title()?></h2>
                    </div>
                    <br>
                </div>
            <?php endwhile ?>
        </div>
    <?php endif; ?>
<?php get_footer() ?>