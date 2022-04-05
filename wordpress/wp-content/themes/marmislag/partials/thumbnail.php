<form id="featured_upload" method="post"
      action="<?= admin_url('admin-post.php');?>"
      enctype="multipart/form-data">
    <input type="file" name="my_image_upload" id="my_image_upload" multiple="false">
    <input type="hidden" name="action" value="upload">
    <input type="hidden" id="postId" name="postId" value="83">
    <?php wp_nonce_field('my_image_upload', 'my_image_upload_nonce') ?>
    <?php wp_referer_field(); ?>

    <input id="submit_my_imge_upload" name="submit_my_image_upload" type="submit" value="Upload">
</form>