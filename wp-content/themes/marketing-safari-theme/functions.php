<?php
/**
 * Marketing Safari Theme functions and definitions
 *
 * @package Marketing_Safari
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme version for cache busting
if (!defined('MARKETING_SAFARI_VERSION')) {
    define('MARKETING_SAFARI_VERSION', '1.0.0');
}

/**
 * Theme Setup
 */
add_action('after_setup_theme', function() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style']);
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    
    // Register navigation menus
    register_nav_menus([
        'primary' => esc_html__('Primary Menu', 'marketing-safari'),
        'footer'  => esc_html__('Footer Menu', 'marketing-safari'),
    ]);
    
    // Load text domain
    load_theme_textdomain('marketing-safari', get_template_directory() . '/languages');
});

/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', function() {
    // Google Fonts
    wp_enqueue_style('marketing-safari-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap', [], null);
    
    // Main stylesheet (compiled Tailwind)
    wp_enqueue_style('marketing-safari-style', get_template_directory_uri() . '/assets/css/main.css', [], MARKETING_SAFARI_VERSION);
    
    // Main JavaScript
    wp_enqueue_script('marketing-safari-script', get_template_directory_uri() . '/assets/js/main.js', [], MARKETING_SAFARI_VERSION, true);
});

/**
 * Disable WordPress default styles
 */
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}, 100);

/**
 * Add custom image sizes
 */
add_action('after_setup_theme', function() {
    add_image_size('hero', 1920, 1080, true);
    add_image_size('card', 600, 400, true);
    add_image_size('slider', 800, 600, true);
});

/**
 * Disable admin bar for non-admins
 */
add_filter('show_admin_bar', function($show) {
    if (!current_user_can('administrator')) {
        return false;
    }
    return $show;
});

/**
 * ACF Options Page (if ACF is installed)
 */
add_action('init', function() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug'  => 'theme-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ]);
    }
});
