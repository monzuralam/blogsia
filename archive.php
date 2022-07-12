<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogsia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<h1 class="archive-entry-title"><?php the_archive_title(); ?></h1>
				</div>
				<div class="col-md-9 col-lg-8 col-xl-8">
					<?php if ( have_posts() ) : 

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
