<?php
/**
 * Template part for displaying about section of the front page
 *
 * @package oxhu
 */

$about_image  = get_field( 'about_image' );
$about_title  = get_field( 'about_title' );
$about_text   = get_field( 'about_text' );
$about_button = get_field( 'about_button' );
?>

<section class='about content-grid section section--pad'>
	<div class='about__inner grid-centered'>
	<?php if ( ! empty( $about_image ) ) : ?>
		<img src='<?php echo esc_url( $about_image['sizes']['oxhu_about_image'] ); ?>'
		alt='<?php echo esc_attr( $about_image['alt'] ); ?>' class='about__image'>
	<?php else : ?>
		<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA' alt='Empty image'>
	<?php endif; ?>
		<div class='about__text-container mobile'>
		<?php if ( ! empty( $about_title ) ) : ?>
			<h2 class='about__title hidden animate-first'><?php echo wp_kses_post( $about_title ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $about_text ) ) : ?>
			<p class='about__description hidden animate-second'><?php echo wp_kses_post( $about_text ); ?></p>
		<?php endif; ?>
			<a href='<?php echo esc_url( $about_button['url'] ); ?>' class='btn about__btn hidden animate-third'><?php echo esc_html( $about_button['title'] ); ?></a>
		</div>
	</div>
</section>


