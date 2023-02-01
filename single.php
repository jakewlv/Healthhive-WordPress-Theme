<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oxhu
 */

get_header();
?>

	<main id="primary" class="site-main content-grid section section--pad-last">

		<div class='site-main__inner grid-centered'>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/content', get_post_type() );

				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'oxhu' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

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
			</article><!-- #post-<?php the_ID(); ?> -->
				</div>

	</main><!-- #main -->

<?php

get_footer();
