<?php

function get_page_slug() {
    $page = get_queried_object();
    $slug = $page->post_name;

    if ($slug == 'demo') {
        $slug = 'demo-page';
    }

    return $slug;
}

?>