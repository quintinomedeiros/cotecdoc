<?php
    function learningWordPress_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
    'menu-lateral' => __('Menu Lateral'),
));

?>