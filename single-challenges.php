<?php
/**
 * The template for displaying single service page
 *
 * @package oxhu
 */

get_header();
?>

<main id="primary" class="site-main content-grid section section--pad-last">
	<div class='site-main__inner grid-centered'>
		<?php
			get_template_part( 'template-parts/members-page/content', 'challenge' );
		?>
	</div>
</main>

<?php
get_footer();
