<?php

add_action('wp_enqueue_scripts', function() {
	// Styles
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css', false, '1.4', 'all' );


	// Scripts
	wp_enqueue_script('youtube-iframe-api-js', 'https://www.youtube.com/iframe_api', [], FALSE, TRUE);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', 'jquery', FALSE, TRUE);
});

?>