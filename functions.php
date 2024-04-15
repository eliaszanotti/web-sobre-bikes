<?php
include_once(get_template_directory() . '/functions/frame-custom-post.php');
include_once(get_template_directory() . '/functions/woocommerce.php');

//  Theme support
function sbrAfterSetupTheme() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    register_nav_menu('main-menu', 'Menu principal');
    register_nav_menu('footer-menu', 'Menu pied de page');
}

//  Enqueue styles
function sbrEnqueueStyles() {
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_script('js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.1', true);
    wp_enqueue_script('wc', get_template_directory_uri() . '/js/woocommerce.js', array('jquery'), '1.4', true);
}

add_action('after_setup_theme', 'sbrAfterSetupTheme');
add_action('wp_enqueue_scripts', 'sbrEnqueueStyles');

add_filter('show_admin_bar', '__return_false'); // hide admin bar