<?php
/**
 * The template for displaying single service page
 *
 * @package oxhu
 */

get_header();
?>

<main id="primary" class="site-main content-grid">

	<div class='site-main__inner grid-centered'>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/services-page/content', 'service' );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'oxhu' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'oxhu' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
