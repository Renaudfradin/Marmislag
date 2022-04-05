<?php
/*
  Plugin Name: MarmishPlugin
  Plugin URI: 
  Description: Permet d'ajouter une meta box promo sur les articles
  Author: Groupe10
  Author URI: 
  Version: 1.0
*/
if ( !defined('ABSPATH') ) {
    die;
}

add_action('add_meta_boxes','add_metabox_marmishlag');

function add_metabox_marmishlag(){
  add_meta_box(
    'promo',
    'Contenue en promo',
    'metabox_render',
    'post',
    'side'
  );
}


function metabox_render(){
  $checked = get_post_meta($_GET['post'],'promomarmishlag',true) ? 'checked' : null;
  ?>
    <input type="checkbox" value="true" name="promo" id="promo" <?= $checked; ?>>
    <label for="promo">Contenu en promo</label>
  <?php
}

function save_metabox_marmishlag($post_id){
  if ($_POST['promo'] === 'true') {
    update_post_meta($post_id,'promomarmishlag','true');
  }else{
    delete_post_meta($post_id,'promomarmishlag');
  }
}

add_action('save_post','save_metabox_marmishlag');

if (get_post_meta(get_the_id(), 'promomarmishlag', true)) {
  ?>
    <p>contenue en promo</p>
  <?php
}

?>
