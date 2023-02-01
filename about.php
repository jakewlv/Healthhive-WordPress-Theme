<?php
/**
 *  Template Name: OXHU-about-page
 *
 * @package oxhu
 */

get_header();
?>

	<main id="primary" class="site-main content-grid">

		<?php
		get_template_part( 'template-parts/content', 'page-intro' )
		?>

		<section class='team-members grid-centered section section--pad-last'>

			<div class='section-intro mb-6'>
				<h2
					class='section-intro__title section-intro__title--dark hidden animate-first'>
					<?php
					echo esc_html(
						get_field( 'team_members_title' )
					);
					?>
				</h2>

				<p class='section-intro__description hidden animate-second'>
			<?php echo esc_html( get_field( 'team_members_description' ) ); ?>
				</p>

			</div>

			<div class='team-members__inner'>

				<?php
				$args = array(
					'post_type'      => 'team-members',
					'posts_per_page' => 4,
					'order'          => 'ASC',
				);

				$query = new WP_Query( $args );
				?>

				<?php
				if ( $query->have_posts() ) :
					?>
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();
						?>

						<?php
						get_template_part( 'template-parts/content', get_post_type() )
						?>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			</div>
		</section>
	</main>
<?php
get_footer();
