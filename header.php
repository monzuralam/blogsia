<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogsia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blogsia' ); ?></a>
	<!-- Navigation-->
	<div class="bg-primary">
		<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
			<div class="container px-4 px-lg-5">
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
					<?php
											
						if( has_custom_logo() ){
							if( function_exists( 'the_custom_logo' ) ){
								the_custom_logo();
							}
						}else{
							echo esc_html__( get_bloginfo('name'), 'blogsia' ) ;
						}
						
					?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<?php echo esc_html__( 'Menu', 'blogsia' ); ?>
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto py-4 py-lg-0">
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$blogsia_description = get_bloginfo( 'description', 'display' );
			if ( $blogsia_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $blogsia_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blogsia' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
