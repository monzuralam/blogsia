<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogsia
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-4' ); ?>>
	<div class="post-card">
		<div class="post-thumb">
			<?php the_post_thumbnail( 'full', array( 'class'=>'img-fluid' ) ); ?>
		</div>
		<div class="post-content">
			<div class="post-content">
				<div class="entry-meta">
					<span class="post-cat"><?php the_category(', '); // Separated by commas ?></span>
				</div>
				<div class="post-card-content">
					<h2 class="post-title">
						<a href="<?php esc_url( the_permalink()) ; ?>"><?php the_title(); ?></a>
					</h2>
					<div class="post-excerpt text-muted">
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
					<div class="entry-meta text-uppercase">
						<span class="post-on">
							<?php 
								printf(
									/* translators: %s: post date. */
									esc_html_x( 'on %s', 'post date', 'blogsia' ), get_the_date('M d, Y')
								);
							?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
