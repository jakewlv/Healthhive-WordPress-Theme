<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oxhu
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oxhu_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on oxhu, use a find and replace
		* to change 'oxhu' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'oxhu', get_template_directory() . '/languages' );

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
			'main-menu'         => esc_html__( 'Main Menu', 'oxhu' ),
			'member-menu'       => esc_html__( 'Member Menu', 'oxhu' ),
			'member-menu-login' => esc_html__( 'Member Menu Login', 'oxhu' ),
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
		apply_filters(
			'oxhu_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
}

add_action( 'after_setup_theme', 'oxhu_setup' );

/**
 * Register additional image sizes.
 */
function oxhu_image_sizes() {
	add_image_size( 'oxhu_image_reel', 540, 420, true );
	add_image_size( 'oxhu_about_image', 540, 420, true );
	add_image_size( 'oxhu_member_image', 400, 400, true );
	add_image_size( 'oxhu_consultation_image', 600, 600, true );
	add_image_size( 'oxhu_testimonial_image', 85, 85, true );
}

add_action( 'after_setup_theme', 'oxhu_image_sizes' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oxhu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oxhu_content_width', 640 );
}

add_action( 'after_setup_theme', 'oxhu_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oxhu_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'oxhu' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'oxhu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'oxhu_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oxhu_scripts() {
	if ( is_page( 'Home' ) ) {
		wp_enqueue_script(
			'oxhu-splide-js',
			get_template_directory_uri() . '/build/js/splide.js',
			array(),
			_S_VERSION,
			true
		);
	}
	wp_enqueue_script(
		'oxhu-js',
		get_template_directory_uri() . '/build/js/app.js',
		array(),
		_S_VERSION,
		true
	);

	wp_enqueue_style(
		'oxhu-style',
		get_template_directory_uri() . '/build/css/app.css',
		array(),
		_S_VERSION
	);
	wp_style_add_data( 'oxhu-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'oxhu_scripts', 100 );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load Cleanup.
 */
require get_template_directory() . '/inc/cleanup.php';

/**
 * Load Custom Post Types.
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Load Custom Login.
 */
require get_template_directory() . '/inc/custom-login.php';

/**
 * OXHU custom theme functions.
 */
require get_template_directory() . '/inc/oxhu-custom.php';

/**
 * Redirect to home page after logout
 */
function oxhu_auto_redirect_after_logout() {
	wp_safe_redirect( home_url() );
	exit;
}
add_action( 'wp_logout', 'oxhu_auto_redirect_after_logout' );





