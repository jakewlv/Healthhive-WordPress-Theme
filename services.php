<?php
/**
 *  Template Name: OXHU-Services
 *
 * @package oxhu
 */

get_header();

?>

	<section class='consultation content-grid section section--pad'>
		<div class='consultation__inner grid-centered'>
		<?php
		get_template_part( 'template-parts/services-page/content', 'consultation' )
		?>
		</div>
	</section>

	<section class='plans content-grid section section--pad-last'>
		<fieldset class="plans__fieldset grid-centered">
		<?php
		$plans_title_no_sub       = get_field( 'plans_title_no_subscription' );
		$plans_description_no_sub = get_field( 'plans_description_no_subscription' );
		$plans_title              = get_field( 'plans_title_subscribed' );
		$plans_description        = get_field( 'plans_description_subscribed' );
		if ( ! is_user_logged_in() ) {
			?>
				<div class='section-intro section-intro--light mb-6'>
				<?php if ( ! empty( $plans_title_no_sub ) ) : ?>
								<h2 class='section-intro__title hidden animate-first'>
					<?php echo esc_html( $plans_title_no_sub ); ?>
								</h2>
				<?php endif; ?>

				<?php if ( ! empty( $plans_description_no_sub ) ) : ?>
								<p class='section-intro__description hidden animate-second'>
					<?php echo esc_html( $plans_description_no_sub ); ?>
								</p>
				<?php endif; ?>

					</div>
			<?php } else { ?>
					<div class='section-intro section-intro--light mb-6'>
				<?php if ( ! empty( $plans_title ) ) : ?>
								<h1 class='section-intro__title hidden animate-first'>
									<?php echo esc_html( $plans_title ); ?>
								</h1>
				<?php endif; ?>

				<?php if ( ! empty( $plans_description ) ) : ?>
								<p class='section-intro__description hidden animate-second'>
					<?php echo esc_html( $plans_description ); ?>
								</p>
				<?php endif; ?>
					</div>
			<?php	} ?>

		<?php
		$levels = rcp_get_membership_levels(
			array(
				'status' => 'active',
				'number' => 100,
			)
		);
		$i      = 0;
		if ( $levels ) :
			?>
			<?php
			if ( count( $levels ) < 1 ) :
					endif;
			?>
				<div id="plan__levels " class='plan__levels' role='list'>
				<?php
				foreach ( $levels as $key => $level ) :
					if ( rcp_show_subscription_level( $level->get_id() ) ) :
						?>
					<div class="plan__level plan__level--<?php echo esc_attr( $level->get_id() ); ?>">
						<?php if ( $level->get_id() === 9 ) { ?>
							<div class="plan__header">
								<div class="plan__name">
								<?php echo esc_html( $level->get_name() ); ?>
								</div>
								<div class="plan__price plan__price--enquire" >Enquire</div>
							</div>
							<?php } else { ?>
							<div class="plan__header">
								<div class="plan__name">
								<?php echo esc_html( $level->get_name() ); ?>
								</div>
								<div class="plan__price" rel="<?php echo esc_attr( $level->get_price() ); ?>">
									£<?php echo ! $level->is_free() ? esc_attr( $level->get_price() ) : esc_html__( 'free', 'rcp' ); ?>
									<div class="plan__duration">
									<?php
									echo '<span>Per</span> ' . wp_kses_post( $level->get_duration_unit() );
									?>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="plan__description" role='list'> 
								<?php
								$description       = $level->get_description();
								$split_description = explode( '</span>', $description, '-1' );
								foreach ( $split_description as $key ) {
									echo "<i icon-name='check' class='plan__icon'></i>" . wp_kses_post( $key ) . '</span>';
								}
								?>
							</div>
							<?php if ( $level->get_id() === 9 ) { ?>
							<div class="plan__footer">
								<a href='mailto:hello@oxhu.co.uk'
								class='plan__button btn'>Contact us</a>
							</div>
							<?php } else { ?>
							<div class="plan__footer">
								<a href='<?php echo esc_url( site_url() ); ?>/register/oxhu-plan-<?php echo esc_attr( $level->get_id() ); ?>' class='plan__button btn'>Sign Up</a>
							</div>
							<?php	} ?>
						</div>
						<?php $i ++; ?>
						<?php endif; ?>
					<?php endforeach; ?>
			</div>
			<?php else : ?>
			<?php endif; ?>
		</fieldset>


	</section>
<?php
get_footer();
