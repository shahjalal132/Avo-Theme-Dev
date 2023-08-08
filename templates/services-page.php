<?php 
/**
 * Template Name: Service Page
 */
?>

<?php get_header(); ?>

<!-- ==================== Start Services ==================== -->

<section class="services section-padding">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Featured</h6>
            <h3 class="wow" data-splitting><?php the_title(); ?></h3>
            <span class="tbg"><?php the_title(); ?></span>
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

<?php get_footer(); ?>