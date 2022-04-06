<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex justify-content-center" href="/">Marmishlag</a>

        <div class="collapse navbar-collapse flex-wrap" style="display:flex; justify-content: space-around;" id="navbarSupportedContent">

            <div class="ml-4 mr-4" style="width:40%;">
                <?php get_search_form(); ?>
            </div>

            <div class="ml-4 mr-4 d-flex justify-content-around flex-wrap" >
                <a class="btn btn-secondary mb-4 mt-4 mr-3" href="http://localhost:5555/login" role="button">Connexion</a>
                <a class="btn btn-secondary mb-4 mt-4 mr-3" href="http://localhost:5555/register" role="button">Inscription</a>
                <a class="btn btn-danger mb-4 mt-4 mr-3" href="http://localhost:5555/wp-login.php?action=logout" role="button">Déconnexion</a>
                <a class="btn btn-primary mb-4 mt-4 ml-4 mr-4" href="http://localhost:5555/creation-recette/" role="button">Créer une recette</a>

            </div>
        </div>
    </div>
</nav>


<div class="container p-5">