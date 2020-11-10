<?php
require_once "static-navs.php";

function footer_module($menu_name, $title)
{
	echo "<h6 class='text-white'>$title</h6>";

	if (has_nav_menu($menu_name)) {
		wp_nav_menu([
			'theme_location' => $menu_name,
			'menu_class' => 'nav flex-column nav-light nav-sm',
			'container_id' => 'mainNav',
			'walker' => new BootstrapWalker(),
		]);
	} else {
		print_static_nav($menu_name);
	}
}

?>