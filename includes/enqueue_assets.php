<?php

add_action('wp_enqueue_scripts', function() {
	// Styles
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css');

	// Scripts
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', 'jquery');
});

?>