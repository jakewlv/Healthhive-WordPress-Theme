<?php
/**
 * Template part for displaying FAQ page content in contact.php
 *
 * @package oxhu
 */

if ( have_rows( 'faq' ) ) :
	while ( have_rows( 'faq' ) ) :
		the_row();
		$faq_item = get_sub_field( 'faq_item' );
		?>
		<ul class='faq__list' role='list'>

				<?php
				// Check rows existexists.
				if ( have_rows( 'faq_item' ) ) :
					// Loop through rows.
					while ( have_rows( 'faq_item' ) ) :
						the_row();
						// Load sub field value.
						$faq_question = get_sub_field( 'faq_question' );
						$faq_answer   = get_sub_field( 'faq_answer' );
						?>
				<li class='faq__item'>
					<details open='open'>
						<summary>
						<h4 class='faq__question'>
						<?php echo esc_html( $faq_question ); ?>
					</h4>
						</summary>
						<p class='faq__answer'>
						<?php echo esc_html( $faq_answer ); ?>
					</p>
					</details>
				</li>
				<?php endwhile; else : ?>
					<p>No FAQ items...</p>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</ul>
