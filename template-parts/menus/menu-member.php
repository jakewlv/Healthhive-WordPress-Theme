<?php

$locationDetails      = get_nav_menu_locations();
$memberMenuID         = $locationDetails['member-menu'];
$memberMenuLoginID    = $locationDetails['member-menu-login'];
$memberMenuItems      = wp_get_nav_menu_items( $memberMenuID );
$memberMenuLoginItems = wp_get_nav_menu_items( $memberMenuLoginID );
?>

<nav class='member-menu'>
	<ul class='member-menu__list' role='list'>

		<?php

		if ( is_user_logged_in() ) {
			// Loop over menu items
			foreach ( $memberMenuItems as $menuItem ) {
				// Compare menu item url with server request uri path
				$current  = ( $_SERVER['REQUEST_URI'] == parse_url(
					$menuItem->url,
					PHP_URL_PATH
				) ) ? 'current-menu-item' : '';
				$has_icon = ! empty( $menuItem->description )
				?>
			<li class="
				<?php
				echo $current
				?>
				member-menu__list-item">
					<?php
					echo '<a class="' . $menuItem->description . ' member-menu__link" href="' . $menuItem->url . '">';
					if ( $has_icon ) {
						echo '<div class="member-menu__icon"><i icon-name="' . $menuItem->description . '"></i></div>';
					}
					echo '<span>' . $menuItem->title . '</span>';
					echo '</a>';
					?>
			</li>
				<?php
			}
		}


		?>

		<?php
		if ( ! is_user_logged_in() ) {
			// Loop over menu items.
			foreach ( $memberMenuLoginItems as $menuItem ) {
				// Compare menu item url with server request uri path
				$current  = ( $_SERVER['REQUEST_URI'] == parse_url(
					$menuItem->url,
					PHP_URL_PATH
				) ) ? 'current-menu-item' : '';
				$has_icon = ! empty( $menuItem->description )
				?>
			<li class="
				<?php
				echo $current
				?>
		member-menu__list-item">
					<?php
					echo '<a class="' . $menuItem->description . ' member-menu__link" href="' . $menuItem->url . '">';
					if ( $has_icon ) {
						echo '<div class="member-menu__icon"><i icon-name="' . $menuItem->description . '"></i></div>';
					}
					echo '<span>' . $menuItem->title . '</span>';
					echo '</a>';
					?>
			</li>
				<?php
			}
		} else {
		?>
		<li class="member-menu__list-item">
	<a class="member-menu__link" href="<?php echo wp_logout_url( home_url() ); ?>"><div class="member-menu__icon"><i icon-name="log-out"></i></div><span><?php _e( 'Log out', 'rcp' ); ?></span></a>
	</li>
	<?php } ?>






	</ul>

</nav>
