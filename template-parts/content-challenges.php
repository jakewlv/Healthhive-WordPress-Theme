<?php
/**
 * Monthly challenges list.
 *
 * @package oxhu
 */

$challenge_start_date = get_field( 'challenge_start_date' );
$challenge_end_date   = get_field( 'challenge_end_date' );
$challenge_excerpt    = get_field( 'challenge_excerpt' );
$challenge_goal       = get_field( 'challenge_goal' );
$challenge_icon       = get_field( 'challenge_icon' );
?>

	<div class="challenges__header">
		<div class="challenges__icon">
			<?php if ( ! empty( $challenge_icon ) ) : ?>
				<i icon-name='<?php echo esc_html( $challenge_icon ); ?>'></i>
				<?php else : ?>
				<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666691207/empty-icon/empty-icon.webp?_i=AA' alt='empty icon'>
			<?php endif; ?>
			</div>

			<h3 class="challenges__title">
				<a href="<?php echo esc_url( get_permalink() ); ?>">	
					<?php echo esc_html( get_the_title() ); ?>
				</a>
			</h3>
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



		<p class="challenges__excerpt">
			<?php if ( ! empty( $challenge_excerpt ) ) : ?>
				<?php echo esc_html( $challenge_excerpt ); ?>
			<?php endif; ?>
		</p>


		<h4 class="challenges__goal">
		<?php if ( ! empty( $challenge_goal ) ) : ?>
				<span><i icon-name='target'></i>Goal: </span><?php echo esc_html( $challenge_goal ); ?>
			<?php endif; ?>
		</h4>
	</div>

<a href="<?php echo esc_url( get_the_permalink() ); ?>"  class="btn challenges__button">More Info</a>


