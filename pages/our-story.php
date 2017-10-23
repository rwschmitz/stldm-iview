<?php get_header(); ?>



<!-- Landing page start -->


    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="test">
                    <div class="header">
                        <?php echo get_post_meta(get_the_ID(), 'main-header', true); // Allows the user to change the title of each page from the Wordpress dashboard ?> 
                    </div>
                </div> <!-- End test -->
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->


    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="content">
                    <?php the_content(); // Allows the user to change the page content from the Wordpress dashboard?>
                </div>
            </div> <!--- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->








<?php get_footer(); ?>

