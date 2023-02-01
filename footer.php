<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oxhu
 */

?>

<footer class="footer content-grid section section--pad">
	<div class='footer__inner grid-centered content-grid mobile'>

		<!-- Begin Mailchimp Signup Form -->
		<div id="mc_embed_signup" class="subscribe-container">
			<form action="https://oxhu.us21.list-manage.com/subscribe/post?u=37ea64a68a1f480533cfed377&amp;id=76057e7386&amp;f_id=0035c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class=" validate subscribe__form" target="_self">
				<div id="mc_embed_signup_scroll">
				<label for="mce-EMAIL">Subscribe for updates
		</label>
		<div class="mc-field-group subscribe">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder='Email address' required>
			<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
		</div>
			<div id="mce-responses" class="clear foot">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_37ea64a68a1f480533cfed377_76057e7386" tabindex="-1" value=""></div>
			</div>
		</div>
		<!-- End Mailchimp Signup Form -->


		<div class="footer__cols">
		<div class='footer__logo'>
				<?php the_custom_logo(); ?>
			</div>
			<div class='footer__links'>
				<div class='footer__links-category links-category'>
					<h5 class='links-category__title'>Information</h5>
					<a href='<?php echo esc_url( site_url() ); ?>/term-conditions/' class='links-category__link' target="_blank">Terms and Conditions</a>
					<a href='<?php echo esc_url( site_url() ); ?>/contact/' class='links-category__link' target="_blank">Contact us</a>
				</div> <!-- footer__links-category -->
				<div class='footer__links-category  links-category'>
					<h5 class='links-category__title'>Networking</h5>
					<div class='footer__social-links social-links'>
						<a href='https://www.instagram.com/oxhu.runcoach/' class='social-links__link' target="_blank">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 11C14.25 11.6428 14.0594 12.2711 13.7023 12.8056C13.3452 13.3401 12.8376 13.7566 12.2437 14.0026C11.6499 14.2486 10.9964 14.313 10.366 14.1876C9.73552 14.0622 9.15642 13.7526 8.7019 13.2981C8.24738 12.8436 7.93785 12.2645 7.81245 11.634C7.68705 11.0036 7.75141 10.3501 7.99739 9.75628C8.24338 9.16242 8.65994 8.65484 9.1944 8.29772C9.72886 7.94061 10.3572 7.75 11 7.75C11.8611 7.75268 12.6862 8.09595 13.2951 8.70486C13.9041 9.31378 14.2473 10.1389 14.25 11V11ZM21.1562 6.53125V15.4688C21.1562 16.9772 20.557 18.4238 19.4904 19.4904C18.4238 20.557 16.9772 21.1562 15.4688 21.1562H6.53125C5.02283 21.1562 3.57619 20.557 2.50958 19.4904C1.44297 18.4238 0.84375 16.9772 0.84375 15.4688V6.53125C0.84375 5.02283 1.44297 3.57619 2.50958 2.50958C3.57619 1.44297 5.02283 0.84375 6.53125 0.84375H15.4688C16.9772 0.84375 18.4238 1.44297 19.4904 2.50958C20.557 3.57619 21.1562 5.02283 21.1562 6.53125V6.53125ZM15.875 11C15.875 10.0358 15.5891 9.09328 15.0534 8.29159C14.5177 7.48991 13.7564 6.86506 12.8656 6.49609C11.9748 6.12711 10.9946 6.03057 10.0489 6.21867C9.10328 6.40678 8.23464 6.87107 7.55285 7.55285C6.87107 8.23464 6.40678 9.10328 6.21867 10.0489C6.03057 10.9946 6.12711 11.9748 6.49609 12.8656C6.86506 13.7564 7.48991 14.5177 8.29159 15.0534C9.09328 15.5891 10.0358 15.875 11 15.875C12.2929 15.875 13.5329 15.3614 14.4471 14.4471C15.3614 13.5329 15.875 12.2929 15.875 11ZM17.5 5.71875C17.5 5.4777 17.4285 5.24207 17.2946 5.04165C17.1607 4.84123 16.9703 4.68502 16.7476 4.59277C16.5249 4.50053 16.2799 4.47639 16.0435 4.52342C15.8071 4.57044 15.5899 4.68652 15.4195 4.85696C15.249 5.02741 15.1329 5.24457 15.0859 5.48098C15.0389 5.7174 15.063 5.96245 15.1553 6.18515C15.2475 6.40784 15.4037 6.59819 15.6041 6.7321C15.8046 6.86602 16.0402 6.9375 16.2812 6.9375C16.6045 6.9375 16.9145 6.8091 17.143 6.58054C17.3716 6.35198 17.5 6.04198 17.5 5.71875Z" fill="#ffffff"/>
							</svg>
						</a>
						<a href='https://www.linkedin.com/company/oxhu/' class='social-links__link' target="_blank">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M23.5078 23.0136V23.0127H23.5136V14.5864C23.5136 10.4642 22.626 7.28882 17.8061 7.28882C15.4891 7.28882 13.9341 8.56013 13.2993 9.76538H13.2323V7.67366H8.66235V23.0127H13.4209V15.4174C13.4209 13.4175 13.8001 11.4838 16.2771 11.4838C18.7176 11.4838 18.754 13.766 18.754 15.5456V23.0136H23.5078Z" fill="#ffffff"/>
							<path d="M1.67358 8.16248H6.04158V23.0137H1.67358V8.16248Z" fill="#ffffff"/>
							<path d="M3.42085 0.300049C1.97404 0.300049 0.800049 1.46857 0.800049 2.90863C0.800049 4.34869 1.97404 5.54165 3.42085 5.54165C4.86765 5.54165 6.04165 4.34869 6.04165 2.90863C6.04074 1.46857 4.86674 0.300049 3.42085 0.300049Z" fill="#ffffff"/>
							</svg>
						</a>
					</div>
				</div> <!-- footer__links-category -->
			</div> <!-- footer__links -->
		</div>


	</div> <!-- footer__inner -->
</footer>

<div class="site-info">
	<span class='copy'>&copy; Copyright 
		<?php echo esc_html( gmdate( 'Y' ) ); ?>
	</span>
	<span class="sep"> | </span>
	<?php
	/* translators: 1: Theme name, 2: Theme author. */
	printf(
		esc_html( 'Web design by %2$s.' ),
		'oxhu',
		'<a href="https://github.com/jakewlv">Weblavida</a>'
	);
	?>
</div> <!-- site-info -->
<?php wp_footer(); ?>
</body>
</html>
