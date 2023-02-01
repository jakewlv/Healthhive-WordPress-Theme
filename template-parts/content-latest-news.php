<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oxhu
 */

?>

<article id="post-<?php the_ID(); ?>" class="latest-news__post post" <?php post_class(); ?>>
	<div class="latest-news__post-thumb">
		<?php
		if ( has_post_thumbnail() ) {
			oxhu_post_thumbnail();
		} else {
			echo '<img src="https://res.cloudinary.com/cdn-oxhu/images/v1669834853/latest-news-default/latest-news-default.png?_i=AA" />';
		}
		?>
	</div>

		<div class="latest-news__text-container mobile">
			<?php
				the_title( '<h3 class="entry-title latest-news__post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
		<div class="latest-news__post-excerpt">
			<?php
			the_excerpt();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oxhu' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<div class="latest-news__author">
					<div class="latest-news__author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'email' ), 40, 'mystery', 'author avatar' ); ?>
					</div>
					<h3 class="latest-news__author-name">
							<?php echo esc_html( ucwords( get_the_author_meta( 'display_name' ) ) ); ?>
					</h3>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
</article>
