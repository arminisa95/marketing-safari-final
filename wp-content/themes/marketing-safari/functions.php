<?php
if (!defined('ABSPATH')) exit;

function ms_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
}
add_action('after_setup_theme', 'ms_setup');

function ms_assets() {
    wp_enqueue_style('ms-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script('ms-main', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ms_assets');

// Remove WP block styles
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 100);
