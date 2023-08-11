<!-- ========== Start Slider Shortcode Integration ========== -->
<?php
// VC_Map Integration for slider shortcode
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
// VC_Map Integration for about shortcode
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

<!-- ========== Start Services Shortcode integration ========== -->
<?php
// VC_Map Integration for service shortcode
add_action( 'vc_before_init', 'vc_map_integration_for_service2' );
function vc_map_integration_for_service2()
{
    vc_map( array(
        'name'     => __( 'Avo Service', 'avo' ),
        'base'     => 'services2',
        'category' => __( 'Avo', 'avo' ),
        'icon'     => '',
        'params'   => array(
            array(
                'param_name'  => 'subtitle',
                'type'        => 'textfield',
                'description' => __( 'Subtitle here', 'avo' ),
                'heading'     => __( 'Subtitle' ),
                'value'       => __( 'Best Featured', 'avo' ),
            ),
            array(
                'param_name'  => 'title',
                'type'        => 'textfield',
                'description' => __( 'Title here', 'avo' ),
                'heading'     => __( 'Title' ),
                'value'       => __( 'Services', 'avo' ),
            ),
        ),
    ) );
}

?>
<!-- ========== End Services Shortcode integration ========== -->

<!-- ========== Start Counter Up Shortcode Integration ========== -->
<?php
// VC_Map Integration for counter
add_action( 'vc_before_init', 'vc_map_integration_for_counter' );
function vc_map_integration_for_counter()
{
    vc_map( array(
        'name'     => __( 'Avo Counter', 'avo' ),
        'base'     => 'counter-up',
        'category' => __( 'Avo', 'avo' ),
        'icon'     => '',
        'params'   => array(
            array(
                'param_name'  => 'count1',
                'type'        => 'textfield',
                'description' => __( 'Add Counter 1 Number', 'avo' ),
                'heading'     => __( 'Counter 1 Number' ),
                'value'       => __( '2500', 'avo' ),
            ),
            array(
                'param_name'  => 'count1_text',
                'type'        => 'textfield',
                'description' => __( 'Add Counter Up 1 Name', 'avo' ),
                'heading'     => __( 'Counter 1 Name' ),
                'value'       => __( 'Happy Clients', 'avo' ),
            ),
            array(
                "type"       => "iconpicker",
                "heading"    => "Counter 1 Icon",
                "param_name" => "count1_icon",
                "value"      => "fa-solid fa-user",
                "settings"   => array(
                    "emptyIcon"    => true,
                    "iconsPerPage" => 100,
                ) ),
            array(
                'param_name'  => 'count2',
                'type'        => 'textfield',
                'description' => __( 'Add Counter 2 Number', 'avo' ),
                'heading'     => __( 'Counter 2 Number' ),
                'value'       => __( '150', 'avo' ),
            ),
            array(
                'param_name'  => 'count2_text',
                'type'        => 'textfield',
                'description' => __( 'Add Counter Up 2 Name', 'avo' ),
                'heading'     => __( 'Counter 2 Name' ),
                'value'       => __( 'Complete Projects', 'avo' ),
            ),
            array(
                "type"       => "iconpicker",
                "heading"    => "Counter 2 Icon",
                "param_name" => "count2_icon",
                "value"      => "fa-solid fa-user",
                "settings"   => array(
                    "emptyIcon"    => true,
                    "iconsPerPage" => 100,
                ) ),
            array(
                'param_name'  => 'count3',
                'type'        => 'textfield',
                'description' => __( 'Add Counter 3 Number', 'avo' ),
                'heading'     => __( 'Counter 3 Number' ),
                'value'       => __( '255', 'avo' ),
            ),
            array(
                'param_name'  => 'count3_text',
                'type'        => 'textfield',
                'description' => __( 'Add Counter Up 3 Name', 'avo' ),
                'heading'     => __( 'Counter 3 Name' ),
                'value'       => __( 'Files Downloaded', 'avo' ),
            ),
            array(
                "type"       => "iconpicker",
                "heading"    => "Counter 3 Icon",
                "param_name" => "count3_icon",
                "value"      => "fa-solid fa-user",
                "settings"   => array(
                    "emptyIcon"    => true,
                    "iconsPerPage" => 100,
                ) ),
            array(
                'param_name'  => 'count3_sub_text',
                'type'        => 'textfield',
                'description' => __( 'Add Counter Up 3 Sub text', 'avo' ),
                'heading'     => __( 'Counter 3 sub number' ),
                'value'       => __( 'k', 'avo' ),
            ),
            array(
                'param_name'  => 'count4',
                'type'        => 'textfield',
                'description' => __( 'Add Counter 4 Number', 'avo' ),
                'heading'     => __( 'Counter 4 Number' ),
                'value'       => __( '60', 'avo' ),
            ),
            array(
                'param_name'  => 'count4_text',
                'type'        => 'textfield',
                'description' => __( 'Add Counter Up 4 Name', 'avo' ),
                'heading'     => __( 'Counter 4 Name' ),
                'value'       => __( 'Award win', 'avo' ),
            ),
            array(
                "type"       => "iconpicker",
                "heading"    => "Counter 4 Icon",
                "param_name" => "count4_icon",
                "value"      => "fa-solid fa-user",
                "settings"   => array(
                    "emptyIcon"    => true,
                    "iconsPerPage" => 100,
                ) ),
        ),
    ) );
}

