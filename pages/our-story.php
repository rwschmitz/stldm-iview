<?php get_header(); ?>



<!-- Landing page start -->
<div class="no-gutters landing">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="test">
                    <h1><?php echo get_post_meta(get_the_ID(), 'main-header', true); ?></h1>
                </div> <!-- End test -->
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->



    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1> this is a story all about how my life got flipped, turned upside down.  and i'd like to take a minute, just right there
                    and i'll tell you all about how i become the Prince of Bel-Air.
                </h1>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_post(); ?>
                <?php get_post_meta(get_the_ID(), 'our-story'); ?>
                <?php the_post(); ?>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->


</div> <!-- End no-gutters -->





<?php get_footer(); ?>

