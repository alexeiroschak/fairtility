<?php

add_action('acf/init', function() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Theme Options'),
            'menu_title'    => __('Theme Options'),
            'menu_slug'     => 'theme-options'
        ));
    }
});

// Hide admin bar
add_filter( 'show_admin_bar', '__return_false' );

?>