<?php
/**
 * Blogsia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blogsia
 */

if ( ! defined( 'BLOGSIA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BLOGSIA_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blogsia_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Blogsia, use a find and replace
		* to change 'blogsia' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'blogsia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'blogsia' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor style
	add_editor_style( 'assets/css/editor-style.css' );

	// Add support for block style
	add_theme_support( "wp-block-styles" );

}
add_action( 'after_setup_theme', 'blogsia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogsia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogsia_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogsia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blogsia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blogsia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blogsia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blogsia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blogsia_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), BLOGSIA_VERSION, 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), BLOGSIA_VERSION, 'all' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), BLOGSIA_VERSION, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/styles.css', array(), BLOGSIA_VERSION, 'all' );
	wp_enqueue_style( 'blogsia-style', get_stylesheet_uri(), array(), BLOGSIA_VERSION, 'all' );
	wp_style_add_data( 'blogsia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), BLOGSIA_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), BLOGSIA_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), BLOGSIA_VERSION, true );
	wp_enqueue_script( 'blogsia-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), BLOGSIA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogsia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Link Attributes
 */
function blogsia_posts_link_attributes() {
	return 'class="btn btn-primary text-uppercase text-black"';
}
add_filter('next_posts_link_attributes', 'blogsia_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'blogsia_posts_link_attributes');