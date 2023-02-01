<?php
/**
 * Event single content.
 *
 * @package oxhu
 */

$challenge_start_date  = get_field( 'challenge_start_date' );
$challenge_end_date    = get_field( 'challenge_end_date' );
$challenge_description = get_field( 'challenge_description' );
$challenge_goal        = get_field( 'challenge_goal' );
?>

<div class="challenges__header">
<h1><?php echo esc_html( get_the_title() ); ?></h1>
</div>

	<div class="challenges__body">
		<div class="challenges__dates">
			<div class="challenges__start-date challenges__date-container">
				<span>Start Date:</span>
				<h4 class="challenges__date">
					<i icon-name='calendar'></i>
					<?php if ( ! empty( $challenge_start_date ) ) : ?>
						<?php echo esc_html( $challenge_start_date ); ?>
					<?php endif; ?>
				</h4>
			</div>

			<div class="challenges__end-date challenges__date-container">
				<span>End Date:</span>
				<h4 class="challenges__date">
					<i icon-name='calendar'></i>
					<?php if ( ! empty( $challenge_end_date ) ) : ?>
						<?php echo esc_html( $challenge_end_date ); ?>
					<?php endif; ?>
				</h4>
			</div>
		</div>



		<div class="challenges__description">
			<?php if ( ! empty( $challenge_description ) ) : ?>
				<?php echo wp_kses_post( $challenge_description ); ?>
			<?php endif; ?>
		</div>


		<h4 class="challenges__goal">
		<?php if ( ! empty( $challenge_goal ) ) : ?>
				<span><i icon-name='target'></i>Goal: </span><?php echo esc_html( $challenge_goal ); ?>
			<?php endif; ?>
		</h4>
	</div>

