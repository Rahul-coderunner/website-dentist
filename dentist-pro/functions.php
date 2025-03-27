<?php
// थीम सपोर्ट और सेटअप
function dentist_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'dentist-pro'),
    ));

    // कस्टम पोस्ट टाइप्स
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('Service'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio'),
            'singular_name' => __('Portfolio Item'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    register_post_type('reviews', array(
        'labels' => array(
            'name' => __('Reviews'),
            'singular_name' => __('Review'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
    ));
}
add_action('after_setup_theme', 'dentist_theme_setup');

// स्टाइल और स्क्रिप्ट्स जोड़ना
function dentist_theme_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'dentist_theme_scripts');
?>