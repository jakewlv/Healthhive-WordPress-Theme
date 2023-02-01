<?php
/**
 * The template for displaying the page intro content.
 *
 * @package oxhu
 */

?>

<div class='page-intro grid-centered section section--pad mobile'>
<?php
$page_intro_title = strip_tags( get_field( 'page_intro_title' ), '<span><br>' );
$page_intro_text  = get_field( 'page_intro_text' );
?>

<?php if ( ! empty( $page_intro_title ) ) : ?>
	<h1 class='page-intro__title reveal animate-first'><?php echo wp_kses_post( str_replace( 'ultimate aim', '<span>ultimate aim</span>', $page_intro_title ) ); ?></h1>
<?php endif; ?>

<?php if ( ! empty( $page_intro_text ) ) : ?>
	<div class='page-intro__text reveal animate-second'><?php echo wp_kses_post( $page_intro_text ); ?></div>
<?php endif; ?>
</div>

<div class='page-intro__photo-reel photo-reel grid-full-width'>
	<div class='photo-reel__inner'>

		<?php if ( have_rows( 'page_intro_photo_reel' ) ) : ?>
			<?php
			while ( have_rows( 'page_intro_photo_reel' ) ) :
				the_row();

				// Image sizes.
				$size = 'oxhu_image_reel';

				// Get sub field values.
				$intro_image1 = get_sub_field( 'image_1' );
				$intro_image2 = get_sub_field( 'image_2' );
				$intro_image3 = get_sub_field( 'image_3' );
				?>

				<?php if ( ! empty( $intro_image1 ) ) : ?>
					<img src='<?php echo esc_url( $intro_image1['sizes']['oxhu_image_reel'] ); ?>'
					alt='<?php echo esc_attr( $intro_image1['alt'] ); ?>' class='photo-reel__image'>
					<?php else : ?>
						<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA' alt='Empty image'>
					<?php endif; ?>

				<?php if ( ! empty( $intro_image2 ) ) : ?>
						<img src='<?php echo esc_url( $intro_image2['sizes']['oxhu_image_reel'] ); ?>' alt='<?php echo esc_attr( $intro_image2['alt'] ); ?>' class='photo-reel__image'>
					<?php else : ?>
								<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA' alt='Empty image'>
					<?php endif; ?>

				<?php if ( ! empty( $intro_image3 ) ) : ?>
								<img src='<?php echo esc_url( $intro_image3['sizes']['oxhu_image_reel'] ); ?>' alt='<?php echo esc_attr( $intro_image3['alt'] ); ?>' class='photo-reel__image'>
					<?php else : ?>
								<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA' alt='Empty image'>
					<?php endif; ?>


				<?php endwhile; ?>
			<?php endif; ?>

	</div>
</div>
