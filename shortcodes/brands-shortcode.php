<!-- ========== Start Brands Shortcode ========== -->
<?php

// Shortcode for brands
function shortcode_function_for_brands( $attr )
{
    ob_start();

    $attr_for_brands = shortcode_atts( array(
        'brand1_img' => get_template_directory_uri() . '/img/clients/brands/01.png',
        'brand1_link' => '#',
        'brand2_img' => get_template_directory_uri() . '/img/clients/brands/02.png',
        'brand2_link' => '#',
        'brand3_img' => get_template_directory_uri() . '/img/clients/brands/03.png',
        'brand3_link' => '#',
        'brand4_img' => get_template_directory_uri() . '/img/clients/brands/04.png',
        'brand4_link' => '#',
        'brand5_img' => get_template_directory_uri() . '/img/clients/brands/05.png',
        'brand5_link' => '#',
        'brand6_img' => get_template_directory_uri() . '/img/clients/brands/06.png',
        'brand6_link' => '#',
        'brand7_img' => get_template_directory_uri() . '/img/clients/brands/07.png',
        'brand7_link' => '#',
        'brand8_img' => get_template_directory_uri() . '/img/clients/brands/08.png',
        'brand8_link' => '#',
    ), $attr );

    extract( $attr_for_brands );
    ?>

<!-- ==================== Start clients Brands ==================== -->

<section class="clients-brand section-padding sub-bg">
    <div class="container">
        <div class="brands-crs">
            <div class="brands">
                <div class="item" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php echo $brand1_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand1_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".6s">
                    <div class="img">
                        <img src="<?php echo $brand2_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand2_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".8s">
                    <div class="img">
                        <img src="<?php echo $brand3_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand3_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php echo $brand4_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand4_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".4s">
                    <div class="img">
                        <img src="<?php echo $brand5_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand5_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".7s">
                    <div class="img">
                        <img src="<?php echo $brand6_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand6_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".5s">
                    <div class="img">
                        <img src="<?php echo $brand7_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand7_link; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php echo $brand8_img; ?>" alt="">
                    </div>
                    <a href="#0" class="link" data-splitting><?php echo $brand8_link; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End clients Brands ==================== -->

<?php return ob_get_clean();
}
add_shortcode( 'brands', 'shortcode_function_for_brands' );

?>
<!-- ========== End Brands Shortcode ========== -->