<div class="card">
    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="..." style="max-width: 300px; height: auto;">
    <div class="card-body">

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
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire plus</a>
    </div>
</div>