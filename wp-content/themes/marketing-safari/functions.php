<?php

if (!defined('ABSPATH')) {
    exit;
}

function ms_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'ms_setup');

function ms_assets() {
    $style_path  = get_stylesheet_directory() . '/style.css';
    $script_path = get_template_directory() . '/js/main.js';

    wp_enqueue_style(
        'ms-style',
        get_stylesheet_uri(),
        [],
        file_exists($style_path) ? (string) filemtime($style_path) : '1.0.0'
    );

    wp_enqueue_script(
        'ms-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        file_exists($script_path) ? (string) filemtime($script_path) : '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'ms_assets');

function ms_image_url($file_name = '') {
    return trailingslashit(get_template_directory_uri() . '/images') . ltrim((string) $file_name, '/');
}

function ms_content($key, $default = '') {
    if (function_exists('get_field')) {
        $acf_value = get_field($key, 'option');
        if ($acf_value !== null && $acf_value !== false && $acf_value !== '') {
            return $acf_value;
        }
    }

    return get_theme_mod($key, $default);
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Website Inhalte',
        'menu_title' => 'Website Inhalte',
        'menu_slug'  => 'ms-options',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
}

add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 100);
