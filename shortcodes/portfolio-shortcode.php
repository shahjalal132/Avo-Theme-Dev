<!-- ========== Start Portfolio Section Shortcode ========== -->
<?php

// Shortcode for portfolio
function portfolio_section_function( $attr )
{
    ob_start();

    $attr_for_portfolio = shortcode_atts( array(
        'subtitle'         => 'Portfolio',
        'title'            => 'Our Works.',
        'filter_all_text'  => 'All',
        'filter1_text'     => 'Branding',
        'filter2_text'     => 'Mobile App',
        'filter3_text'     => 'Creative',
        'filter_all_class' => '*',
        'filter1_class'    => '.brand',
        'filter2_class'    => '.web',
        'filter3_class'    => '.graphic',
        'gallery_class1'   => 'graphic',
        'gallery_class2'   => '',
        'gallery_class3'   => '',
        'attribute3'       => 'value3',
    ), $attr );

    extract( $attr_for_portfolio );
    ?>

<!-- ==================== Start Works ==================== -->

<section class="portfolio section-padding pb-70">
    <div class="container">
        <div class="sec-head custom-font">
            <h6 class="wow fadeIn" data-wow-delay=".5s"><?php echo $subtitle; ?></h6>
            <h3 class="wow" data-splitting><?php echo $title; ?></h3>
            <span class="tbg text-right"><?php echo $title; ?></span>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- filter links -->
            <div class="filtering col-12">
                <div class="filter wow fadeIn" data-wow-delay=".5s">
                    <span data-filter='<?php echo $filter_all_class; ?>' class="active"><?php echo $filter_all_text; ?></span>
                    <span data-filter='<?php echo $filter1_class; ?>'><?php echo $filter1_text; ?></span>
                    <span data-filter='<?php echo $filter2_class; ?>'><?php echo $filter2_text; ?></span>
                    <span data-filter='<?php echo $filter3_class; ?>'><?php echo $filter3_text; ?></span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery full-width">

                <!-- gallery item -->
                <div class="col-md-6 items <?php echo $gallery_class1; ?> <?php echo $gallery_class2; ?> <?php echo $gallery_class3; ?> lg-mr wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/1.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>Creativity Demand</h6>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 items web wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/2.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>Through The Breaking</h6>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 items web wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/5.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>Through The Breaking</h6>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 items <?php echo $gallery_class1; ?> <?php echo $gallery_class2; ?> <?php echo $gallery_class3; ?> wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/3.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>See It Yourself</h6>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/4.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>Blast From The Past</h6>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="project-details.html" class="imago wow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/mas1/6.jpg" alt="image">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="cont">
                        <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                        <h6>Blast From The Past</h6>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ==================== End Works ==================== -->

<?php return ob_get_clean();
}
add_shortcode( 'portfolio', 'portfolio_section_function' );

?>
<!-- ========== End Portfolio Section Shortcode ========== -->