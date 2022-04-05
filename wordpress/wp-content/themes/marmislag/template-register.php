<?php
/**
 * Template Name: Modèle register
 * Template Post Type: page, post
 * Description: Un modèle de page pour le register
 */
?>

<?php get_header(); ?>

    <div class="container">
        <h2>Page d'inscription</h2>
    </div>

<?php get_template_part('partials/register', 'post')?>

<?php get_footer(); ?>