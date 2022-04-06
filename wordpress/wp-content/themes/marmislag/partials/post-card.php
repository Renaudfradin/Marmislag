<div class="card mb-4 mr-2 ml-2">
    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="..." style="width: 250px; height: 150px;
    overflow: hidden;">
    <div class="card-body d-flex flex-column justify-content-end">

        <?php if (get_post_meta(get_the_ID(), 'promomarmishlag', true)) : ?>
            <div class="alert alert-primary" role="alert">
                Contenu Sponsorisé
            </div>
        <?php endif; ?>

        <?php if (get_post_meta(get_the_ID(), 'limitemarmishlag', true)) : ?>
            <div class="alert alert-danger" role="alert">
                Contenu édition limité
            </div>
        <?php endif; ?>

        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="d-flex flex-nowrap">
            <p class="mr-1"><small>Type(s) : </small></p>
            <p><small><?php the_terms(get_the_ID(), 'style'); ?></small></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire plus</a>
    </div>
</div>