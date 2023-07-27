<?php

function avo_theme_functionality()
{
    // Add Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );

    // Load Theme Textdomain Support
    load_theme_textdomain( 'avo-translate', get_template_directory() . '/languages' );

    // Register Navigation Menu
    register_nav_menu( 'primary-manu', __( 'Primary Menu', 'avo' ) );
}
add_action( 'after_setup_theme', 'avo_theme_functionality' );
