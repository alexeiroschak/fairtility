<?php

function get_page_slug() {
    $page = get_queried_object();
    return $page->post_name;
}

?>