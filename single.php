<?php get_header();?>

<div class="container section-padding">
    <div class="row">
        <div class="col-12">
            <div class="img-fluid"><?php the_post_thumbnail();?></div>
            <h6 class="mt-20"><?php the_title();?></h6>
            <p class="mt-10"><?php the_content();?></p>
        </div>
    </div>
</div>

<?php get_footer();?>