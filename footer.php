<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogsia
 */

?>
	<footer class="border-top">
		<div class="container px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<div class="text-center text-muted">
						<?php
							$current_year = date('Y');
							printf( esc_html__( 'Copyright %s © Blogsia by %s. All Rights Reserved.', 'blogsia'), esc_html($current_year), '<a href="https://profile.wordpress.org/monzuralam">Monzur Alam</a>' );
						?>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
