<?php
/**
 * Template Name: Modèle recipe editor
 * Template Post Type: page, post
 * Description: Un modèle de page pour éditer une recette
 */
?>

<?php get_header(); ?>

<div class="container mb-4">
    <h2>Page d'édition de recette</h2>
</div>

<?php echo do_shortcode( " [forminator_form id='104']" ); ?>

<?php get_footer(); ?>
