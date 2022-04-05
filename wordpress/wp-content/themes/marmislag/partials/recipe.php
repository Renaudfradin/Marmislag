<div class="container mt-4">
    <form action="<?= home_url('admin-post.php'); ?>" method="post">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titre</label>
            <input type="text" class="form-control" id="inputTitle" name="title">
        </div>
        <div class="mb-3">
            <label for="inputContent" class="form-label">Contenu</label>
            <input type="text" class="form-control" id="inputContent" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="redirect_to" value="/">
    </form>
</div>