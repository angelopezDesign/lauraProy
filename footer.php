	<footer>
		<div class="row">
		<div class="small-12 columns titleFooter">
					<div class="small-12 medium-10">
						<h3>CONTACTO</h3>
					</div>
				</div>
			<article class="small-12 medium-9 columns">
				
				<div class="small-12 medium-6 columns">
					<div class="contForm">
						<form accept-charset="utf-8" id="formHomeFooter">
							<div class="inputCont">
								<input type="text" name="nombreComp" id="nombreComp" placeholder="Nombre Completo">
							</div>
							<div class="inputCont">
								<input type="text" name="email" id="email" placeholder="Email">
							</div>
							<div class="inputCont">
								<textarea name="mensaje" id="mensaje" placeholder="Solicitud"></textarea>
							</div>
							<div class="inputCont">
								<button type="button" name="enviar" id="enviar"><span>ENVIAR <i class="fa fa-spinner fa-spin"></i></span></button>
							</div>
						</form>
					</div>
				</div>
				<div class="small-12 medium-6 columns">
					<div class="contactFooter">
						<p><span>Mobiel:</span> <a href="tel:" title="">3138010182</a></p>
						<p><span>Email:</span> <a href="tel:" title="">lauraguerradesign@gmail.com</a></p>
					</div>
					<div class="redesFooter">
						<p><a href="" title=""><i class="fa fa-facebook"></i> </a>  <a href="" title=""><i class="fa fa-twitter"></i></a> <a href="" title=""><i class="fa fa-instagram"></i></a></p>
					</div>
				</div>
			</article>
			<article class="hide-for-small-only small-12 medium-3 columns">
				<div class="navFooter">
					<ul>
						<li>-<a href="" title="Home">Home</a></li>
						<li>-<a href="" title="Identidad Corporativa">Identidad Corporativa</a></li>
						<li>-<a href="" title="Material Publicitario">Material Publicitario</a></li>
						<li>-<a href="" title="Fotografia Publicitaria">Fotografia Publicitaria</a></li>
						<li>-<a href="" title="BTL Eventos y espectaculos">BTL Eventos y espectaculos</a></li>
						<li>-<a href="" title="Audio y video">Audio y video</a></li>
						<li>-<a href="" title="aboutme">About me</a></li>
						<li>-<a href="" title="contacto">contacto</a></li>
					</ul>
				</div>
			</article>
		</div>
	</footer>
</body>
	<script src="js/app.js"></script>
	<script src="js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
		$(document).ready(function(){

			// console.log('load');

			$('.imagGalery').click(abrirFull);
			$('#previView').click(cerrarFull);
			// 	console.log($(this).attr('alt'));
			// });


			function abrirFull(){
				// console.log($(this).attr('alt'));
				// (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
				
				var nombre= $(this).attr('alt');
				var nombreArch = $(this).attr('src');
				var extencion = (nombreArch.substring(nombreArch.lastIndexOf("."))).toLowerCase();
				var direccion = "recursos/img/fotografiaP/" + nombre + extencion;
				$('.nameImg').html(nombre);
				$('#fullView').attr('src', direccion);
				$('#previView').fadeIn();
				//console.log(nombreArch);
			}
			function cerrarFull(){
				$('#previView').fadeOut();
			}
		});
	</script>
	   <script>
	   // antiguo slide fotografia publicitaria
    //var swiper = new Swiper('.contSlideFoto .swiper-container', {
      	//pagination: '.swiper-pagination',
        //slidesPerView: 2,
        //paginationClickable: true,
        //spaceBetween: 10
    //});
    </script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.newSlide .swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 15,
        freeMode: true
    });

    var swiper = new Swiper('.slideAbout .swiper-container', {
         pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    });

    </script>
    <script src="js/masonry.pkgd.min.js"></script>
	<script>
		$('.galeryFotoP').masonry({
		itemSelector: '.cardGaleryFp',
		columnWidth: 0
		});

		$('.galeryContainer').masonry({
		itemSelector: '.galleryHome',
		columnWidth: 0
		});
	</script>
</html>