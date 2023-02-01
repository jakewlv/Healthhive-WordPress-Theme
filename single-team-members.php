<?php
/**
 * The template for displaying single service page
 *
 * @package oxhu
 */

get_header();
?>

<main id="primary" class="site-main content-grid section section--pad-last team-member-page">
	<div class='site-main__inner grid-centered team-member-page__inner'>
		<?php
			get_template_part( 'template-parts/team-member-page/content', 'team-member' );
		?>
	</div>
</main>

<?php
get_footer();
