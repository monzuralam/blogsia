<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogsia
 */

get_header();
?>

	<main id="primary" class="site-main mb-4">
		<div class="container px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<?php

						while ( have_posts() ) : the_post();
	
							get_template_part( 'template-parts/content', 'page' );
	
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.

					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
