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
			<div class="container">
				<?php

					if( has_custom_logo() ){
						if( function_exists( 'the_custom_logo' ) ){
							the_custom_logo();
						}
					}else{
						echo '<a class="navbar-brand" href="'. esc_url(home_url()).'">';
						echo get_bloginfo( 'name' );
						echo '</a>';
					}
					
				?>
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<?php echo __( 'Menu', 'blogsia' ); ?>	
					<i class="fas fa-bars"></i>
				</button>

				<?php
					wp_nav_menu(
						array(
							'menu_id'        	=> 'primary-menu',
							'container'         => "div",
							'container_class'   => "collapse navbar-collapse",
							'container_id'      => "navbarResponsive",
							'menu_class'     	=> "navbar-nav ml-auto py-4 py-lg-0",
							'depth'       		=> 	"2",
							'fallback_cb'       => "WP_Bootstrap_Navwalker::fallback",
							'walker'       		=> new WP_Bootstrap_Navwalker(),
							'theme_location' 	=> 'menu-1',
						)
					);
				?>
			</div>
		</nav>
	</header>