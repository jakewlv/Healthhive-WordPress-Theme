<?php
/**
 * Template Name: OXHU-contact-page
 * The template for displaying the contact page
 *
 * @package oxhu
 */

get_header();
?>

	<section class='contact content-grid section section--pad mobile'>
		<div class='contact__inner grid-centered'>
		<?php
		get_template_part( 'template-parts/contact-page/content', 'contact' );
		?>
		</div>
	</section>

	<section class='faq content-grid section section--pad-last '>
		<div class='faq__inner grid-centered mobile'>
		<div class='section-intro section-intro--light mb-6'>
			<?php if ( have_rows( 'faq_intro' ) ) : ?>
				<?php
				while ( have_rows( 'faq_intro' ) ) :
					the_row();
					// Get sub field values.
					$section_title       = get_sub_field( 'section_title' );
					$section_description = get_sub_field( 'section_description' );
					?>

						<?php if ( ! empty( $section_title ) ) : ?>
						<h2 class='section-intro__title reveal animate-first'>
							<?php echo esc_html( $section_title ); ?>
						</h2>
						<?php endif; ?>

						<?php if ( ! empty( $section_description ) ) : ?>
						<p class='section-intro__description reveal animate-second'>
							<?php	echo esc_html( $section_description ); ?>
						</p>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php	endif; ?>
			</div>
		<?php
		get_template_part( 'template-parts/contact-page/content', 'faq' );
		?>
		</div>
	</section>


<?php
get_footer();
