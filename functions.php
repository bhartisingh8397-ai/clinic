<?php
/**
 * Dr. Praveen Lakra Skin Clinic functions and definitions
 */

function lakra_clinic_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lakra-clinic'),
    ));

    // Switch default core markup for search form, comment form, and comments
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'lakra_clinic_setup');

/**
 * Enqueue scripts and styles.
 */
function lakra_clinic_scripts()
{
    // Google Fonts
    wp_enqueue_style('lakra-clinic-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // AOS Animation Library
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), false, true);

    // Theme stylesheet
    wp_enqueue_style('lakra-clinic-style', get_stylesheet_uri(), array(), '2.1');

    // Initialize AOS
    wp_add_inline_script('aos-js', 'AOS.init({ duration: 1000, once: true, offset: 100 });');
}
add_action('wp_enqueue_scripts', 'lakra_clinic_scripts');
