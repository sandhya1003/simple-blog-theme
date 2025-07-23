<?php
function simpleblog_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'simpleblog'),
    ));
}
add_action('after_setup_theme', 'simpleblog_setup');

function simpleblog_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'simpleblog_scripts');
