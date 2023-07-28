<?php

// Requirement Files Requiring
if ( file_exists( dirname( __FILE__ ) . '/inc/enqueue.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/enqueue.php';
}

if ( file_exists( dirname( __FILE__ ) . '/inc/bs5-nav-walker.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/bs5-nav-walker.php';
}

if ( file_exists( dirname( __FILE__ ) . '/shortcodes/shortcodes.php' ) ) {
    require_once dirname( __FILE__ ) . '/shortcodes/shortcodes.php';
}

function avo_theme_functionality()
{
    // Add Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );

    // Load Theme Textdomain Support
    load_theme_textdomain( 'avo-translate', get_template_directory() . '/languages' );

    // Register Navigation Menu
    register_nav_menu( 'primary-menu', __( 'Primary Menu', 'avo' ) );
}
add_action( 'after_setup_theme', 'avo_theme_functionality' );

function Custom_sho_fun()
{
    return '<h2>Hello This is Shortcode</h2>';
}
add_shortcode( 'shahjalal', 'Custom_sho_fun' );
