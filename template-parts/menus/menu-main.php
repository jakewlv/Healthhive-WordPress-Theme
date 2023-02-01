<?php

$locationDetails = get_nav_menu_locations();
$menuID          = $locationDetails['main-menu'];
$menuItems       = wp_get_nav_menu_items( $menuID );
?>

<nav class='main-menu'>
  <ul class='main-menu__list' role='list'>
	  <?php
	  // Loop over menu items
	  foreach ( $menuItems as $menuItem ) {
		  // Compare menu item url with server request uri path
		  $current  = ( $_SERVER['REQUEST_URI'] == parse_url( $menuItem->url,
				  PHP_URL_PATH ) ) ? 'current-menu-item' : '';
		  ?>
        <li class="<?php
		echo $current ?> main-menu__list-item">
			<?php
			echo '<a class="main-menu__link" href="' . $menuItem->url . '">';
			echo $menuItem->title;
			echo '</a>';
			?>
        </li>
		  <?php
	  }
	  ?>
  </ul>
</nav>

<nav class='mobile-menu' style='<?php echo is_admin_bar_showing() ? 'top: 32px' : ''; ?>'>
  <ul class='mobile-menu__list' role='list'>
	  <?php
	  // Loop over menu items
	  foreach ( $menuItems as $menuItem ) {
		  // Compare menu item url with server request uri path
		  $current  = ( $_SERVER['REQUEST_URI'] == parse_url( $menuItem->url,
				  PHP_URL_PATH ) ) ? 'current-menu-item' : '';
		  ?>
        <li class="<?php
	    echo $current ?> mobile-menu__list-item">
		    <?php
		    echo '<a class="mobile-menu__link" href="' . $menuItem->url . '">';
		    echo $menuItem->title;
		    echo '</a>';
		    ?>
        </li>
		  <?php
	  }
	  ?>
  </ul>

</nav>


