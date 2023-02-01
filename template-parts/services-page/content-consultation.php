<?php
/**
 * Consultation Content
 *
 * @package OXHU
 */

$consultation_image        = get_field( 'consultation_image' );
$consultation_title        = get_field( 'consultation_title' );
$consultation_description  = get_field( 'consultation_description' );
$consultation_button       = get_field( 'consultation_button' );
$consultation_download_app = get_field( 'consultation_download_app' );
?>

<div class='consultation__image-container'>
	<?php if ( ! empty( $consultation_image ) ) : ?>
		<img class='consultation__image' src='<?php echo esc_url( $consultation_image['sizes']['oxhu_consultation_image'] ); ?>' alt='<?php echo esc_attr( $consultation_image['alt'] ); ?>'>
		<?php else : ?>
		<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666693983/empty-475x660-1_693da90d/empty-475x660-1_693da90d.webp?_i=AA' alt='empty avatar' class='consultation__image'>
		<?php endif; ?>
</div>


<div class='consultation__text'>
	<?php if ( ! empty( $consultation_title ) ) : ?>
	<h1 class='consultation__title'><?php echo $consultation_title; ?></h1>
	<?php endif; ?>

	<?php if ( ! empty( $consultation_description ) ) : ?>
	<p class='consultation__description'><?php echo $consultation_description; ?></p>
	<?php endif; ?>


	<h6 class='consultation__feature-title'>Features</h6>
	<div class='consultation__feature-lists'>
		<?php if ( have_rows( 'consultation_features' ) ) : ?>
			<?php
			while ( have_rows( 'consultation_features' ) ) :
				the_row();

				// Get sub field values.
				$feature1 = get_sub_field( 'feature_1' );
				$feature2 = get_sub_field( 'feature_2' );
				$feature3 = get_sub_field( 'feature_3' );
				$feature4 = get_sub_field( 'feature_4' );
				$feature5 = get_sub_field( 'feature_5' );
				$feature6 = get_sub_field( 'feature_6' );
				?>

			<ul class='consultation__feature-list' role='list'>
				<?php if ( ! empty( $feature1 ) ) : ?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature1; ?></li>
					<?php
					endif;
				?>
					<?php
					if ( ! empty( $feature2 ) ) :
						?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature2; ?></li>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $feature3 ) ) :
						?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature3; ?></li>
						<?php
					endif;
					?>
			</ul>

			<ul class='consultation__feature-list' role='list'>
					<?php
					if ( ! empty( $feature4 ) ) :
						?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature4; ?></li>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $feature5 ) ) :
						?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature5; ?></li>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $feature6 ) ) :
						?>
					<li class='consultation__feature-item'>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z" fill="#616161" />
					</svg><?php echo $feature6; ?></li>
						<?php
					endif;
					?>

		</ul>
		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>


	<div class='consultation__button-group'>
		<?php if ( ! empty( $consultation_button ) ) : ?>
			<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
			<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
			<a class='consultation__button btn' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/oxhu_runcoach/your-weekly-coaching-call?hide_landing_page_details=1&hide_gdpr_banner=1&text_color=101010&primary_color=e52323'});return false;"><?php echo $consultation_button['title']; ?></a>
		<?php endif; ?>

		<?php if ( ! empty( $consultation_download_app ) ) : ?>
		<a href='<?php echo $consultation_download_app['url']; ?>'
		class='consultation__dl-app'>
			<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10.8333 1.66675C6.24167 1.66675 2.5 5.40841 2.5 10.0001C2.5 14.5917 6.24167 18.3334 10.8333 18.3334C15.425 18.3334 19.1667 14.5917 19.1667 10.0001C19.1667 5.40841 15.425 1.66675 10.8333 1.66675ZM10 8.33341V5.00008H11.6667V8.33341H14.1667L10.8333 11.6667L7.5 8.33341H10ZM15 14.1667H6.66667V12.5001H15V14.1667Z" fill="#393939" />
			</svg> <?php echo $consultation_download_app['title']; ?></a>
		<?php endif; ?>
	</div>



