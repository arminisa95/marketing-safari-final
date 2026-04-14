<?php
/**
 * Marketing Safari Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme version
if (!defined('MARKETING_SAFARI_VERSION')) {
    define('MARKETING_SAFARI_VERSION', '1.0.0');
}

/**
 * Theme Setup
 */
add_action('after_setup_theme', function() {
    // Theme Support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    
    // Navigation Menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'marketing-safari'),
        'footer' => __('Footer Menu', 'marketing-safari'),
    ]);
    
    // Load Text Domain
    load_theme_textdomain('marketing-safari', get_template_directory() . '/languages');
});

/**
 * Enqueue Scripts and Styles
 */
add_action('wp_enqueue_scripts', function() {
    // Main Stylesheet
    wp_enqueue_style(
        'marketing-safari-style',
        get_stylesheet_uri(),
        [],
        MARKETING_SAFARI_VERSION
    );
    
    // Custom Scripts
    wp_enqueue_script(
        'marketing-safari-scripts',
        get_template_directory_uri() . '/js/main.js',
        [],
        MARKETING_SAFARI_VERSION,
        true
    );
});

/**
 * Disable WordPress Default Styles
 */
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}, 100);

/**
 * Custom Image Sizes
 */
add_action('after_setup_theme', function() {
    add_image_size('hero', 800, 600, true);
    add_image_size('gallery', 400, 400, true);
});
