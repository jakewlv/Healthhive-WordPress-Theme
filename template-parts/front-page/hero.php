<?php
/**
 * Template part for displaying hero section
 *
 * @package oxhu
 */

$hero_image    = get_field( 'hero_image' );
$hero_title    = get_field( 'hero_title' );
$hero_subtitle = get_field( 'hero_text' );
$hero_eyebrow  = get_field( 'hero_eyebrow' );
$hero_button   = get_field( 'hero_button' );
?>

<section class='hero content-grid'>
	<div class='hero__inner grid-centered'>
		<div class='hero__caption caption'>
			<div class='caption__text'>
				<?php if ( ! empty( $hero_eyebrow ) ) : ?>
					<p class='caption__eyebrow reveal animate-first'>
						<?php echo esc_html( $hero_eyebrow ); ?>
					</p>
				<?php endif; ?>

				<?php if ( ! empty( $hero_title ) ) : ?>
					<h1 class='caption__title reveal animate-second'>
						<?php
						$hero_title = strip_tags( get_field( 'hero_title' ), '<span><br>' );
						echo wp_kses_post( str_replace( 'fitness', '<span>fitness</span>', $hero_title ) );
						?>
					</h1>
				<?php endif; ?>

				<?php if ( ! empty( $hero_subtitle ) ) : ?>
					<p class='caption__subtitle reveal animate-third'>
						<?php echo esc_html( $hero_subtitle ); ?>
					</p>
				<?php endif; ?>
			</div>

			<?php if ( ! empty( $hero_button ) ) : ?>
			<a href='<?php echo esc_url( $hero_button['url'] ); ?>' class='btn caption__btn reveal animate-fourth'><?php echo esc_html( $hero_button['title'] ); ?></a>
			<?php endif; ?>

		</div>
	</div>

	<?php if ( ! empty( $hero_image ) ) : ?>
		<img src='<?php echo esc_url( $hero_image['url'] ); ?>' alt='<?php echo esc_attr( $hero_image['alt'] ); ?>'
		class='hero__image grid-full-width'>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
</section>
