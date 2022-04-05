<?php

function marmislag_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Navigation dans le header');
    register_nav_menu('footer', 'Navigation dans le footer');
}

add_action('after_setup_theme', 'marmislag_theme_support');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], false, true);
});

add_filter('nav_menu_css_class', function () {
    echo '<pre>';
});

function marmislag_nav_menu_css_class($classes):array
{
    $classes[] = 'nav-items';
    return $classes;
}

// navbar link implémentation

function marmislag_nav_menu_link_attributes($atts)
{
    $atts['class'] = 'nav-link';
    return $atts;
}

// pagination implémentation

function marmislagPaginateLinks()
{
    $paginateLink = paginate_links(['type' => 'array']);
    if ($paginateLink) {
        ob_start();
        echo '<nav aria-label="Page navigation" class="mt-3">';
        echo '<ul class="pagination">';

        foreach ($paginateLink as $link) {
            echo sprintf('<li class="page-item %s">%s</li>',
                str_contains($link, 'current') ? 'active' : '',
                str_replace('page-numbers', 'page-link', $link));
        }

        echo "</ul>";
        echo "</nav>";

        return ob_get_clean();
    }
}

// metabox implémentation

function marmislagAddLimite() {
    add_meta_box(
        'limite',
        'Contenu limité dans le temps',
        'marmislag_metabox_render',
        'post',
        'side'
    );
}

add_action('add_meta_boxes', 'marmislagAddLimite');

function marmislag_metabox_render()
{
    $checked = get_post_meta($_GET['post'],'limitemarmishlag',true) ? 'checked' : null;
    ?>
    <input type="checkbox" value="true" name="limite" id="limite" <?= $checked; ?>>
    <label for="limite">Contenu limité</label>
    <?php
}

function marmislag_save_limite($post_id){
    if ($_POST['limite'] === 'true') {
        update_post_meta($post_id,'limitemarmishlag','true');
    }else{
        delete_post_meta($post_id,'limitemarmishlag');
    }
}

add_action('save_post', 'marmislag_save_limite');

if (get_post_meta(get_the_id(), 'limitemarmishlag', true)) {
    ?>
    <p>contenu limité</p>
    <?php
}

// taxonomy implementation

add_action('init', 'marmislag_register_type_taxonomy');

function marmislag_register_type_taxonomy()
{
    $labels = [
        'name' => 'Types',
        'singular_name' => 'Types',
        'search_items' => 'Rechercher un type',
        'all_items' => 'Tous les types'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ];

    register_taxonomy('style', ['post'], $args);
}

add_action('init', function() {
    wp_insert_term('Fromage', 'style');
    flush_rewrite_rules();
});

add_action('init', function() {
    wp_insert_term('Sushi', 'style');
    flush_rewrite_rules();
});

// Custom post type implémentation

add_action('init', 'marmislag_register_recipe');

function marmislag_register_recipe()
{
    $labels = [
        'name' => 'recipe',
        'singular_name' => 'recipe',
        'search_items' => 'Rechercher une recette',
        'all_items' => 'Toutes les recettes'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-tickets',
        'supports' => ['title', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'date', 'comments'],
        'has_archive' => true,
        'taxonomies' => ['style'],
        'capabilities' => array(
                'edit_others_posts' => 'manage_recipe',
                'delete_post' => 'manage_recipe',
        )
    ];

    register_post_type('testCPT', $args);
}

// Custom listing implementation

add_filter('manage_posts_columns', function($col) {
    return array(
        'title' => $col['title'],
        'image' => 'Image',
        'author' => $col['author'],
        'taxonomy-style' => $col['taxonomy-style'],
        'date' => $col['date'],
        'comments' => '<span class="vers comment-grey-bubble" title="' . esc_attr__( 'Comments' ) . '"><span class="screen-reader-text">' . __( 'Comments' ) . '</span></span>',
    );
});

add_action('manage_posts_custom_column', function($col, $post_id) {
    if($col === 'image') {
        the_post_thumbnail('thumbnail', $post_id);
    }
}, 10, 2);

// role implementation

add_action('init', function() {
    add_role('recipe_manager', 'Recipe manager', [
            'read' => true,
            'manage_recipe' => true,
    ]);
});

add_action('init', 'remove_admin_bar');
function remove_admin_bar() {
    if( !current_user_can('subscriber' && !is_admin())) {
        show_admin_bar(false);
    }
}

// create user implementation

wp_insert_user(array(
    'user_pass' => $_POST['password'],
    'user_login' => $_POST['name'],
    'user_email' => $_POST['email'],
    'role' => 'author'
));

add_action( 'template_redirect', 'redirect_to_specific_page' );

// redirection vers le login

function redirect_to_specific_page() {

    if ( is_page('wp-login.php?action=logout') && ! is_user_logged_in() ) {

        wp_redirect( 'http://localhost:5555/login', 301 );
        exit;
    }
}

$post_args = array(
        'post_content' => $_POST['content'],
        'post_title' =>$_POST['title'],
        'post_status' => 'publish',
        'post_author' => get_current_user_id(),
);

wp_insert_post($post_args);

// upload d'image

    add_action('admin_post_upload', function () {
        if(wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload')) {

            $attachment_id = media_handle_upload('my_image_upload', 83);

            if ( is_wp_error($attachment_id)) {
                wp_redirect($_POST['_wp_http_referer'] . '?status=error');
            } else {
                set_post_thumbnail(83, $attachment_id);
                wp_redirect($_POST['_wp_http_referer'] . '?status=' . $attachment_id);
            }
        } else {
            wp_redirect($_POST['_wp_http_referer'] . '?status=no_nonce');
        }
    });