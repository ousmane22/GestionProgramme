



 <!DOCTYPE html>
<html lang="en">
<head>
	<title>DFPT - Direction de la Formation Technique </title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{ asset('template/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">


	<!-- debut import menu deroulant -->

	
<!-- fin import menu deroulant -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">




</head>
<body>
	
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="Accueil.html" class="site-logo"><img src="{{ asset('template/img/ministere.png') }}" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Temps de travail:</span>Lundi - Vendredi: 08h-17h </p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Retrouvez nous:</span>Sphères ministérielles de Diamniadio, DFPT</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!--div class="nav-right"-->
			<div  class="nav-right">
				<!--a class="main-menu" href="connexion.php">Se connecter?</a-->
				<!--a href=""><i class="fa fa-shopping-cart"></i></a-->
     
			</div>
			<ul class="main-menu">
				<li class="active"><a href="/acceuil">Accueil</a></li>
				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 Programmes
					</a>
					<div class="dropdown-menu" style="background-color: #020031;">
						<a class="dropdown-item" href="programmeTechnique.php" style="max-height: 5px" >Techniques</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="Nos Programme.php" style="max-height: 5px" >Professionnels</a>	
						
					</div>
				</li>
				<li><a href="Nos Centres.php">EFPT</a></li>
				<li><a href="Nos Projets.php"> Projets</a></li>
				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Documentations
					</a>
					<div class="dropdown-menu" style="background-color: #020031;">
						<a class="dropdown-item" href="sous-doc1.php" style="max-height: 5px" >Decret</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="sous-doc2.php" style="max-height: 5px" >Lois</a>	
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="sous-doc3.php" style="max-height: 5px" >Guide du formateur</a>
						<hr style="background-color: orange;max-height: 2px">	
						<a class="dropdown-item" href="sous-doc4.php" style="max-height: 5px" >Guide du matériel</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="sous-doc5.php" style="max-height: 5px" >Circulaire</a>	
						
					</div>
				</li>
				<li   class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 Partenaires
					</a>
					<div class="dropdown-menu" style="background-color: #020031;">
					<a class="dropdown-item" href="collectivites.php" style="max-height: 5px" >Collectivités</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="ministere.php" style="max-height: 5px" >Ministéres</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="PTF.php" style="max-height: 5px" >PTF</a>
				</div>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->

     <div class="container">
        @yield('content')
     </div>

	<!-- Footer section -->
	<footer class="footer-section container-fluid">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/ministere.png" alt="">
						<p>Plateforme de la division pédagogique de la Direction de la Formation Professionnelle et Technique</p>
						<div class="social pt-1">
							<a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
							<a href="https://www.faceboook.com"><i class="fa fa-facebook-square"></i></a>
							<a href="http://www.squaregoogle.com/"><i class="fa fa-google-plus-square"></i></a>
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Liens utils</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="Accueil.php">Accueil</a></li>
							<li><a href="Nos Programme.php">Nos Programmes</a></li>
							<li><a href="Nos Centres.php">EFPT</a></li>
							<li><a href="Nos Projets.php">Nos Projets</a></li>
							<li><a href="Documentation.php">Documentationss</a></li>
							<li><a href="Partenaire.php">Partenaires</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Sphères ministérielles de Diamniadio, DFPT</p></li>
						<li><p><i class="fa fa-phone"></i> 338657033</p></li>
						<li><p><i class="fa fa-envelope"></i> dftp@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Lundi - Vendredi, 8H-17H</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('template/js/jquery.countdown.js') }}"></script>
	<script src="{{ asset('template/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('template/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('template/js/main.js') }}"></script>
	
</body>
</html>