<?php
/**
 * Template part for displaying page content in members.php
 *
 * @package oxhu
 */

?>



<article id="post-<?php the_ID(); ?>" class="" <?php post_class(); ?>>

	<header class="entry-header">
		<h2>Members Content</h2>
	</header>

	<?php oxhu_post_thumbnail(); ?>

	<div class="entry-content">

	<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oxhu' ),
				'after'  => '</div>',
			)
		);
		?>



	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__(
							'Edit <span class="screen-reader-text">%s</span>',
							'oxhu'
						),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer>
		<?php endif; ?>
</article>

