<!-- ==================== Start testimonials ==================== -->

<section class="testimonials section-padding sub-bg lftstl bg-img parallaxie"
    data-background="<?php echo get_template_directory_uri(); ?>/img/slid/3.jpg" data-overlay-dark="9">
    <div class="container position-re">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">What Peapole Says?</h6>
            <h3 class="wow" data-splitting>Testimonials.</h3>
            <span class="tbg">Testimonials</span>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
            <div class="col-lg-8">
                <div class="slic-item">

                    <?php
                        $testimonial = new WP_Query( array(
                            'post_type'      => 'testimonial',
                            'posts_per_page' => -1,
                        ) );

                        while ( $testimonial->have_posts() ): $testimonial->the_post();
                    ?>
                    <div class="item">
                        <p><?php the_field( 'summery', get_the_ID() );?></p>
                        <div class="info">
                            <div class="cont">
                                <div class="author">
                                    <div class="lxleft">
                                        <div class="img">
                                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/clients/1.jpg" alt=""> -->
                                            <?php the_field( 'image', get_the_ID() );?>
                                        </div>
                                    </div>
                                    <div class="fxright">
                                        <h6 class="author-name custom-font"><?php the_field( 'name', get_the_ID() );?>
                                        </h6>
                                        <span
                                            class="author-details"><?php the_field( 'profession', get_the_ID() );?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;?>

                </div>
            </div>
        </div>

        <div class="arrows">
            <div class="next cursor-pointer">
                <span class="pe-7s-angle-right"></span>
            </div>
            <div class="prev cursor-pointer">
                <span class="pe-7s-angle-left"></span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End testimonials ==================== -->