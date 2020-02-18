<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');

wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');