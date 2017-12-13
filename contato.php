<?php $root = '../endall/'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Endall - Contato</title>
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


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
		  <div class="container">
		    <div class="header-inner">
		      <h1><a href="index.html" id="logo">Endall</a></h1>
		      <nav role="navigation">
		        <ul>
		          <li><a href="<?php echo $root;?>#servicos" class="scroll-link">Serviços</a></li>
		          <li><a href="<?php echo $root;?>#sobre" class="scroll-link">Sobre nós</a></li>
		          <li><a href="<?php echo $root;?>#clientes" class="scroll-link">Clientes</a></li>
		          <li class="cta"><a href="contato.php">Contato</a></li>
		        </ul>
		      </nav>
		    </div>
		  </div>
		</header>


	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Contato.</h2>
		   					<p class="fh5co-lead">Visite-nos ou entre com contato conosco.</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
					<h2>Entre em contato.</h2>
					<p>Preencha o formulário ou faça-nos uma visita, temos a melhor solução para você!</p><br><br>

				</div>
				<div class="col-md-3">
					<h3>Onde nos encontrar?</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>R. Pedro Buzo, 153 - Jardim Bela Vista, Araras - SP<br>CEP 13.609-540</li>
						<li><i class="icon-phone"></i>(19)99908-8253</li>
						<li><i class="icon-envelope"></i><a href="#">contato@endall.com.br</a></li>
						<li><i class="icon-globe"></i><a href="#">www.endall.com.br</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Nome" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Enviar" class="btn btn-primary" type="submit">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7378.311315783608!2d-47.38009889335488!3d-22.385488652939546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c879f957ae3cdf%3A0x47cb0283ebd680e!2sR.+Pedro+Buzo%2C+153+-+Jardim+Bela+Vista%2C+Araras+-+SP!5e0!3m2!1spt-BR!2sbr!4v1513080535023" frameborder="0" allowfullscreen id="map" class="animate-box" data-animate-effect="fadeIn"></iframe>

	<?php include 'footer.php'; ?>
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
