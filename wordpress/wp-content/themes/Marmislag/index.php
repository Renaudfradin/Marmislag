<?php get_header() ?>
    <h1>hello world</h1>
    <?php if (have_posts()) : ?>  
        <div class="col">
            <?php while (have_posts()) : the_post(); ?>
                <div class="card">
                    <?php the_category()?>
                    <a href="<?php the_permalink()?>"> <img src=<?php the_post_thumbnail(); ?> </a>
                    <?php the_title()?>
                    <br>
                </div>
            <?php endwhile ?>
        </div>
    <?php endif; ?>
<?php get_footer() ?>