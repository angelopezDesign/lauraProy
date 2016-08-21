<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laura Guerra Design</title>
	<link rel="icon" type="image/png" href="http://cooinpaz.com.co/laura/logoFavicon.png2wbmp" /> 
	<link rel="icon" type="image/x-icon" href="http://cooinpaz.com.co/laura/faviconLaura.ico" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/identidadC.css">
	<link rel="stylesheet" type="text/css" href="css/materialP.css">
	<link rel="stylesheet" type="text/css" href="css/fotografiaP.css">
	<link rel="stylesheet" type="text/css" href="css/eventosE.css">
	<link rel="stylesheet" type="text/css" href="css/audioVideo.css">
	<link rel="stylesheet" type="text/css" href="css/about.css" >
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" href="recursos/fontE/fontE.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.btnMovil').click(function(){
				console.log('funca!!');
				if ($('header#headerG #navBar').hasClass('openNav')){
					$('header#headerG #navBar').removeClass('openNav');
				}else{
					$('header#headerG #navBar').addClass('openNav');
				}
			});
		});
	</script>
	<style>
		@font-face {
			font-family: Dragon_is_coming;
			src: url(recursos/fontE/Dragoniscoming.otf);
		}
		body{
			padding:0px;
			margin:0px;
		}
		.swiper-container {
        width: 100%;
        height: 100%;
	    }
	    .swiper-slide {
	        text-align: center;
	        font-size: 18px;
	        background: #fff;
	        
	        /* Center slide text vertically */
	        display: -webkit-box;
	        display: -ms-flexbox;
	        display: -webkit-flex;
	        display: flex;
	        -webkit-box-pack: center;
	        -ms-flex-pack: center;
	        -webkit-justify-content: center;
	        justify-content: center;
	        -webkit-box-align: center;
	        -ms-flex-align: center;
	        -webkit-align-items: center;
	        align-items: center;
	    }
		.newSlide .swiper-slide{
			flex-direction:column;
			background-color:#ffffff;
		}
		@media screen and (min-width:480px){
			.newSlide .swiper-slide{
				flex-direction:row;
			}
		}
	</style>
</head>
<body>
	<header id="headerG">
		<div class="row">
			<div class="small-12">
				<div class="headCont">
					<div class="hide-for-small-only small-6 medium-4 columns">
						<div class="redesHeader">
							<p>
								<a href="https://www.facebook.com/laucastillog" target="_blank" title="" class="small-6 columns"><i class="fa fa-facebook"></i></a> 
								<a href="https://www.instagram.com/laura_guerra22/" target="_blank" title="" class="small-6 columns"><i class="fa fa-instagram"></i></a>
							</p>
						</div>
					</div>
					<div class="small-6 medium-4 columns">
						<div class="brandCont">
							<a href="" alt="logolink">
								<picture>
									<img src="recursos/img/logo001.png" alt="logo" />
								</picture>
							</a>
						</div>
					</div>
					<div class="small-6 medium-4 columns">
						<div class="firstLick">
							<a href="aboutMe.php" title="" class="small-12 medium-6 columns">ABUT ME</a>
							<a href="contacto.php" title="" class="small-12 medium-6 columns">CONTACT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="navBar">
			<div class="row">
				<div class="small-12 columns">
					<div class="btnToggle">
						<button type="button" class="btnMovil"><i class="fa fa-bars iconNavMovil"></i></button>
					</div>
					<div class="small-12 columns contItemsNav">
						<ul>
							<li><a href="/laura" title="Home">Home</a></li>
							<li><a href="corporativa.php" title="Identidad Corporativa">Identidad Corporativa</a></li>
							<li><a href="materialP.php" title="Material Publicitario">Material Publicitario</a></li>
							<li><a href="fotografiaP.php" title="Fotografia Publicitaria">Fotografia Publicitaria</a></li>
							<li><a href="eventosE.php" title="BTL Eventos y espectaculos">BTL Eventos y espectaculos</a></li>
							<li><a href="audioVideo.php" title="Audio y video">Audio y video</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</header><!-- /header -->