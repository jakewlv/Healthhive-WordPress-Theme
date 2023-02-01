<?php
/**
 * Events list content.
 *
 * @package oxhu
 */

$event_date        = get_field( 'event_date' );
$event_time        = get_field( 'event_time' );
$event_description = get_field( 'event_description' );
$event_excerpt     = get_field( 'event_excerpt' );
$event_location    = get_field( 'event_location' );

$event_date_part = explode( ' ', $event_date );
?>
<div class="event">
	<div class="event__entry-content">
		<div class="event__date">
			<?php echo esc_html( $event_date_part[0] ); ?>
		</div>
		<div class="event__day-month">		
			<span class="event__day">
				<?php echo esc_html( $event_date_part[1] ); ?>
			</span>
			<span class="event__month">
				<?php echo esc_html( $event_date_part[2] ); ?>
		</span>
		</div>

	</div>


	<div class="event__body">

		<h1 class="event__title">
		<?php echo esc_html( mb_strimwidth( get_the_title(), 0, 35, ' ...' ) ); ?> <span class="event__title-sep">/</span> <span class="event__location"><?php echo esc_html( $event_location ); ?></span>
	</h1> 
		<p class="event__excerpt"><?php echo esc_html( $event_excerpt ); ?></p>

	</div>


	<a href="<?php echo esc_url( get_the_permalink() ); ?>"  class="btn event__button">More Info</a>
</div>



