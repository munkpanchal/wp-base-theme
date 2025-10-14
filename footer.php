<footer class="site-footer bg-gray-800 text-white mt-12">
        <div class="container max-w-6xl mx-auto px-4 py-8">
            <div class="footer-content grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="footer-section">
                    <h3 class="text-lg font-semibold mb-4"><?php bloginfo('name'); ?></h3>
                    <p class="text-gray-300 text-sm">
                        <?php 
                        $description = get_bloginfo('description', 'display');
                        echo $description ? $description : 'A WordPress website powered by modern technology.';
                        ?>
                    </p>
                </div>

                <div class="footer-section">
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu space-y-2',
                        'container' => false,
                        'fallback_cb' => false,
                        'link_before' => '<span class="text-gray-300 hover:text-white transition-colors text-sm">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </div>

                <div class="footer-section">
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="contact-info text-gray-300 text-sm space-y-2">
                        <p>Email: info@<?php echo parse_url(home_url(), PHP_URL_HOST); ?></p>
                        <p>Website: <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors"><?php echo parse_url(home_url(), PHP_URL_HOST); ?></a></p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom border-t border-gray-700 mt-8 pt-6 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                    <?php if (!is_user_logged_in()) : ?>
                        | <a href="<?php echo wp_login_url(); ?>" class="hover:text-white transition-colors">Login</a>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>