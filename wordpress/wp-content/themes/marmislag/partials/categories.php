<div class="mt-3 mb-4">
    <ul class="list-group list-group-horizontal text-center">
        <?php
        $terms = get_terms(['taxonomy' => 'style']);

        foreach ($terms as $term) {
            $active = get_query_var('style') === $term->slug ? active : '';

            echo '<a class="list-group-item list-group-item-action'. $active .'"
            href="'.get_term_link($term).'">' . $term->name . ' </a>';
        }
        ?>
    </ul>
</div>