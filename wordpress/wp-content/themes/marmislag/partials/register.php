<div class="container mt-4">
    <form action="<?= home_url('wp-register.php'); ?>" method="post">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Adresse mail</label>
            <input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">Nous n'allons pas partager votre email.</div>
        </div>
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputUsername" name="name">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id=inputPassword" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="redirect_to" value="/">
    </form>
</div>