<?php
/**
 * Template part for displaying page content in team-members.php
 *
 * @package oxhu
 */

$team_member_image   = get_field( 'team_member_image' );
$team_member_name    = get_the_title();
$team_member_title   = get_field( 'team_member_title' );
$team_member_excerpt = get_field( 'team_member_excerpt' )
?>

<div class='team-members__team-member team-member'>

	<?php
	if ( ! empty( $team_member_image ) ) :
		?>

			<img src='<?php echo esc_url( $team_member_image['sizes']['oxhu_member_image'] ); ?>'
				alt='<?php echo esc_attr( $team_member_image['alt'] ); ?>' class='team-member__image'>
		<?php
	else :
		?>
			<img
				src='https://res.cloudinary.com/cdn-oxhu/images/v1666690037/empty-team-member/empty-team-member.webp?_i=AA'
				alt='empty avatar' class='team-member__image'>
		<?php
	endif;
	?>


	<div class='team-member__text mobile'>

		<?php
		if ( ! empty( $team_member_name ) ) :
			?>
				<h3 class='team-member__name'><?php echo esc_html( $team_member_name ); ?></h3>
			<?php
		endif;
		?>

		<?php
		if ( ! empty( $team_member_title ) ) :
			?>
				<h4 class='team-member__title'><?php echo esc_html( $team_member_title ); ?></h4>
			<?php
		endif;
		?>


		<?php
		if ( ! empty( $team_member_title ) ) :
			?>
				<p class='team-member__excerpt'>
			<?php echo esc_html( $team_member_excerpt ); ?>
				</p>
			<?php
		endif;
		?>


		<a href='<?php echo esc_url( get_permalink() ); ?>'
		class='read-more'>Read More</a>

		<?php
		if ( have_rows( 'team_member_social' ) ) :
			?>
			<?php
			while ( have_rows( 'team_member_social' ) ) :
				the_row();

				// Get sub field values.
				$instagram = get_sub_field( 'instagram' );
				?>

						<ul class='team-member__social' role='list'>
						<?php if ( ! empty( $instagram ) ) : ?>
						<li class='team-member__social-item'><a href='<?php echo esc_url( $instagram['url'] ); ?>' target="_blank"
						class='team-member__social-link'>
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 11C14.25 11.6428 14.0594 12.2711 13.7023 12.8056C13.3452 13.3401 12.8376 13.7566 12.2437 14.0026C11.6499 14.2486 10.9964 14.313 10.366 14.1876C9.73552 14.0622 9.15642 13.7526 8.7019 13.2981C8.24738 12.8436 7.93785 12.2645 7.81245 11.634C7.68705 11.0036 7.75141 10.3501 7.99739 9.75628C8.24338 9.16242 8.65994 8.65484 9.1944 8.29772C9.72886 7.94061 10.3572 7.75 11 7.75C11.8611 7.75268 12.6862 8.09595 13.2951 8.70486C13.9041 9.31378 14.2473 10.1389 14.25 11V11ZM21.1562 6.53125V15.4688C21.1562 16.9772 20.557 18.4238 19.4904 19.4904C18.4238 20.557 16.9772 21.1562 15.4688 21.1562H6.53125C5.02283 21.1562 3.57619 20.557 2.50958 19.4904C1.44297 18.4238 0.84375 16.9772 0.84375 15.4688V6.53125C0.84375 5.02283 1.44297 3.57619 2.50958 2.50958C3.57619 1.44297 5.02283 0.84375 6.53125 0.84375H15.4688C16.9772 0.84375 18.4238 1.44297 19.4904 2.50958C20.557 3.57619 21.1562 5.02283 21.1562 6.53125V6.53125ZM15.875 11C15.875 10.0358 15.5891 9.09328 15.0534 8.29159C14.5177 7.48991 13.7564 6.86506 12.8656 6.49609C11.9748 6.12711 10.9946 6.03057 10.0489 6.21867C9.10328 6.40678 8.23464 6.87107 7.55285 7.55285C6.87107 8.23464 6.40678 9.10328 6.21867 10.0489C6.03057 10.9946 6.12711 11.9748 6.49609 12.8656C6.86506 13.7564 7.48991 14.5177 8.29159 15.0534C9.09328 15.5891 10.0358 15.875 11 15.875C12.2929 15.875 13.5329 15.3614 14.4471 14.4471C15.3614 13.5329 15.875 12.2929 15.875 11ZM17.5 5.71875C17.5 5.4777 17.4285 5.24207 17.2946 5.04165C17.1607 4.84123 16.9703 4.68502 16.7476 4.59277C16.5249 4.50053 16.2799 4.47639 16.0435 4.52342C15.8071 4.57044 15.5899 4.68652 15.4195 4.85696C15.249 5.02741 15.1329 5.24457 15.0859 5.48098C15.0389 5.7174 15.063 5.96245 15.1553 6.18515C15.2475 6.40784 15.4037 6.59819 15.6041 6.7321C15.8046 6.86602 16.0402 6.9375 16.2812 6.9375C16.6045 6.9375 16.9145 6.8091 17.143 6.58054C17.3716 6.35198 17.5 6.04198 17.5 5.71875Z" fill="black"/>
							</svg>
						</a></li>
							<?php endif; ?>
						</ul>
				<?php endwhile; ?>
			<?php endif; ?>
	</div>
</div>

