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

if ( file_exists( dirname( __FILE__ ) . '/inc/custom-post-type.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/custom-post-type.php';
}

function avo_theme_functionality()
{
    // Add Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'post-thumbnails' );

    // Load Theme Textdomain Support
    load_theme_textdomain( 'avo-translate', get_template_directory() . '/languages' );

    // Register Navigation Menu
    register_nav_menu( 'primary-menu', __( 'Primary Menu', 'avo' ) );
}
add_action( 'after_setup_theme', 'avo_theme_functionality' );


