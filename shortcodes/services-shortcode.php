<!-- ========== Start Services Section shortcode ========== -->
<?php

// Shortcode for services
function shortcode_for_services( $attr )
{
    ob_start();

    $attr_for_services = shortcode_atts( array(
        'subtitle'     => 'Best Features',
        'title'        => 'Services.',
        'skill1_icon'  => '<span class="icon pe-7s-anchor"></span>',
        'skill1_title' => 'Ui / Ux Design',
        'skill1_text'  => 'Tempore corrupti temporibus fuga earum asperiores fugit laudantium.',
        'skill2_icon'  => ' <span class="icon pe-7s-phone"></span>',
        'skill2_title' => 'Web & App Development',
        'skill2_text'  => 'Tempore corrupti temporibus fuga earum asperiores fugit laudantium.',
        'skill3_icon'  => '<span class="icon pe-7s-camera"></span>',
        'skill3_title' => 'Photography',
        'skill3_text'  => 'Tempore corrupti temporibus fuga earum asperiores fugit laudantium.',
    ), $attr );

    extract( $attr_for_services );
    ?>

<!-- ==================== Start Services ==================== -->

<section class="services">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s"><?php echo $subtitle; ?></h6>
            <h3 class="wow" data-splitting><?php echo $title; ?></h3>
            <span class="tbg"></span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $skill1_icon; ?>
                    <h6><?php echo $skill1_title; ?></h6>
                    <p><?php echo $skill1_text; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $skill2_icon; ?>
                    <h6><?php echo $skill2_title; ?></h6>
                    <p><?php echo $skill2_text; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $skill3_icon; ?>
                    <h6><?php echo $skill3_title; ?></h6>
                    <p><?php echo $skill3_text; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="half-bg bottom"></div>
</section>

<!-- ==================== End Services ==================== -->

<?php return ob_get_clean();
}
add_shortcode( 'services', 'shortcode_for_services' );

?>
<!-- ========== End Services Section shortcode ========== -->