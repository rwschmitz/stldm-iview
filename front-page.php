<?php get_header(); ?>
<?php if (is_front_page()) { ?>



    <div class="container">
        <div class="jumbotron-fluid pt-5 pb-3 text-center">
            <h1 class="display-3">
                <?php echo get_post_meta(get_the_ID(), 'home-jumbotron', true); ?>
            </h1> <!-- End display -->
            <p class="lead">
                <?php echo get_post_meta(get_the_ID(), 'home-sub-jumbotron', true); ?>
            </p>   <!-- End lead -->
        </div> <!-- End jumbotron -->
    </div> <!-- End container -->
    
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-12">
                <?php the_content(); ?>
            </div> <!-- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->

   
<?php } ?>
<?php get_footer(); ?>