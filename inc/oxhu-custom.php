<?php
/**
 * Custom OXHU theme functions and cverrides
 *
 * @package oxhu
 */

/**
 * Add a class to the front page header.
 *
 * @return string
 */
// function oxhu_header_class_filter() {
// 	if ( is_front_page() ) {
// 		return 'header--front';
// 	} else {
// 		return '';
// 	}
// }

// add_filter( 'input_class', 'oxhu_header_class_filter' );


/**
 * Add padding to top of all pages except front page.
 *
 * @param $classes
 *
 * @return mixed
 */
function oxhu_page_padding( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'pad-top';
	}

	return $classes;
}

add_filter( 'body_class', 'oxhu_page_padding' );