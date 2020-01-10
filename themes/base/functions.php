<?php

function base_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'base_add_woocommerce_support');

function base_css() {
    wp_register_style('base-style', get_template_directory_uri() . '/style.css', [], '1.0.0');
    wp_enqueue_style('base-style');
}
add_action('wp_enqueue_scripts', 'base_css');

function base_custom_image() {
    add_image_size('slide', 1000, 800, ['center', 'top']);
    update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'base_custom_image');

function base_loop_shop_per_page() {
    return 6;
}
add_filter('loop_shop_per_page', 'base_loop_shop_per_page');