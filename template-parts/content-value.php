<?php
/**
 * Visions and Values content.
 *
 * @package oxhu
 */

$value_icon  = get_field( 'value_icon' );
$value_title = get_the_title();
$value_text  = get_field( 'value_text' );
?>

<div class='values__value value'>
	<?php
	if ( ! empty( $value_icon ) ) :
		?>
			<i icon-name='<?php echo esc_html( $value_icon ); ?>' class='value__icon'></i>
	<?php else : ?>
		<img src='https://res.cloudinary.com/cdn-oxhu/images/v1666691207/empty-icon/empty-icon.webp?_i=AA' alt='empty icon'>
		<?php
	endif;
	?>

	<div class='value__text-container'>
		<?php
		if ( ! empty( $value_title ) ) :
			?>
				<h4 class='value__title'><?php echo esc_html( $value_title ); ?></h4>
			<?php
		endif;
		?>

		<?php
		if ( ! empty( $value_text ) ) :
			?>
				<p class='value__description'><?php echo esc_html( $value_text ); ?></p>
			<?php
		endif;
		?>


	</div>
</div>
