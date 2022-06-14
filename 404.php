<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blogsia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<section class="error-404 not-found pb-4">
						<header class="page-header">
							<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blogsia' ); ?></h2>
						</header><!-- .page-header -->

						<div class="page-content mb-4">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blogsia' ); ?></p>
							<div class="d-flex flex-row justify-content-center">
								<?php get_search_form(); ?>
							</div>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
