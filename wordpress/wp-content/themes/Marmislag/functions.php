<?php
add_action('after_setup_theme','marmislag_theme_support');
add_action('wp_enqueue_scripts' , 'custom_css_js');

function marmislag_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function custom_css_js(){
    wp_enqueue_style('style-theme', get_template_directory_uri( __FILE__ ).'/style.css');
    // wp_enqueue_style('bootstrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    // wp_enqueue_scripts('bootstrap_js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
}