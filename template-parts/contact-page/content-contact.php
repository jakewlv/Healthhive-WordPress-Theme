<?php

/**
 * Template part for displaying contact page content in contact.php
 *
 * @package oxhu
 */

$contact_page_description = get_field( 'contact_page_description' )
?>


<?php
if ( ! empty( $contact_page_description ) ) :
	?>
	<p class='contact__description'>
		<?php echo $contact_page_description; ?>
	</p>
<?php endif; ?>


<div class='contact__details-lists'>
	<ul class='contact__details-list' role='list'>
		<li class='contact__details-item'>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
					xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
							d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
							fill="#141414" />
			</svg>


		<?php
		if ( have_rows( 'contact_address' ) ) :
			?>
			<?php
			while ( have_rows( 'contact_address' ) ) :
				the_row();

				// Get sub field values.
				$address_title = get_sub_field( 'address_title' );
				$address_text  = get_sub_field( 'address_text' );
				?>

				<?php
				if ( ! empty( $address_title ) ) :
					?>
									<p>
										<span class='uppercase bold'><?php echo $address_title; ?></span>
						<?php

						if ( ! empty( $address_text ) ) :
							?>
							<?php echo $address_text; ?>
							<?php
						endif;
						?>

									</p>
					<?php
				endif;
				?>

				<?php
			endwhile;
			?>

			<?php
		endif;
		?>

		</li>
		<li class='contact__details-item'>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
				d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"
				fill="#141414" />
			</svg>

		<?php
		if ( have_rows( 'contact_email' ) ) :
			?>
			<?php
			while ( have_rows( 'contact_email' ) ) :
				the_row();

				// Get sub field values.
				$email_title = get_sub_field( 'email_title' );
				$email_text  = get_sub_field( 'email_text' );
				?>

				<?php
				if ( ! empty( $email_title ) ) :
					?>
									<p>
										<span class='uppercase bold'><?php echo $email_title; ?></span>
						<?php

						if ( ! empty( $email_text ) ) :
							?>
												<a
													href='<?php echo $email_text['url']; ?>'
													class='contact__email-link'><?php echo $email_text['title']; ?></a>
							<?php
						endif;
						?>

									</p>
					<?php
				endif;
				?>


				<?php
			endwhile;
			?>

			<?php
		endif;
		?>

		</li>
		<li class='contact__details-item'>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
					xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
							d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
							fill="#141414" />
			</svg>

		<?php
		if ( have_rows( 'contact_phone' ) ) :
			?>
			<?php
			while ( have_rows( 'contact_phone' ) ) :
				the_row();

				// Get sub field values.
				$phone_title  = get_sub_field( 'phone_title' );
				$phone_number = get_sub_field( 'phone_number' );
				?>

				<?php
				if ( ! empty( $phone_title ) ) :
					?>
									<p>
										<span class='uppercase bold'><?php echo $phone_title; ?></span>
						<?php

						if ( ! empty( $phone_number ) ) :
							?>
							<?php echo $phone_number; ?>
							<?php
						endif;
						?>

									</p>
					<?php
				endif;
				?>


				<?php
			endwhile;
			?>

			<?php
		endif;
		?>

		</li>
	</ul>
	<div class='contact__social'>

		<?php
		if ( have_rows( 'contact_socials' ) ) :
			?>
			<?php
			while ( have_rows( 'contact_socials' ) ) :
				the_row();

				// Get sub field values.
				$socials_title = get_sub_field( 'socials_title' );
				?>
					<span class='uppercase bold'>
						<?php echo $socials_title; ?>
					</span>

			<?php endwhile; ?>

		<?php endif; ?>

		<!--    <span class='uppercase bold'>Socials</span>-->
		<ul class='contact__details-list contact__details-list--social' role='list'>
			<li class='contact__details-item'>
					<a href='https://www.instagram.com/oxhu.runcoach/' class='contact__details-social-link' target="_blank">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 11C14.25 11.6428 14.0594 12.2711 13.7023 12.8056C13.3452 13.3401 12.8376 13.7566 12.2437 14.0026C11.6499 14.2486 10.9964 14.313 10.366 14.1876C9.73552 14.0622 9.15642 13.7526 8.7019 13.2981C8.24738 12.8436 7.93785 12.2645 7.81245 11.634C7.68705 11.0036 7.75141 10.3501 7.99739 9.75628C8.24338 9.16242 8.65994 8.65484 9.1944 8.29772C9.72886 7.94061 10.3572 7.75 11 7.75C11.8611 7.75268 12.6862 8.09595 13.2951 8.70486C13.9041 9.31378 14.2473 10.1389 14.25 11V11ZM21.1562 6.53125V15.4688C21.1562 16.9772 20.557 18.4238 19.4904 19.4904C18.4238 20.557 16.9772 21.1562 15.4688 21.1562H6.53125C5.02283 21.1562 3.57619 20.557 2.50958 19.4904C1.44297 18.4238 0.84375 16.9772 0.84375 15.4688V6.53125C0.84375 5.02283 1.44297 3.57619 2.50958 2.50958C3.57619 1.44297 5.02283 0.84375 6.53125 0.84375H15.4688C16.9772 0.84375 18.4238 1.44297 19.4904 2.50958C20.557 3.57619 21.1562 5.02283 21.1562 6.53125V6.53125ZM15.875 11C15.875 10.0358 15.5891 9.09328 15.0534 8.29159C14.5177 7.48991 13.7564 6.86506 12.8656 6.49609C11.9748 6.12711 10.9946 6.03057 10.0489 6.21867C9.10328 6.40678 8.23464 6.87107 7.55285 7.55285C6.87107 8.23464 6.40678 9.10328 6.21867 10.0489C6.03057 10.9946 6.12711 11.9748 6.49609 12.8656C6.86506 13.7564 7.48991 14.5177 8.29159 15.0534C9.09328 15.5891 10.0358 15.875 11 15.875C12.2929 15.875 13.5329 15.3614 14.4471 14.4471C15.3614 13.5329 15.875 12.2929 15.875 11ZM17.5 5.71875C17.5 5.4777 17.4285 5.24207 17.2946 5.04165C17.1607 4.84123 16.9703 4.68502 16.7476 4.59277C16.5249 4.50053 16.2799 4.47639 16.0435 4.52342C15.8071 4.57044 15.5899 4.68652 15.4195 4.85696C15.249 5.02741 15.1329 5.24457 15.0859 5.48098C15.0389 5.7174 15.063 5.96245 15.1553 6.18515C15.2475 6.40784 15.4037 6.59819 15.6041 6.7321C15.8046 6.86602 16.0402 6.9375 16.2812 6.9375C16.6045 6.9375 16.9145 6.8091 17.143 6.58054C17.3716 6.35198 17.5 6.04198 17.5 5.71875Z" fill="#000000"/>
						</svg>
					</a>
			</li>
			<li class='contact__details-item'>
				<a href='https://www.linkedin.com/company/oxhu/' class='contact__details-social-link' target="_blank">
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M23.5078 23.0136V23.0127H23.5136V14.5864C23.5136 10.4642 22.626 7.28882 17.8061 7.28882C15.4891 7.28882 13.9341 8.56013 13.2993 9.76538H13.2323V7.67366H8.66235V23.0127H13.4209V15.4174C13.4209 13.4175 13.8001 11.4838 16.2771 11.4838C18.7176 11.4838 18.754 13.766 18.754 15.5456V23.0136H23.5078Z" fill="#000000"/>
					<path d="M1.67358 8.16248H6.04158V23.0137H1.67358V8.16248Z" fill="#000000"/>
					<path d="M3.42085 0.300049C1.97404 0.300049 0.800049 1.46857 0.800049 2.90863C0.800049 4.34869 1.97404 5.54165 3.42085 5.54165C4.86765 5.54165 6.04165 4.34869 6.04165 2.90863C6.04074 1.46857 4.86674 0.300049 3.42085 0.300049Z" fill="#000000"/>
					</svg>
				</a>
		</li>
		</ul>
	</div>

</div>

