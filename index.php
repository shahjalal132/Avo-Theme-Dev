<?php get_header(); ?>

<!-- ==================== Start Blog ==================== -->

<section class="blog-grid section-padding">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="fadeIn" data-wow-delay=".5s">Latest News</h6>
            <h3 class="wow" data-splitting>Our Blogs.</h3>
            <span class="tbg">Blogs</span>
        </div>
        <div class="row">

            <?php while(have_posts(  )) : the_post(); ?>

            <div class="col-lg-4">
                <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="cont">
                        <a href="#0" class="date custom-font">
                            <span><i><?php echo get_the_date('d'); ?>
                                </i> <?php the_time( 'F' );?></span>
                        </a>
                        <div class="info custom-font">
                            <a href="#0" class="author">
                                <span><?php the_author();?></span>
                            </a>
                            <a href="#0" class="tag">
                                <span><?php the_tags();?></span>
                            </a>
                        </div>
                        <h6>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h6>
                        <div class="btn-more custom-font">
                            <a href="<?php the_permalink();?>" class="simple-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>

<!-- ==================== End Blog ==================== -->

<?php get_footer(); ?>