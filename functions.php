<?php
// Registering menu locations that appear on the menu management page in wp-admin.
function easyBiz_register_menus() {
    register_nav_menus( array(
        'top_nav'   => 'Top Navigation Menu',
        'secondary' => 'Secondary Top Menu',
        'footer'    => 'Footer Menu',
        'sidebar'   => 'Sidebar Menu',
    ) );
}
add_action( 'after_setup_theme', 'easyBiz_register_menus' );

// Enqueue styles and scripts for the theme.
function easyBiz_assets() {
    // Enqueue theme's default stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Enqueue custom theme styles
    wp_enqueue_style( 'easyBiz_styles', get_parent_theme_file_uri( '/assets/css/easyBiz_styles.css' ) );

    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.0', true );
}
add_action( 'wp_enqueue_scripts', 'easyBiz_assets' );
?>
