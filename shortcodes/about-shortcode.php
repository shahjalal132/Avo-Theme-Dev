<!-- ========== Start About Section Shortcode ========== -->
<?php

// Shortcode for About Section
function about_section_shortcode_function( $attr, $content )
{
    ob_start();

    $attr_for_about = shortcode_atts( array(
        'about_me_text'    => 'About Me',
        'main_title'       => 'My mission is design develop the best Websites around.',
        'download_cv'      => 'Download C.V',
        'download_cv_link' => '#',
        'skill1'           => 'UI / UX Design',
        'skill1_progress'  => '80%',
        'skill2'           => 'Development',
        'skill2_progress'  => '90%',
        'skill3'           => 'Graphic Design',
        'skill3_progress'  => '85%',
    ), $attr );

    extract( $attr_for_about );
    ?>

<!-- ==================== Start about ==================== -->

<div class="hero-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cont">
                    <div class="sub-title">
                        <h6><?php echo $about_me_text; ?></h6>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h3 class="main-title wow" data-splitting><?php echo $main_title; ?></h3>
                    <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo do_shortcode( $content );?></p>
                    <a href="<?php echo $download_cv_link; ?>" class="simple-btn mt-40"><?php echo $download_cv; ?></a>
                </div>
            </div>
            <div class="col-lg-6 valign">
                <div class="skills-box full-width">
                    <div class="skill-item">
                        <h6 class="custom-font"><?php echo $skill1; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="<?php echo $skill1_progress; ?>"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="custom-font"><?php echo $skill2; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="<?php echo $skill2_progress; ?>"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="custom-font"><?php echo $skill3; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="<?php echo $skill3_progress; ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End about ==================== -->

<?php return ob_get_clean();
}
add_shortcode( 'about', 'about_section_shortcode_function' );

?>
<!-- ========== End About Section Shortcode ========== -->