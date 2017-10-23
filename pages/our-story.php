<?php get_header(); ?>



<!-- Landing page start -->
<div class="no-gutters">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="test">
                    <div class="header">
                        <?php echo get_post_meta(get_the_ID(), 'main-header', true); ?> // php comments tho
                    </h1> <
                </div> <!-- End test -->
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->


    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1><?php the_content(); ?></h1>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->


</div> <!-- End no-gutters -->





<?php get_footer(); ?>

