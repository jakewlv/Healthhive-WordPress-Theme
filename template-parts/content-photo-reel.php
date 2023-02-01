<?php
/**
 * Template part for displaying the photo reel
 *
 * @package oxhu
 */

?>

<section class='photo-reel grid-full-width'>
	<div class='photo-reel__inner'>

		<?php
		if ( have_rows( 'image_reel' ) ) :
			?>
			<?php
			while ( have_rows( 'image_reel' ) ) :
				the_row();

				// Get sub field values.
				$image1 = get_sub_field( 'image_1' );
				$image2 = get_sub_field( 'image_2' );
				$image3 = get_sub_field( 'image_3' );
				?>

				<?php
				if ( ! empty( $image1 ) ) :
					?>
								<img src='<?php echo esc_url( $image1['sizes']['oxhu_image_reel'] ); ?>'
								alt='<?php echo esc_attr( $image1['alt'] ); ?>' class='photo-reel__image'>
					<?php
				else :
					?>
								<img
									src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA'
									alt='Empty image'>
					<?php
				endif;
				?>

				<?php
				if ( ! empty( $image2 ) ) :
					?>
								<img src='<?php echo esc_url( $image2['sizes']['oxhu_image_reel'] ); ?>'
								alt='<?php echo esc_attr( $image2['alt'] ); ?>' class='photo-reel__image'>
					<?php
				else :
					?>
								<img
									src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA'
									alt='Empty image'>
					<?php
				endif;
				?>

				<?php
				if ( ! empty( $image3 ) ) :
					?>
								<img src='<?php echo esc_url( $image3['sizes']['oxhu_image_reel'] ); ?>'
								alt='<?php echo esc_attr( $image3['alt'] ); ?>' class='photo-reel__image'>
					<?php
				else :
					?>
								<img
									src='https://res.cloudinary.com/cdn-oxhu/images/v1666690035/empty-540x420-1/empty-540x420-1.webp?_i=AA'
									alt='Empty image'>
					<?php
				endif;
				?>

				<?php
			endwhile;
			?>
			<?php
		endif;
		?>
	</div>
</section>
