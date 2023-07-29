<!-- ========== Start Counter Up Section Shortcode ========== -->
<?php

// Shortcode for counter_up
function counter_up_shortcode_function( $attr )
{
    ob_start();

    $attr_for_counter_up = shortcode_atts( array(
        'count1'          => '2500',
        'count1_text'     => 'Happy Clients',
        'count2'          => '150',
        'count2_text'     => 'Compleate Projects',
        'count3'          => '255',
        'count3_text'     => 'Files Downloaded',
        'count3_sub_text' => 'k',
        'count4'          => '50',
        'count4_text'     => 'Award Win',
    ), $attr );

    extract( $attr_for_counter_up );
    ?>

<!-- ==================== Start numbers ==================== -->

<section class="number-sec section-padding sub-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item no-bord">
                    <span class="icon pe-7s-smile"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count1; ?></span></h3>
                    <p class="wow txt" data-splitting><?php echo $count1_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon pe-7s-portfolio"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count2; ?></span></h3>
                    <p class="wow txt" data-splitting><?php echo $count2_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon pe-7s-cloud-download"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count3; ?></span>
                        <?php echo $count3_sub_text; ?></h3>
                    <p class="wow txt" data-splitting><?php echo $count3_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon pe-7s-medal"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count4; ?></span></h3>
                    <p class="wow txt" data-splitting><?php echo $count4_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End numbers ==================== -->

<?php return ob_get_clean();
}
add_shortcode( 'counter-up', 'counter_up_shortcode_function' );

?>
<!-- ========== End Counter Up Section Shortcode ========== -->