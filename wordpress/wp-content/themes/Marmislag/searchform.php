<form class="nav_form" action="<?php esc_url(home_url('/')); ?>">
    <input class="nav_input" type="search" placeholder="Je recherche" name="s" value="<?= get_search_query() ?>">
</form>