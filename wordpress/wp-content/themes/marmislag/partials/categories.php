<div class="mt-3 mb-4">
    <ul class="list-inline text-center d-flex flex-wrap justify-content-center" style="gap:20px">
        <?php
        $terms = get_terms(['taxonomy' => 'style']);

        foreach ($terms as $term) {
            $active = get_query_var('style') === $term->slug ? active : '';

            echo '<a style="width:auto;" class="list-group-item list-group-item-action '. $active .'"
            href="'.get_term_link($term).'">' . $term->name . ' </a>';
        }
        ?>
    </ul>
</div>