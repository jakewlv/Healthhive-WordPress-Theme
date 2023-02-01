<?php
/**
 * Template part for displaying the Latest news section
 *
 * @package oxhu
 */

?>

<section class='latest-news content-grid section section--pad-last'>
	<div class='latest-news__inner grid-centered'>
		<div class='section-intro mb-6 mobile'>

		<?php if ( have_rows( 'latest_news' ) ) : ?>
			<?php
			while ( have_rows( 'latest_news' ) ) :
				the_row();
				// Get sub field values.
				$latest_news_title       = get_sub_field( 'latest_news_title' );
				$latest_news_description = get_sub_field( 'latest_news_description' );
				?>

					<?php if ( ! empty( $latest_news_title ) ) : ?>
					<h2 class='section-intro__title section-intro__title--dark hidden animate-first'>
						<?php echo esc_html( $latest_news_title ); ?>
					</h2>
					<?php endif; ?>

					<?php if ( ! empty( $latest_news_description ) ) : ?>
					<p class='section-intro__description hidden animate-second'>
						<?php	echo esc_html( $latest_news_description ); ?>
					</p>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php	endif; ?>
		</div>

		<div class='latest-news__posts'>
		<?php
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => 6,
			'order'          => 'ASC',
		);

		$query = new WP_Query( $args );
		?>

		<?php if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : ?>
				<?php $query->the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'latest-news' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		</div>
	</div>
</section>
