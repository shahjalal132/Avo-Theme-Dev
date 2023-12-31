<!-- ========== Start Brands Shortcode ========== -->
<?php

// Shortcode for brands
function shortcode_function_for_brands( $attr )
{
    ob_start();

    $attr_for_brands = shortcode_atts( array(
        'brand1_img'  => get_template_directory_uri() . '/img/clients/brands/01.png',
        'brand1_text' => 'Item1',
        'brand1_link' => '#',
        'brand2_img'  => get_template_directory_uri() . '/img/clients/brands/02.png',
        'brand2_text' => 'Item2',
        'brand2_link' => '#',
        'brand3_img'  => get_template_directory_uri() . '/img/clients/brands/03.png',
        'brand3_text' => 'Item3',
        'brand3_link' => '#',
        'brand4_img'  => get_template_directory_uri() . '/img/clients/brands/04.png',
        'brand4_text' => 'Item4',
        'brand4_link' => '#',
        'brand5_img'  => get_template_directory_uri() . '/img/clients/brands/05.png',
        'brand5_text' => 'Item5',
        'brand5_link' => '#',
        'brand6_img'  => get_template_directory_uri() . '/img/clients/brands/06.png',
        'brand6_text' => 'Item6',
        'brand6_link' => '#',
        'brand7_img'  => get_template_directory_uri() . '/img/clients/brands/07.png',
        'brand7_text' => 'Item7',
        'brand7_link' => '#',
        'brand8_img'  => get_template_directory_uri() . '/img/clients/brands/08.png',
        'brand8_text' => 'Item8',
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
                    <a href="<?php echo $brand1_link; ?>" class="link" data-splitting><?php echo $brand1_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".6s">
                    <div class="img">
                        <img src="<?php echo $brand2_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand2_link; ?>" class="link" data-splitting><?php echo $brand2_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".8s">
                    <div class="img">
                        <img src="<?php echo $brand3_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand3_link; ?>" class="link" data-splitting><?php echo $brand3_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php echo $brand4_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand4_link; ?>" class="link" data-splitting><?php echo $brand4_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".4s">
                    <div class="img">
                        <img src="<?php echo $brand5_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand5_link; ?>" class="link" data-splitting><?php echo $brand5_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".7s">
                    <div class="img">
                        <img src="<?php echo $brand6_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand6_link; ?>" class="link" data-splitting><?php echo $brand6_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".5s">
                    <div class="img">
                        <img src="<?php echo $brand7_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand7_link; ?>" class="link" data-splitting><?php echo $brand7_text; ?></a>
                </div>
            </div>
            <div class="brands">
                <div class="item" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php echo $brand8_img; ?>" alt="">
                    </div>
                    <a href="<?php echo $brand8_link; ?>" class="link" data-splitting><?php echo $brand8_text; ?></a>
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