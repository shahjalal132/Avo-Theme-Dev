<!-- ========== Start Counter Up Section Shortcode ========== -->
<?php

// Shortcode for counter_up
function counter_up_shortcode_function( $attr )
{
    ob_start();

    $attr_for_counter_up = shortcode_atts( array(
        'count1'          => '2500',
        'count1_text'     => 'Happy Clients',
        'count1_icon'     => 'fa-solid fa-user',
        'count2'          => '150',
        'count2_text'     => 'Complete Projects',
        'count2_icon'     => 'pe-7s-portfolio',
        'count3'          => '255',
        'count3_text'     => 'Files Downloaded',
        'count3_icon'     => 'pe-7s-cloud-download',
        'count3_sub_text' => 'k',
        'count4'          => '50',
        'count4_text'     => 'Award Win',
        'count4_icon'     => 'pe-7s-medal',
    ), $attr );

    extract( $attr_for_counter_up );
    ?>

<!-- ==================== Start numbers ==================== -->

<section class="number-sec section-padding sub-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item no-bord">
                    <span class="icon <?php echo $count1_icon; ?>"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count1; ?></span></h3>
                    <p class="wow txt" data-splitting><?php echo $count1_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon <?php echo $count2_icon; ?>"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count2; ?></span></h3>
                    <p class="wow txt" data-splitting><?php echo $count2_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon <?php echo $count3_icon; ?>"></span>
                    <h3 class="custom-font"><span class="count"><?php echo $count3; ?></span>
                        <?php echo $count3_sub_text; ?></h3>
                    <p class="wow txt" data-splitting><?php echo $count3_text; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon <?php echo $count4_icon; ?>"></span>
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