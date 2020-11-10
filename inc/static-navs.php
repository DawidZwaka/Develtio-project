<?php
$staticNavs = [
	"footer_about" => [
		"Strona główna",
		"O nas",
		"Dołącz do nas",
		"Zostań Agentem",
		"Kariera"
	],
	"footer_insurance" => [
		"Ubezpieczenia mienia, nieruchomości",
		"Ubezpieczenia osobowe",
		"Ubezpieczenia rolne",
		"Ubezpieczenie OC",
		"Zobacz pełną ofertę"
	],
	"footer_help" => [
		"Oddziały/Kontakt",
		"Towarzystwa ubezpieczeniowe",
		"Przydatne materiały",
		"Informacje Administracyjne",
		"Polityka cookies"
	],
	"main_menu" => [
		"o nas",
		"oferta",
		"towarzystwa ubezpieczeń",
		"dołącz do nas",
		"przydatne materiały",
		"oddziały"
	]
];

function print_static_nav($nav_name, $type = 'footer-nav')
{
	global $staticNavs;
	$container_classes = "";
	$container_id = "";

	switch($type){
		case 'topbar-nav': {
			$menu_classes = "navbar-nav";
			$container_classes = "navbar-collapse collapse flex-xl-grow-0";
			$container_id = "mainNav";
			break;
		}
		case 'footer-nav':
		default: {
			$menu_classes = "nav flex-column nav-light nav-sm";
			break;
		}
	}


	echo "<nav id='$container_id' class='$container_classes'>
			<ul class='$menu_classes'>";

	foreach ($staticNavs[$nav_name] as $value)
		echo "<li class='nav-item'>
				<a href='#' class='nav-link'>$value</a>
			</li>";

	echo	"</ul>
		</nav>";
}
