<?php get_header() ?>
<?php
$root = get_template_directory_uri() . '/assets/';
$section_1_img_src = $root . 'section_1_bg.jpg';
$section_2_img_src = $root . 'section_2_bg.png';
?>

<main>
	<section class='container-fluid overflow-hidden position-relative'>
		<div class='bg-container'>
			<img src=<?php echo $section_1_img_src ?> class='img-cover' alt='' />
		</div>
		<div class='container mx-auto'>
			<div class='row my-5 no-gutters'>
				<div class='col-12 col-lg-7 mb-5 mb-lg-0 position-static d-flex flex-column justify-content-end'>
					<div class='text-lg-left text-center'>
						<div class='fullwidth-bg'></div>
						<h2 class='text-secondary'>Upezpieczenie majątkowe</h2>
						<h4 class='text-white w-75 mx-auto mx-lg-0'>Skontaktuj się z nami i skorzystaj ze specjalnej oferty!</h4>
					</div>
				</div>
				<div class='col-12 col-md-10 col-lg-5 mx-auto'>
					<div class='floating-box'>
						<h5 class='mb-3'>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h5>
						<form action='#' method='post' class='d-flex flex-column'>
							<div class='form-row'>
								<div class="form-group col-12">
									<input id="name" type='text' class='form-control' placeholder='Imię i nazwisko' />
								</div>
								<div class="form-group col-12">
									<input id="email" type='email' class='form-control' placeholder='Adres e-mail' />
								</div>
								<div class="form-group col-12">
									<input id="phone" type='number' class='form-control' placeholder='Nr telefonu' />
								</div>
								<div class="form-group col-12 col-md-7">
									<input id="city" type='text' class='form-control' placeholder='Miejscowość' />
								</div>
								<div class="form-group col-12 col-md-5">
									<input id="post_code" type='text' class='form-control' placeholder='Kod pocztowy' />
								</div>
								<div class='col-12 mb-3'>
									<div class="custom-control custom-checkbox">
										<input id="rodo" type='checkbox' class='custom-control-input' />
										<label for='rodo' class='custom-control-label'>
											<small class='text-muted'>
												Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
											</small>
										</label>
									</div>
								</div>
							</div>
							<button type='submit' class='btn btn-secondary text-white px-5 mx-auto'>
								Wyślij
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='container-fluid overflow-hidden position-relative'>
		<div class='bg-container d-flex align-items-end justify-content-end'>
			<img class='img-fluid d-block w-50' src=<?php echo $section_2_img_src ?> alt='' />
		</div>
		<div class='container mx-auto'>
			<div class='d-flex flex-column my-5 col-md-12 col-lg-11 col-xl-9'>
				<h1 class='mb-3'>Ubezpieczenia majątkowe</h1>
				<h3 class='mb-3'>Co obejmują?</h3>
				<strong class='mb-3'>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
					diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo dolores et ea rebum.
				</strong>
				<p class='mb-5'>
					Stet clita kasd gubergren, no
					sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
					ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
					nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam
					et justo duo dolores et ea rebum. Stet clita kasd gubergren,
					no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem
					ipsum dolor sit amet, consetetur sadipscing elitr.
				</p>
				<button class='btn btn-secondary text-white px-4 mr-auto'>
					Zamów ubezpieczenie
				</button>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>