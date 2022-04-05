<?php
/**
 * Template Name: Modèle login
 * Template Post Type: page, post
 * Description: Un modèle de page pour le login
 */
?>

<?php get_header(); ?>

<div class="container mb-4">
    <h2>Page de connexion</h2>
</div>

<?php get_template_part('partials/login', 'post')?>

<?php get_footer(); ?>