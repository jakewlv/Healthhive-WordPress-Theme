<?php
/**
 * Service Content
 *
 * @package OXHU
 */

?>

<div class='services__service service'>
	<?php
	$service_image       = get_field( 'service_image' );
	$service_button      = get_field( 'service_button' );
	$service_button_text = get_field( 'service_button_text' );
	$service_price       = get_field( 'service_price' );
	$service_excerpt     = get_field( 'service_excerpt' );
	?>

	<img src='<?php echo esc_url( $service_image['url'] ); ?>' alt='<?php echo esc_attr( $service_image['alt'] ); ?>' class='service__image'>

	<div class='service__text-container'>
		<div class='service__text-content'>
			<h1 class='service__title service__title--light'><?php echo esc_html( get_the_title() ); ?></h1>
			<h2 class='service__price service__price--light'><?php echo esc_html( $service_price ); ?></h2>
			<p class='service__excerpt'><?php echo esc_html( $service_excerpt ); ?></p>

			<?php if ( have_rows( 'service_benefits' ) ) : ?>
				<?php
				while ( have_rows( 'service_benefits' ) ) :
					the_row();

					// Get sub field values.
					$benefit_1 = get_sub_field( 'benefit_1' );
					$benefit_2 = get_sub_field( 'benefit_2' );
					$benefit_3 = get_sub_field( 'benefit_3' );
					?>

					<ul class='service__benefit-list' role='list'>
						<li class='service__benefit-item'>
						<?php echo esc_html( $benefit_1 ); ?>
						</li>
						<li class='service__benefit-item'>
						<?php echo esc_html( $benefit_2 ); ?>
						</li>
						<li class='service__benefit-item'>
						<?php echo esc_html( $benefit_3 ); ?>
						</li>
					</ul>
					<?php endwhile; ?>
				<?php endif; ?>

			<a href='<?php echo esc_url( get_permalink() ); ?>'
			class='service__button btn'><?php echo esc_html( $service_button_text ); ?></a>
		</div>
	</div>
</div>



