<?php get_header(); ?>

<?php get_template_part('partials/categories', 'post')?>


<?php if (have_posts()) : ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while (have_posts()) : the_post();
         get_template_part('partials/post-card', 'post');
    endwhile; ?>
    </div>

    <div class="mt-4">

        <?= marmislagPaginateLinks(); ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>