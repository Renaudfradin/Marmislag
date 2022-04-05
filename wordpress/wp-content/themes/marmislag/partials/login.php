
<div class="container mt-4">
    <form action="<?= home_url('wp-login.php'); ?>" method="post">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Adresse mail</label>
            <input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="log">
            <div id="emailHelp" class="form-text">Nous n'allons pas partager votre email.</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id=inputPassword" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="redirect_to" value="/">
    </form>
</div>