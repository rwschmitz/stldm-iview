<?php

/* 
page.php will handle all of my page re-directs for Mario's Italian Restaurant website 
*/

get_header(); ?>



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



<?php get_footer();
