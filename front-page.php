<?php get_header(); ?>

<body>

<?php // Display landing page
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
        endif; 
?>

    <div class="container">
        <div class="jumbotron-fluid pt-5 pb-3 text-center">
            <h1 class="display-4">
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

 

<?php get_footer(); ?>