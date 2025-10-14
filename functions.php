<?php

if (!defined('ABSPATH'))
    exit;

// Define Vite development mode
define('IS_VITE_DEVELOPMENT', true);

/* Including Vite file for asset management */
include "inc/inc.vite.php";

/* Including menu configuration */
include "inc/menu.php";

/**
 * Theme Setup
 */
function custom_theme_setup() {
    // Add theme support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for wide and full width blocks
    add_theme_support('align-wide');
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * Enqueue styles and scripts
 */
function custom_theme_scripts() {
    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/**
 * Add custom image sizes
 */
function custom_theme_image_sizes() {
    add_image_size('custom-thumbnail', 300, 200, true);
    add_image_size('custom-medium', 600, 400, true);
    add_image_size('custom-large', 1200, 800, true);
}
add_action('after_setup_theme', 'custom_theme_image_sizes');

/**
 * Customize excerpt length
 */
function custom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/**
 * Customize excerpt more text
 */
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
