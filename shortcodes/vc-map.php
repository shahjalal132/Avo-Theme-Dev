<!-- ========== Start Slider Shortcode Integration ========== -->
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

?>

<!-- ========== End Slider Shortcode Integration ========== -->

<!-- ========== Start About Shortcode Integration ========== -->
<?php

add_action( 'vc_before_init', 'vc_map_integration_for_about' );
function vc_map_integration_for_about()
{
    vc_map( array(
        'name'     => __( 'Avo About', 'avo' ),
        'base'     => 'about',
        'category' => __( 'Avo', 'avo' ),
        'icon'     => '',
        'params'   => array(
            array(
                'param_name'  => 'about_me_text',
                'type'        => 'textfield',
                'description' => __( 'Enter about me text', 'avo' ),
                'heading'     => __( 'About Me' ),
                'value'       => __( 'About Me', 'avo' ),
            ),
            array(
                'param_name'  => 'main_title',
                'type'        => 'textfield',
                'description' => __( 'Enter main title', 'avo' ),
                'heading'     => __( 'Title' ),
                'value'       => __( 'My mission is design develop the best Websites around.', 'avo' ),
            ),
            array(
                'param_name'  => 'download_cv',
                'type'        => 'textfield',
                'description' => __( 'Download CV', 'avo' ),
                'heading'     => __( 'Download CV' ),
                'value'       => __( 'Download C.V', 'avo' ),
            ),
            array(
                'param_name'  => 'download_cv_link',
                'type'        => 'textfield',
                'description' => __( 'Download CV Link', 'avo' ),
                'heading'     => __( 'Download CV Link' ),
                'value'       => __( '#', 'avo' ),
            ),
            array(
                'param_name'  => 'skill1',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill', 'avo' ),
                'heading'     => __( 'Skill' ),
                'value'       => __( 'UI / UX Design', 'avo' ),
            ),
            array(
                'param_name'  => 'skill1_progress',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill Progress', 'avo' ),
                'heading'     => __( 'Skill Progress' ),
                'value'       => __( '80%', 'avo' ),
            ),
            array(
                'param_name'  => 'skill2',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill', 'avo' ),
                'heading'     => __( 'Skill' ),
                'value'       => __( 'Development', 'avo' ),
            ),
            array(
                'param_name'  => 'skill2_progress',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill Progress', 'avo' ),
                'heading'     => __( 'Skill Progress' ),
                'value'       => __( '90%', 'avo' ),
            ),
            array(
                'param_name'  => 'skill3',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill', 'avo' ),
                'heading'     => __( 'Skill' ),
                'value'       => __( 'Graphic Design', 'avo' ),
            ),
            array(
                'param_name'  => 'skill3_progress',
                'type'        => 'textfield',
                'description' => __( 'Enter Skill Progress', 'avo' ),
                'heading'     => __( 'Skill Progress' ),
                'value'       => __( '85%', 'avo' ),
            ),
        ),
    ) );
}

?>
<!-- ========== End About Shortcode Integration ========== -->