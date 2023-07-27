<?php

// Enqueue Requirement Files
function enqueue_css_js_fonts()
{
    // Google Fonts Enqueue
    wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap', array() );
    wp_enqueue_style( 'Barlow', 'https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&amp;display=swap', array() );
    wp_enqueue_style( 'Cormorant+Garamond', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap', array() );
    wp_enqueue_style( 'Comfortaa', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&amp;display=swap', array() );
    wp_enqueue_style( 'Barlow+Condensed', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&amp;display=swap', array() );

    // Enqueue Plugins CSS File
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css' );

    // Enqueue Custom CSS File
    wp_enqueue_style( 'jalal-custom', get_template_directory_uri() . '/css/style.css' );

    // Enqueue JS and jQuery Files
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_css_js_fonts' );
