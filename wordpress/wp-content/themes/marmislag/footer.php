<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Footer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div style="height:10px;">

                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'container' => false
                ]); ?>
            </div>

        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php wp_footer(); ?>