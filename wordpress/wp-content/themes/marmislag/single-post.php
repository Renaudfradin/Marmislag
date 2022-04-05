<?php get_header(); ?>

<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <div class="card">
                    <a class="btn btn-primary mb-4 mt-4" href="http://localhost:5555/thumbnail?postId='.<?php the_ID(); ?>.'" role="button">Gestion de l'image</a>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                    </div>
                </div>
        <?php endwhile; ?>
<?php endif; ?>


<div class="card mt-4 mb-4">
    <div class="card-header"><h2>Commentaires</h2></div>
    <div class="card-body">
        <p> <?php comments_template();?></p>
    </div>
</div>


<?php get_footer(); ?>
