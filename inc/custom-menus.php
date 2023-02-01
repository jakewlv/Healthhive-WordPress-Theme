<?php

add_filter( 'nav_menu_css_class', 'oxhu_css_attributes_filter', 100, 1 );
add_filter( 'nav_menu_item_id', 'oxhu_css_attributes_filter', 100, 1 );
add_filter( 'page_css_class', 'oxhu_css_attributes_filter', 100, 1 );
function oxhu_css_attributes_filter( $var ) {
	return is_array( $var ) ? array_intersect( $var,
		array( 'main-menu__list-item', 'current-menu-item' ) ) : '';
}


/**
 * Add class to menu link.
 *
 * @param atts $atts comment.
 * @param item $item comment.
 * @param args $args comment.
 *
 * @return mixed
 */
function add_menu_link_class( $atts, $item, $args ) {
	if ( property_exists( $args, 'link_class' ) ) {
		$atts['class'] = $args->link_class;
	}

	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/**
 * Add class to menu list item.
 *
 * @param classes $classes comment.
 * @param item    $item comment.
 * @param args    $args comment.
 *
 * @return mixed
 */
function add_menu_list_item_class( $classes, $item, $args ) {
	if ( property_exists( $args, 'list_item_class' ) ) {
		$classes[] = $args->list_item_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_menu_list_item_class', 1, 3 );
