<?php
/*
*
* my comment descriptions go here
* cool
*/

get_header(); ?>

<!--<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->

			<?php
			while ( have_posts() ) : the_post();

                get_template_part( '/pages/our-story', 'page' ); // this will get the about page
                get_comments_template( '', true); 

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		<!--</main> #main 
	</div> #primary
</div> .wrap -->

<?php get_footer();
