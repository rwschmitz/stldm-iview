<?php get_header(); ?>



<!-- Landing page start -->


    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-xl-12">
                <div class="header text-center">
                    <?php echo get_post_meta(get_the_ID(), 'main-title', true); // Allows the user to change the title of each page from the Wordpress dashboard ?> 
                </div> <!-- End header -->
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->


    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-12">
                <div class="subheader text-center">
                    <?php echo get_post_meta(get_the_ID(), 'sub-title', true); // Allows the user to change the sub-title of each page from the Wordpress dashboard ?> 
                    <?php the_content(); // Allows the user to change the page content from the Wordpress dashboard?>
                </div>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="content text-center">
                    <?php the_content(); // Allows the user to change the page content from the Wordpress dashboard?>
                </div>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->








<?php get_footer(); ?>

