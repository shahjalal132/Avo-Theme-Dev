<?php

add_action( 'vc_before_init', 'shortcode_integration_for_avo_theme' );

function shortcode_integration_for_avo_theme()
{
    vc_map( array(
        'name'     => __( 'Avo Slider', 'avo' ),
        'base'     => 'slider',
        'category' => __( 'Avo', 'avo' ),
        'params'   => array(
            array(
                'param_name'  => 'well_text',
                'type'        => 'textfield',
                'description' => __( 'Welcome Text here', 'avo' ),
                'heading'     => __( 'Welcome Text' ),
                'value'       => __( 'Hello, I\'m', 'avo' ),
            ),
            array(
                'param_name'  => 'name',
                'type'        => 'textfield',
                'description' => __( 'Enter your name', 'avo' ),
                'heading'     => __( 'Name' ),
                'value'       => __( 'Alex Smith', 'avo' ),
            ),
            array(
                'param_name'  => 'profession',
                'type'        => 'textfield',
                'description' => __( 'Enter your Profession', 'avo' ),
                'heading'     => __( 'Profession' ),
                'value'       => __( 'UI & UX Designer', 'avo' ),
            ),
            array(
                'param_name'  => 'fb_link',
                'type'        => 'textfield',
                'description' => __( 'Enter your Facebook Link', 'avo' ),
                'heading'     => __( 'Facebook Link' ),
                'value'       => __( '#', 'avo' ),
            ),
            array(
                'param_name'  => 'twitter',
                'type'        => 'textfield',
                'description' => __( 'Enter your Twitter Link', 'avo' ),
                'heading'     => __( 'Twitter Link' ),
                'value'       => __( '#', 'avo' ),
            ),
            array(
                'param_name'  => 'pinterest',
                'type'        => 'textfield',
                'description' => __( 'Enter your Pinterest Link', 'avo' ),
                'heading'     => __( 'Pinterest Link' ),
                'value'       => __( '#', 'avo' ),
            ),
            array(
                'param_name'  => 'behance',
                'type'        => 'textfield',
                'description' => __( 'Enter your Behance Link', 'avo' ),
                'heading'     => __( 'Behance Link' ),
                'value'       => __( '#', 'avo' ),
            ),
            array(
                'param_name'  => 'bg_img',
                'type'        => 'attach_image',
                'description' => __( 'Enter your Background Image', 'avo' ),
                'heading'     => __( 'Background Image' ),
                'value'       => __( '#', 'avo' ),
            ),
        ),
    ) );
}
