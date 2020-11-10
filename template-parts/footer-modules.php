<?php
$footer_modules = [
	"footer_about" => "O nas",
	"footer_insurance" => "Ubezpieczenia",
	"footer_help" => "Pomoc"
];
?>

<footer class='container-fluid bg-primary text-white'>
	<section class='container'>
		<div class='row py-5'>
			<?php foreach($footer_modules as $nav_name => $title):?>
				<div class='col-12 col-md-6 col-lg-3 mb-3'>
					<?php footer_module($nav_name, $title) ?>
				</div>
			<?php endforeach?>
			<div class='col-12 col-md-6 col-lg-3 mb-3'>
				<h6 class='text-white'>Infolinia</h6>
				<h5 class='text-secondary'>+48 22 311 1234</h5>
			</div>
		</div>
	</section>
</footer>