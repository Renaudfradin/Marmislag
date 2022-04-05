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
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div style="height:10px;" class="ml-4 mr-4">

                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'container' => false
                ]); ?>
            </div>
            <div class="ml-4 mr-4">
                <?php get_search_form(); ?>
            </div>

            <a class="btn btn-primary mb-4 mt-4" href="http://localhost:5555/creation-recette/" role="button">Créer une recette</a>

        </div>
    </div>
</nav>


<div class="container p-5">