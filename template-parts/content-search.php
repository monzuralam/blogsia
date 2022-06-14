<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogsia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Post preview-->
	<div class="post-preview">
		<a href="<?php esc_url( the_permalink()) ; ?>">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<p class="post-subtitle">
				<?php 
					echo get_the_excerpt();
				?>
			</p>
		</a>
		<?php 
			if ( 'post' === get_post_type() ) {
		?>
		<p class="post-meta">
			<?php 
				printf(
					/* translators: %s: post author. */
					esc_html_x( 'Posted by %s ', 'post author', 'blogsia' ),
					'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
				);

				printf(
					/* translators: %s: post date. */
					esc_html_x( 'on %s', 'post date', 'blogsia' ), get_the_date('M d, Y')
				);
			?>
		</p>
		<?php } ?>
	</div>
	<!-- Divider-->
	<hr class="my-4" />
</article><!-- #post-<?php the_ID(); ?> -->
