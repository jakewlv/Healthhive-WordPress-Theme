<?php
/**
 * Template Name: OXHU-members-page
 * The template for displaying the Members page
 *
 * @package oxhu
 */

get_header();
?>

<main id="primary" class="site-main content-grid section">
	<?php if ( ! rcp_user_can_access( get_current_user_id(), get_the_ID() ) ) { ?>
	<div class="grid-full-width members-sign-in content-grid section section--pad">
		<div class="members-sign-in__inner grid-centered">
		<?php if ( have_rows( 'no_access' ) ) : ?>
				<?php
				while ( have_rows( 'no_access' ) ) :
					the_row();
					// Get sub field values.
					$title   = get_sub_field( 'title' );
					$message = get_sub_field( 'message' );
					?>

						<?php if ( ! empty( $title ) ) : ?>
						<h2>
							<?php echo esc_html( $title ); ?>
						</h2>
						<?php endif; ?>

						<?php if ( ! empty( $message ) ) : ?>
						<p>
							<?php	echo wp_kses_post( $message ); ?>
						</p>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php	endif; ?>
			<!-- <h2>Members</h2>
			<p>You do not have access to this content. Please <a href="https://oxhu.co.uk/register/">sign in</a>.</p> -->
		</div>
	</div>

	<div id="sign-up" class="sign-up grid-full-width content-grid section section--pad-last" 
	style="background-color: #1c2023;">
		<div class="sign-up__inner grid-centered">

		<fieldset class="plans__fieldset grid-centered">
			<div class='section-intro section-intro--light mb-6'>
			<?php if ( have_rows( 'subscribe_intro' ) ) : ?>
				<?php
				while ( have_rows( 'subscribe_intro' ) ) :
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
								<a href='https://oxhu.co.uk/register/oxhu-plan-<?php echo esc_attr( $level->get_id() ); ?>'
								class='plan__button btn'>Contact us</a>
							</div>
							<?php } else { ?>
							<div class="plan__footer">
								<a href='https://oxhu.co.uk/register/oxhu-plan-<?php echo esc_attr( $level->get_id() ); ?>' class='plan__button btn'>Sign Up</a>
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
		</div>
	</div>
	<?php	} else { ?>


	<div class='site-main__inner grid-centered section section--pad mobile'>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'members' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
	</div>
	
			<?php if ( have_rows( 'challenges_intro' ) ) : ?>
					<?php
					while ( have_rows( 'challenges_intro' ) ) :
						the_row();
						// Get sub field values.
						$section_title       = get_sub_field( 'section_title' );
						$section_description = get_sub_field( 'section_description' );
						$background_image    = get_sub_field( 'background_image' );
						?>
			<section class="challenges grid-full-width content-grid section section--pad " style='background-image:url("<?php echo esc_url( $background_image ); ?>")'>
			<div class="challenges__inner grid-centered mobile">
				<div class='section-intro section-intro--left mb-3'>
							<?php if ( ! empty( $section_title ) ) : ?>
							<h2 class='section-intro__title section-intro--light reveal animate-first'>
								<?php echo esc_html( $section_title ); ?>
							</h2>
							<?php endif; ?>

							<?php if ( ! empty( $section_description ) ) : ?>
							<p class='section-intro__description reveal animate-second'>
								<?php	echo esc_html( $section_description ); ?>
							</p>
				</div>
					<div class="challenges__challenge reveal animate-third">
								<?php
								$args  = array(
									'post_type'      => 'challenges',
									'posts_per_page' => 1,
									'order'          => 'ASC',
								);
								$query = new WP_Query( $args );
								?>
								<?php if ( $query->have_posts() ) : ?>
									<?php
									while ( $query->have_posts() ) :
										$query->the_post();
										?>
										<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
								<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					</div>
			</div>
			</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php	endif; ?>
	
	<div class='site-main__inner grid-centered section section--pad-last mobile'>

		<section class="events">
			<div class='section-intro section-intro--left mb-6'>
			<?php if ( have_rows( 'events_intro' ) ) : ?>
				<?php
				while ( have_rows( 'events_intro' ) ) :
					the_row();
					// Get sub field values.
					$section_title       = get_sub_field( 'section_title' );
					$section_description = get_sub_field( 'section_description' );
					?>

						<?php if ( ! empty( $section_title ) ) : ?>
						<h2 class='section-intro__title section-intro__title--dark hidden animate-first'>
							<?php echo esc_html( $section_title ); ?>
						</h2>
						<?php endif; ?>

						<?php if ( ! empty( $section_description ) ) : ?>
						<p class='section-intro__description hidden animate-second'>
							<?php	echo esc_html( $section_description ); ?>
						</p>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php	endif; ?>
			</div>

			<div class="events__list">
				<?php
				$args  = array(
					'post_type'      => 'events',
					'posts_per_page' => 6,
					'order'          => 'ASC',
				);
				$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ) : ?>
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</section>
</div>
<?php } ?>
</main><!-- #main -->
<?php
get_footer();
