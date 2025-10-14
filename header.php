<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header bg-white shadow-md">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="header-content flex items-center justify-between py-4">
                <div class="site-branding">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h1 class="site-title text-2xl font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-900 hover:text-blue-600 transition-colors">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                        <?php 
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) : ?>
                            <p class="site-description text-gray-600 text-sm mt-1"><?php echo $description; ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <nav class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'primary-menu flex space-x-6',
                        'container' => false,
                        'fallback_cb' => false,
                        'link_before' => '<span class="text-gray-700 hover:text-blue-600 transition-colors">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </nav>

                <div class="header-search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>