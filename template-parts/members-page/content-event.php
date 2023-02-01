<?php
/**
 * Event single content.
 *
 * @package oxhu
 */

?> 
<style>
</style>

<?php
$event_title       = get_the_title();
$event_date        = get_field( 'event_date' );
$event_time        = get_field( 'event_time' );
$event_description = get_field( 'event_description' );
$event_location    = get_field( 'event_location' );
$event_image       = get_field( 'event_image' )
?>


<?php if ( ! empty( $event_image ) ) : ?>
		<img src='<?php echo esc_url( $event_image['url'] ); ?>'
		alt='<?php echo esc_attr( $event_image['alt'] ); ?>' class='event-single__image'>
<?php endif; ?>

<h1 class="event-single__title mobile"><?php echo esc_html( get_the_title() ); ?></h1>

	<div class="event-single__body mobile">
		<div class="event-single__text">
		<div class="event-single__dates">
			<div class="event-single__date-container">
				<span>Date:</span>
				<h4 class="event-single__date">
					<i icon-name='calendar'></i>
					<?php if ( ! empty( $event_date ) ) : ?>
						<?php echo esc_html( $event_date ); ?>
					<?php endif; ?>
				</h4>
			</div>

			<div class="event-single__time-container">
				<span>Start Time:</span>
				<h4 class="event-single__time">
					<i icon-name='clock'></i>
					<?php if ( ! empty( $event_time ) ) : ?>
						<?php echo esc_html( $event_time ); ?>
					<?php endif; ?>
				</h4>
			</div>
		</div>

		<div class="event-single__description">
			<?php if ( ! empty( $event_description ) ) : ?>
				<?php echo wp_kses_post( $event_description ); ?>
			<?php endif; ?>
		</div>

		<div class="event-single__location-container">
			<span>Location:</span>
			<h4 class="event-single__location">
			<i icon-name='map-pin'></i>
				<?php if ( ! empty( $event_location ) ) : ?>
					<?php echo esc_html( $event_location ); ?>
				<?php endif; ?>
			</h4>
		</div>
		</div>


		<div class="event-single__form-container">
			<span>Join Event:</span>
			<div class="event-single__form">
			<?php echo do_shortcode( '[hf_form slug="event"]' ); ?>
			</div>
		</div>
	</div>