?>
<!-- ========== End Counter Up Shortcode Integration ========== -->

<!-- ========== Start Brands shortcode Integration ========== -->
<?php
// VC_Map Integration for Brands
add_action( 'vc_before_init', 'vc_map_integration_for_brands' );
function vc_map_integration_for_brands()
{
    vc_map( array(
        'name'     => __( 'Avo Brands', 'avo' ),
        'base'     => 'brands',
        'category' => __( 'Avo', 'avo' ),
        'icon'     => '',
        'params'   => array(
            array(
                'param_name'  => 'brand1_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand1 Image', 'avo' ),
                'heading'     => __( 'Brand1 Image' ),
            ),
            array(
                'param_name'  => 'brand1_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand1 text', 'avo' ),
                'heading'     => __( 'Brand1 text' ),
                'value'       => ' Item1',
            ),
            array(
                'param_name'  => 'brand1_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand1  Link', 'avo' ),
                'heading'     => __( ' Brand1 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand2_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand2  Image', 'avo' ),
                'heading'     => __( ' Brand2 Image' ),
            ),
            array(
                'param_name'  => 'brand2_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand2  text', 'avo' ),
                'heading'     => __( ' Brand2 text' ),
            ),
            array(
                'param_name'  => 'brand2_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand2  Link', 'avo' ),
                'heading'     => __( ' Brand2 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand3_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand3 Image', 'avo' ),
                'heading'     => __( 'Brand3 Image' ),
            ),
            array(
                'param_name'  => 'brand3_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand3 text', 'avo' ),
                'heading'     => __( 'Brand3 text' ),
            ),
            array(
                'param_name'  => 'brand3_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand3 Link', 'avo' ),
                'heading'     => __( 'Brand3 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand4_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand4 Image', 'avo' ),
                'heading'     => __( 'Brand4 Image' ),
            ),
            array(
                'param_name'  => 'brand4_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand4 text', 'avo' ),
                'heading'     => __( 'Brand4 text' ),
            ),
            array(
                'param_name'  => 'brand4_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand4 Link', 'avo' ),
                'heading'     => __( 'Brand4 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand5_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand5 Image', 'avo' ),
                'heading'     => __( 'Brand5 Image' ),
            ),
            array(
                'param_name'  => 'brand5_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand5 text', 'avo' ),
                'heading'     => __( 'Brand5 text' ),
            ),
            array(
                'param_name'  => 'brand5_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand5 Link', 'avo' ),
                'heading'     => __( 'Brand5 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand6_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand6 Image', 'avo' ),
                'heading'     => __( 'Brand6 Image' ),
            ),
            array(
                'param_name'  => 'brand6_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand6 text', 'avo' ),
                'heading'     => __( 'Brand6 text' ),
            ),
            array(
                'param_name'  => 'brand6_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand6 Link', 'avo' ),
                'heading'     => __( 'Brand6 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand7_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand7 Image', 'avo' ),
                'heading'     => __( 'Brand7 Image' ),
            ),
            array(
                'param_name'  => 'brand7_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand7 text', 'avo' ),
                'heading'     => __( 'Brand7 text' ),
            ),
            array(
                'param_name'  => 'brand7_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand7 Link', 'avo' ),
                'heading'     => __( 'Brand7 Link' ),
                'value'       => '#',
            ),
            array(
                'param_name'  => 'brand8_img',
                'type'        => 'attach_image',
                'description' => __( 'Add Brand8 Image', 'avo' ),
                'heading'     => __( 'Brand8 Image' ),
            ),
            array(
                'param_name'  => 'brand8_text',
                'type'        => 'textfield',
                'description' => __( 'Add Brand8 text', 'avo' ),
                'heading'     => __( 'Brand8 text' ),
            ),
            array(
                'param_name'  => 'brand8_link',
                'type'        => 'textfield',
                'description' => __( 'Add Brand8 Link', 'avo' ),
                'heading'     => __( 'Brand8 Link' ),
                'value'       => '#',
            ),
        ),
    ) );
}

?>
<!-- ========== End Brands shortcode Integration ========== -->