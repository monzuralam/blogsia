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
	<div class="single-post-wrapper">
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'full', array( 'class'=>'img-fluid' ) ); ?>
			</a>
		</div>
		<div class="post-content">
			<div class="post-card-content">
                <div class="entry-meta text-uppercase">
					<span class="author">
						<i class="fa fa-user"></i>
						<?php
							the_author();
						?>
					</span>
					<span class="post-on">
						<i class="fa fa-clock"></i>
						<?php 
							printf(
								/* translators: %s: post date. */
								esc_html_x( 'on %s', 'post date', 'blogsia' ), get_the_date('M d, Y')
							);
						?>
					</span>
					<span class="comments">
						<i class="fa fa-comments"></i>
						<?php
							echo get_comments_number( get_the_ID() );
						?>
					</span>
				</div>

                <h2 class="post-title">
					<?php the_title(); ?>
				</h2>

				<div class="post-content">

					<?php the_content(); ?>

				</div>
				
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->