<?php

/**
 * Register navigation menus
 */
function nav_menu_register()
{
    register_nav_menus(array(
        "primary" => "Primary Navigation",
        "footer" => "Footer Navigation",
    ));
    
    // Add WooCommerce support
    add_theme_support("woocommerce");
    
    // WooCommerce gallery features
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action("after_setup_theme", "nav_menu_register");

// Disable Contact Form 7 auto-paragraph
add_filter('wpcf7_autop_or_not', '__return_false');
