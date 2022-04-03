<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<div class="">

<nav class="nav_home">
    <a href="/" class="nav_home_title"><p>Marmislag</p></a>
    <?php get_search_form(); ?>
    <button class="nav_btn_login"><a href="">log in</a></button>
    <button class="nav_btn_signup"><a href="">sign up</a></button>
   
</nav>
<body>