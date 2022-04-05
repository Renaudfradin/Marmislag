<?php
add_action('wp_enqueue_scripts' , 'custom_css_js');

add_action('after_setup_theme','marmislag_theme_support');

add_action('wp_enqueue_scripts', 'charger_bootstrap');

function marmislag_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
}

function custom_css_js(){
    wp_enqueue_style('style-theme', get_template_directory_uri( __FILE__ ).'/style.css');
    wp_enqueue_style('style-theme1', get_template_directory_uri( __FILE__ ).'/assets/css/posts.css');
    wp_enqueue_style('style-theme2', get_template_directory_uri( __FILE__ ).'/assets/css/single-post.css');
    wp_enqueue_style('style-theme3', get_template_directory_uri( __FILE__ ).'/assets/css/navebar.css');
}

function charger_bootstrap() {

    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . 'bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
    
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . 'bootstrap/css/bootstrap.min.css' );
    
}
    

