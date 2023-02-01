<?php
/**
 * Template part for displaying happy customers section of the front page
 *
 * @package oxhu
 */

?>

<?php
$args_tests = array(
	'post_type'      => 'testimonials',
	'posts_per_page' => 6,
);

$testimonials = new WP_Query( $args_tests );
?>



<?php
if ( have_rows( 'happy_customers' ) ) :
	?>
	<?php
	while ( have_rows( 'happy_customers' ) ) :
		the_row();

		// Get sub field values.
		$happy_customers_title       = get_sub_field( 'happy_customers_title' );
		$happy_customers_description = get_sub_field( 'happy_customers_description' );
		$happy_customers_background  = get_sub_field( 'happy_customers_background_image' );

		?>
<section id='happy-customers' class='happy-customers content-grid section section--pad'
	style='background-image:url("<?php echo esc_url( $happy_customers_background ); ?>")'>
	<div class='happy-customers__inner grid-centered'>
	<div class='section-intro section-intro--light mb-3 mobile'>

		<?php
		if ( ! empty( $happy_customers_title ) ) :
			?>
			<h2 class='section-intro__title hidden animate-first'><?php echo esc_html( $happy_customers_title ); ?></h2>
			<?php
			endif;
		?>

			<?php
			if ( ! empty( $happy_customers_description ) ) :
				?>
			<p class='section-intro__description hidden animate-second'><?php echo esc_html( $happy_customers_description ); ?></p>
				<?php
			endif;
			?>


	</div>
	</div>
		<?php
	endwhile;
	?>
	<?php
	wp_reset_postdata()
	?>
	<?php
	endif;
?>


	<div class='happy-customers__testimonials  grid-full-width splide'>
		<?php


		if ( $testimonials->have_posts() ) :
			?>
		<div class=" splide__track">
			<ul class="splide__list">
				<?php
				while ( $testimonials->have_posts() ) :
					$testimonials->the_post();
					?>

					<?php
					$happy_customers_avatar  = get_field( 'testimonial_avatar' );
					$happy_customers_comment = get_field( 'testimonial_comment' );
					$happy_customers_name    = get_the_title();
					?>

				<li class="splide__slide happy-customers__testimonial">



					<div class='happy-customers__testimonial-text'>
					<!-- <span class='happy-customers__quote'>”</span> -->
						<?php
						if ( ! empty( $happy_customers_comment ) ) :
							?>
						<p class='happy-customers__comment'><?php echo esc_html( $happy_customers_comment ); ?></p>
							<?php
						endif;
						?>


					<div class="happy-customers__customer">
					<?php
					if ( ! empty( $happy_customers_avatar ) ) :
						?>
						<img src='<?php echo esc_url( $happy_customers_avatar['sizes']['oxhu_testimonial_image'] ); ?>'
							class='happy-customers__avatar'
							alt='<?php echo esc_attr( $happy_customers_avatar['alt'] ); ?>'>
						<?php
						else :
							?>
						<img
						src='https://res.cloudinary.com/cdn-oxhu/images/v1666688255/empty-avatar/empty-avatar.webp?_i=AA'
						alt='Empty Avatar' class='happy-customers__avatar'>
							<?php
						endif;
						?>
						<?php
						if ( ! empty( $happy_customers_name ) ) :
							?>
						<h3 class='happy-customers__name'><?php echo esc_html( $happy_customers_name ); ?></h3>
							<?php
						endif;
						?>
					</div>


					</div>
				</li>
					<?php
				endwhile;
				?>

			</ul>
		</div>
			<?php
			wp_reset_postdata()
			?>
			<?php
		endif;
		?>
	</div>

</section>


