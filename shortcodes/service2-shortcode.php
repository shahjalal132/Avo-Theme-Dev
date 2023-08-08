<!-- ========== Start Service Shortcode ========== -->
<?php

// Shortcode for services
function services_shortcode_function( $attr )
{
    ob_start();

    $attr_for_services = shortcode_atts( array(
        'subtitle' => 'Best Featured',
        'title' => 'Services',
    ), $attr );

    extract( $attr_for_services );
    ?>

    <!-- ==================== Start Services ==================== -->

<section class="services">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s"><?php echo $subtitle; ?></h6>
            <h3 class="wow" data-splitting><?php echo $title; ?></h3>
            <span class="tbg"><?php echo $title; ?></span>
        </div>
        <div class="row">

            <?php
                $services = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => -1
                ));

                while($services->have_posts()) : $services->the_post();
            ?>

            <div class="col-lg-4">
                <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                    <!-- <span class="icon pe-7s-anchor"></span> -->
                    <?php the_field('icon', get_the_ID()); ?>
                    <h6><?php the_field('service_title', get_the_ID()); ?></h6>
                    <p><?php the_field('service_content', get_the_ID()); ?></p>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    </div>
    <div class="half-bg bottom"></div>
</section>

<!-- ==================== End Services ==================== -->

    <?php return ob_get_clean();
}
add_shortcode( 'services2', 'services_shortcode_function' );

?>
<!-- ========== End Service Shortcode ========== -->