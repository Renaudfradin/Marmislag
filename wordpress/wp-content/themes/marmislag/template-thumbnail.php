<?php
/**
 * Template Name: Modèle gestion d'images
 * Template Post Type: page, post
 * Description: Un modèle de page pour la gestion des images
 */
?>

<?php get_header(); ?>

    <div class="container">
        <h2>Page de gestion de l'image</h2>
    </div>


<?php get_template_part('partials/thumbnail', 'post')?>

<?php get_footer(); ?>