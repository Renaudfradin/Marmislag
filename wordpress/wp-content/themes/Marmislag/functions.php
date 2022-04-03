<?php
add_action('after_setup_theme','marmislag_theme_support');
add_action('wp_enqueue_scripts' , 'custom_css_js');

function marmislag_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','Navigation dans le header');
    
}

function custom_css_js(){
    wp_enqueue_style('style-theme', get_template_directory_uri( __FILE__ ).'/style.css');
    wp_enqueue_style('style-theme1', get_template_directory_uri( __FILE__ ).'/assets/css/posts.css');
    wp_enqueue_style('style-theme2', get_template_directory_uri( __FILE__ ).'/assets/css/single-post.css');
    wp_enqueue_style('style-theme3', get_template_directory_uri( __FILE__ ).'/assets/css/navebar.css');
}