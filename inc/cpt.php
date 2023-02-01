<?php
/**
 * CPT Register Custom Post Types.
 *
 * @package oxhu
 */
function oxhu_register_my_cpts() {
	/**
	 * Post Type: Testimonials.
	 */

	$labels = array(
		'name'          => esc_html__( 'Testimonials', 'oxhu' ),
		'singular_name' => esc_html__( 'Testimonial', 'oxhu' ),
		'all_items'     => esc_html__( 'All Testimonials', 'oxhu' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Testimonials', 'oxhu' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => false,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'testimonials',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-format-chat',
		'supports'              => array( 'title', 'custom-fields' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'testimonials', $args );

	/**
	 * Post Type: OXHU Values.
	 */

	$labels = array(
		'name'          => esc_html__( 'Our Values', 'oxhu' ),
		'singular_name' => esc_html__( 'Value', 'oxhu' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Our Values', 'oxhu' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => false,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'values',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-heart',
		'supports'              => array( 'title', 'custom-fields' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'values', $args );

	/**
	 * Post Type: OXHU Team Members.
	 */

	$labels = array(
		'name'          => esc_html__( 'Team Members', 'oxhu' ),
		'singular_name' => esc_html__( 'Team Member', 'oxhu' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Team Members', 'oxhu' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'team-members',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-universal-access',
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'team-members', $args );

	/**
	 * Post Type: OXHU Events.
	 */

	$labels = array(
		'name'          => esc_html__( 'Events', 'oxhu' ),
		'singular_name' => esc_html__( 'Event', 'oxhu' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Events', 'oxhu' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'events',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-calendar',
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'show_in_graphql'       => false,
	);
	register_post_type( 'events', $args );

		/**
	 * Post Type: OXHU Challenges.
	 */

	$labels = array(
		'name'          => esc_html__( 'Challenges', 'oxhu' ),
		'singular_name' => esc_html__( 'Challenge', 'oxhu' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Challenges', 'oxhu' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'challenges',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-awards',
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'show_in_graphql'       => false,
	);
	register_post_type( 'challenges', $args );
}

add_action( 'init', 'oxhu_register_my_cpts' );
