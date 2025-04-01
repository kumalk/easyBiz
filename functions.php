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

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array( 'jquery' ), '5.3.0', true );

}
add_action( 'wp_enqueue_scripts', 'easyBiz_assets' );


// Enabling custom 

function mytheme_setup() {
    add_theme_support('custom-logo', array(
        /*'height'      => 100, // Set the default height
        'width'       => 300, // Set the default width*/
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


// Enabling to select 3 custom colors to  the user so site can be easily customized to match with business brand color
function mytheme_customize_register($wp_customize) {
    // Primary Color
    $wp_customize->add_setting('primary_color', array(
        'default'   => '#3498db', // Default blue color
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Primary Color', 'mytheme'),
        'section'  => 'colors',
        'settings' => 'primary_color',
    )));

    // Secondary Color
    $wp_customize->add_setting('secondary_color', array(
        'default'   => '#2ecc71', // Default green color
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __('Secondary Color', 'mytheme'),
        'section'  => 'colors',
        'settings' => 'secondary_color',
    )));

    // Accent Color
    $wp_customize->add_setting('accent_color', array(
        'default'   => '#e74c3c', // Default red color
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'label'    => __('Accent Color', 'mytheme'),
        'section'  => 'colors',
        'settings' => 'accent_color',
    )));
}
add_action('customize_register', 'mytheme_customize_register');


function mytheme_customize_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo get_theme_mod('primary_color', '#3498db'); ?>;
            --secondary-color: <?php echo get_theme_mod('secondary_color', '#2ecc71'); ?>;
            --accent-color: <?php echo get_theme_mod('accent_color', '#e74c3c'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');


?>
