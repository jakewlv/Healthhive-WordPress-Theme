<?php
/**
 * Template part for displaying visions & values section
 *
 * @package oxhu
 */

$values_title       = get_field( 'visions_title' );
$values_description = get_field( 'visions_description' );
?>

<section class='values content-grid section section--pad mobile'>
	<div class='values__inner grid-centered'>
		<div class='section-intro mb-6'>
			<?php if ( ! empty( $values_title ) ) : ?>
				<h2 class='section-intro__title section-intro__title--dark hidden animate-first'>
					<?php echo esc_html( $values_title ); ?>
				</h2> 
				<?php endif; ?>
			<?php if ( ! empty( $values_description ) ) : ?>
				<p class='section-intro__description hidden animate-second'>
					<?php echo esc_html( $values_description ); ?>
				</p>
			<?php endif; ?>
		</div>
	<div class='values__values'>
		<?php
		$args  = array(
			'post_type'      => 'values',
			'posts_per_page' => 4,
			'order'          => 'ASC',
		);
		$query = new WP_Query( $args );
		?>
		<?php if ( $query->have_posts() ) : ?>
			<?php
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
				<?php get_template_part( 'template-parts/content', 'value' ); ?>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
	</div>
	</div>
</section>

