
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Endall - Inspeções & Serviços</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide|Electrolize" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	<!-- Modal -->
	<?php include 'modal-services.php' ?>

	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">
    <defs>
        <filter id="blur-filter">
            <feGaussianBlur stdDeviation="3"></feGaussianBlur>
        </filter>
    </defs>
	</svg>

	<div id="fh5co-page">
	<?php include 'header.php' ?>

	<div class="container">

	</div>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Endoscopia industrial.</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">Saiba mais</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Soldagem.</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">Saiba mais</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Fiscalização de obras.</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">Saiba mais</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
	  	</ul>
  	</div>
	</aside>

	<div id="servicos" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Serviços</h2>
					<p>Conheça nossos principais serviços.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center" data-toggle="modal" data-target="#modal-services" onclick="BlurOn()">
						<div class="image" style="background-image: url(images/image_1.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Endoscopia Industrial</h3>
								<h5 class="category">Endoscopia Industrial</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_2.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Soldagem</h3>
								<h5 class="category">Soldagem</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_3.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Fiscalização de Obras</h3>
								<h5 class="category">Fiscalização de Obras</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_4.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Serviço</h3>
								<h5 class="category">Serviço</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_5.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Serviço</h3>
								<h5 class="category">Serviço</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_6.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Serviço</h3>
								<h5 class="category">Serviço</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">Mais serviços <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="sobre" class="fh5co-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Sobre nós</h2>
					<p>Conheça a Endall.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-offset-3 text-center animate-box">
					<div class="about-text">
						<article>
							A ENDALL INSPEÇÕES E SERVIÇOS situada na cidade de ARARAS - SP
							é uma jovem empresa que tem como proposta de trabalho de
							maneira confiável e independente, consultoria, treinamento e
							inspeções técnicas, nos mais diversos ramo da indústria.
							<br>
							Contamos com inspetores e engenheiro qualificados e certificados
							pelos SNQC, ASNT e CREA.
							<br>
							<h4>MISSÃO</h4>
							A principal missão da ENDALL é manter a excelência nas soluções
							oferecidas e tornarmos uma empresa referente no mercado de
							engenharia de inspeção e serviços industriais.
							<br>
							<h4>VALORES</h4>
							O Principal Valor da empresa é honrar com nossos compromissos,
							assegurar a qualidade dos serviços prestados, priorizar a busca de
							conhecimento continuo e sempre buscar a satisfação de nossos
							clientes.
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="clientes" class="fh5co-light-grey-section">
		<div class="container" id="clientes">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Clientes</h2>
					<p>Nossos clientes e parceiros</p>
				</div>
			</div>
			<div class="row">
	  		<section class="customer-logos slider animate-box">
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
			    <div class="slide"><img src="http://clashroyale.news/img/cards/g/20.png"></div>
	  		</section>
			</div>
		</div>
	</div>

	<div id="fh5co-testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>O que os clientes dizem?</h2>
					<p>Feedback de clientes que já utilizaram nossos serviços.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-offset-0 to-animate">
					<div class="wrap-testimony animate-box">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"O trabalho do Allan é sensacional, tudo ocorreu bem, recomendo a todos!"</p>
									</blockquote>
									<span>Túlio, <a href="#" class="twitter">CTO da Nestlé</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"O trabalho do Allan é sensacional, tudo ocorreu bem, recomendo a todos!"</p>
									</blockquote>
									<span>Túlio, <a href="#" class="twitter">CTO da DPA</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"O trabalho do Allan é sensacional, tudo ocorreu bem, recomendo a todos!"</p>
									</blockquote>
									<span>Túlio, <a href="#" class="twitter">CTO da Garoto</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>Entre em contato e faça um orçamento</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Pedir orçamento! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

	<?php include 'footer.php' ?>

	</div>

	<script>
	/*Blur background when modal active*/
	function BlurOn() {
		$("#fh5co-page").addClass("blur");
	}
	function BlurOff() {
		$("#fh5co-page").removeClass("blur")
	}
	</script>

	<script>
	/*Scroll transition to anchor*/
	$(document).on('click', '.scroll-link', function(event){
         event.preventDefault();
         $('html, body').animate({
             scrollTop: $( $.attr(this, 'href') ).offset().top
         }, 500);
     });
	</script>

	<script>
		/*Back to top button*/
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Slick slider -->
	<script src="js/slick.js"></script>
	<!-- Logo slider -->
	<script src="js/logo-carousel.js"></script>
	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/0fa380ff2a.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
