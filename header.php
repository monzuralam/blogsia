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
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
			<div class="container px-4 px-lg-5">
				<?php

					if( has_custom_logo() ){
						if( function_exists( 'the_custom_logo' ) ){
							the_custom_logo();
						}
					}else{
						echo '<a class="navbar-brand" href="'. esc_url(home_url()).'">';
						echo esc_html__( get_bloginfo('name'), 'blogsia' ) ;
						echo '</a>';
					}
					
				?>
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<?php echo esc_html__( 'Menu', 'blogsia' ); ?>	
					<i class="fas fa-bars"></i>
				</button>

				<?php
					wp_nav_menu(
						array(
							'menu_id'        => 'primary-menu',
							'container'         => "div",
							'container_class'   => "collapse navbar-collapse",
							'container_id'      => "navbarResponsive",
							'menu_class'      => "navbar-nav ml-auto py-4 py-lg-0",
							'depth'       => "3",
							'fallback_cb'       => "WP_Bootstrap_Navwalker::fallback",
							'walker'       => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'menu-1',
						)
					);
				?>
			</div>
		</nav>
	</header>
	<?php 
		if( is_front_page() ){
	?>
	<!-- Page Header-->
	<section class="hero-section masthead" style="background-image: url('assets/img/home-bg.jpg')">
		<div class="container position-relative px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<div class="site-heading">
						<h1><?php echo esc_html__( get_bloginfo( 'name' ), 'blogsia' ); ?></h1>
						<span class="subheading"><?php echo esc_html__( get_bloginfo( 'description'), 'blogsia' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	}else{
	?>
	<section class="hero-section masthead" style="background-image: url('assets/img/home-bg.jpg')">
		<div class="container position-relative px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<div class="site-heading">
						<h1><?php echo esc_html__(  the_title(), 'blogsia' ); ?></h1>
						<span class="subheading"><?php echo esc_html__( the_excerpt(), 'blogsia' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	}