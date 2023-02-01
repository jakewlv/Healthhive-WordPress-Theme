<?php
/**
 * Cleanup WordPress Head.
 *
 * @package oxhu
 */

add_filter( 'the_generator', 'oxhu_remove_version' );
remove_action(
	'wp_head',
	'wlwmanifest_link'
); // remove wlwmanifest.xml (needed to support windows live writer).
remove_action( 'wp_head', 'wp_generator' ); // remove WordPress version.
remove_action( 'wp_head', 'rsd_link' ); // remove really simple discovery link.
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // remove emojis.
remove_action( 'wp_print_styles', 'print_emoji_styles' );   // remove emojis.
remove_action(
	'wp_head',
	'adjacent_posts_rel_link_wp_head'
); // remove the / and previous post links.
remove_action( 'wp_head', 'feed_links', 2 ); // remove rss feed links.
remove_action( 'wp_head', 'feed_links_extra', 3 ); // removes all extra rss feed links.
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); // remove the REST API link.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // remove oEmbed discovery links.
remove_action(
	'template_redirect',
	'rest_output_link_header',
	11,
	0
); // remove the REST API link from HTTP Headers.
remove_action(
	'wp_head',
	'wp_oembed_add_host_js'
); // remove oEmbed-specific javascript from front-end / back-end.
remove_action( 'rest_api_init', 'wp_oembed_register_route' ); // remove the oEmbed REST API route.
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 ); // don't filter oEmbed results.

/**
 * Undocumented function
 *
 * @param [type] $src comment.
 */
function oxhu_cleanup_query_string( $src ) {
	$parts = explode( '?', $src );
	return $parts[0];
}

add_filter( 'script_loader_src', 'oxhu_cleanup_query_string', 15, 1 );
add_filter( 'style_loader_src', 'oxhu_cleanup_query_string', 15, 1 );


/**
 * Remove version
 */
function oxhu_remove_version() {
	return '';
}


/**
 * Remove Block Library CSS
 */
function oxhu_remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'oxhu_remove_block_library_css' );


/**
 * Remove global script
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_dequeue_style( 'global-styles' );
		wp_deregister_style( 'global-styles' );
	},
	PHP_INT_MAX
);

/**
 * Remove dashicons in frontend for unauthenticated users.
 *
 * @param scripts $scripts comment.
 */
function oxhu_dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies                 = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff(
			$jquery_dependencies,
			array( 'jquery-migrate' )
		);
	}
}

add_action( 'wp_default_scripts', 'oxhu_dequeue_jquery_migrate' );


/**
 * Load jQuery on specified pages.
 */
function oxhu_modify_jquery() {
if (  is_page( 'home' ) ) {
wp_dequeue_script( 'jquery' );
wp_deregister_script( 'jquery' );
}
}

add_action( 'wp_enqueue_scripts', 'oxhu_modify_jquery' );



add_action( 'wp_enqueue_scripts', 'oxhu_dequeue_dashicons' );
/**
 * Remove dashicons in frontend for unauthenticated users.
 */
function oxhu_dequeue_dashicons() {
	if ( ! is_user_logged_in() ) {
		wp_deregister_style( 'dashicons' );
	}
}


add_filter( 'use_block_editor_for_post_type', 'oxhu_disable_block_editor' );
/**
 * Remove dashicons in frontend for unauthenticated users.
 *
 * @param mixed $use_block_editor comment.
 */
function oxhu_disable_block_editor( $use_block_editor ) {
	return false;
}

function disable_classic_theme_styles() {
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_filter('wp_enqueue_scripts', 'disable_classic_theme_styles', 100);
