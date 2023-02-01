<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oxhu
 */

?>

<div id="post-<?php the_ID(); ?>" class="mb-6" <?php post_class(); ?>>
<div class="post__post-thumb">
	<?php
	if ( has_post_thumbnail() ) {
		oxhu_post_thumbnail();
	} else {
		echo '<img src="https://res.cloudinary.com/cdn-oxhu/images/v1669834853/latest-news-default/latest-news-default.png?_i=AA" />';
	}
	?>
	</div>
	<header class="post__entry-header entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="post__entry-title entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="post__entry-title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<div class="post__entry-content entry-content">
		<?php
		the_excerpt();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oxhu' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post__post-meta post-meta">

				<div class="post__post-author post-author">
					<div class="post-author__avatar">
					<?php echo get_avatar( get_the_author_meta( 'email' ), 40, 'mystery', 'author avatar' ); ?>
					</div>
					<h3 class="post-author__name">
					<?php echo esc_html( ucwords( get_the_author_meta( 'display_name' ) ) ); ?>
					</h3>
				</div>
				<div class="post__post-date post-date">
					<?php oxhu_posted_on(); ?>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
