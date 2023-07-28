<!-- ========== Start Slider Shortcode ========== -->
<?php

add_shortcode( 'slider', 'slider_shortcode_function' );
function slider_shortcode_function( $attr )
{
    ob_start();

    $attributes = shortcode_atts( array(
        'well_text'  => 'Hello, I\'m',
        'name'       => 'Alex Smith',
        'profession' => 'UI & UX Designer',
        'fb_link'    => '#',
        'twitter'    => '#',
        'pinterest'  => '#',
        'behance'    => '#',
        'bg_img'     => get_template_directory_uri() . "/img/slid/freelancer.jpg",
    ), $attr );

    extract( $attributes );

    ?>

<!-- ==================== Start Slider ==================== -->

<div class="freelancer sub-bg valign bg-img parallaxie"
    data-background="<?php echo $bg_img; ?>" data-overlay-dark="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cont">
                    <h6><?php echo $well_text; ?></h6>
                    <h1><?php echo $name; ?></h1>
                    <h4><?php echo $profession; ?></h4>
                    <div class="social-icon">
                        <a href="<?php echo $fb_link; ?>" class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo $twitter; ?>" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?php echo $pinterest; ?>" class="icon">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="<?php echo $behance; ?>" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ==================== End Slider ==================== -->

<?php return ob_get_clean();
}
?>
<!-- ========== End Slider Shortcode ========== -->