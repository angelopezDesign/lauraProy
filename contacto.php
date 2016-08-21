<?php include('header.php'); ?>
	<main>
		<div class="wrapper">
			<section id="titleSite">
				<div class="row">
					<h2>CONTACTO</h2>	
				</div>
			</section>
			<section id="bannerWindow">
				<div class="row">
					<article class="titleWindow small-12 medium-8 columns">
						<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
					</article>
				</div>
			</section>
			<section id="bodyContact">
				<div class="row">
					<div class="small-12 medium-12 columns">
						<article class="contCardForm">
							<form action="" id="formContact">
								<div class="contInputContact small-12 medium-6 columns">
									<input type="text" id="name" placeholder="Nombre">
								</div>
								<div class="contInputContact small-12 medium-6 columns">
									<input type="text" id="email" placeholder="Email">
								</div>
								<div class="contInputContact small-12 medium-12">
									<textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
								</div>
								<div class="contInputContact small-12 medium-12">
									<button name="enviarForm" id="enviarForm" type="button">ENVIAR <i class="fa fa-spinner fa-spin"></i></button>
								</div>
							</form>
						</article>
					</div>
				</div>
			</section>
		</div>
	</main>
<?php include('footer.php'); ?>