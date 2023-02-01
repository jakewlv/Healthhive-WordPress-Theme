<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oxhu
 */

get_header();
?>


<?php
get_template_part( 'template-parts/front-page/hero', 'hero' );
get_template_part( 'template-parts/front-page/about', 'about' );
get_template_part( 'template-parts/content', 'photo-reel' );
get_template_part( 'template-parts/front-page/values', 'values' );
get_template_part( 'template-parts/front-page/happy-customers', 'happy-customers' );
get_template_part( 'template-parts/front-page/latest-news', 'latest-news' );
?>




<?php
get_footer();

