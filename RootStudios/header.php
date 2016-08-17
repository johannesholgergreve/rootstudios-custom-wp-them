<!DOCTYPE html>
<html lang="da">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

		<title><?php wp_title(); ?></title>
		
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/reset.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style-johannes.css">
		<link rel="icon" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/root-studios-favicon.png" type="image/png" sizes="16x16">

	</head>

	<body>
		<?php include_once("analyticstracking.php"); ?>
		<?php include_once("analytics-heap.php"); ?>
		<?php include_once("analytics-hotjar.php"); ?>
		<?php // include_once("analytics-hubspot.php"); ?>

		<div id="topBorder"></div>
		<div id="leftBorder"></div>
		<div id="rightBorder"></div>
		<div id="bottomBorder"></div>
		
		<div id="toolTip">
			<div id="toolTipArrowUp"></div>
			<p>Prisberegner</p>
		</div>

		<header>
			<div id="menuIcon">
				<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png" alt="">
			</div>

			<a href="https://rootstudios.dk/hjemmeside-prisberegner/" id="calcHeaderButton">
				<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon-dark.png" alt="">
			</a>

			<div id="backHeaderButton">
				<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/arrowLeft-dark.png" alt="Tilbage ikon">
			</div>
			
			<div id="logoBox">
				<a href="<?php echo get_option('home'); ?>">
					<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/root-logo.png" alt="Root Studios Logo">
				</a>
			</div>

			<div id="mainNavigation" class="mainNavMobile mainNavDesktop">
				<ul>
					<li id="productsTab">
						<p>Produkter 
							<img class="menuArrow" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/arrowRight-dark.png" alt="">
						</p>
					</li>
					<li><a href="https://rootstudios.dk/kompetencer">Kompetencer </a></li>
					<!-- <li><a href="https://rootstudios.dk/priser">Priser</a></li> -->
					<li><a href="https://rootstudios.dk/cases">Cases</a></li>
					<li><a href="https://rootstudios.dk/om-os">Om os</a></li>
					<!-- <li><a href="https://rootstudios.dk/blog">Blog</a></li> -->
					<li><a href="https://rootstudios.dk/faq">FAQ</a></li>
					<li><a href="https://rootstudios.dk/kontakt">Kontakt</a></li>
				</ul>
			</div>

			
			
			<div id="subNavigation" class="subNavMobile subNavDesktop">
				<ul>
					<li>
						<a href="https://rootstudios.dk/hjemmeside-produkter">
							<img class="headerProductIcon" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/responsive-hjemmeside-ikon.png" alt="">Hjemmesider
						</a>
					</li>
					<li id="webshopHeaderLi">
						<a href="https://rootstudios.dk/produkter/hjemmeside-webshop-loesning/">
							<img class="headerProductIcon" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/webshop-ikon.png" alt="">
							Webshop
						</a>
					</li>
					<li>
						<a href="https://rootstudios.dk/seo-produkter">
							<img class="headerProductIcon" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/SEO-Optimering-ikon.png" alt="" style="height:30px;">
							SEO Optimering
						</a>
					</li>
					<li>
						<a href="https://rootstudios.dk/hosting-produkter">
							<img class="headerProductIcon" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/hosting-ikon.png" alt="" style="height:30px;">
							Hosting
						</a>
					</li>
					<li>
						<a href="https://rootstudios.dk/support-produkter">
							<img class="headerProductIcon" src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/support-ikon.png" alt="" style="height:33px;">
							Support
						</a>
					</li>
				</ul>
			</div>
				


			<div id="goToCalculatorWrap">
				<div class="container">
					<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon-stor-dark.png" alt="">
					<p>Prøv vores prisberegner og få et prisestimat på udviklingen af din nye hjemmeside.</p>
					<a href="https://rootstudios.dk/hjemmeside-prisberegner/" class="toCalculatorBtn" style="background-color:#4B4B4B;">Beregn din pris</a>
				</div>
			</div>

			
		</header>

		<div id="lightBox">
			<div id="lightBoxWrap">
				<div id="lightBoxContainer">
					<div id="exitBtn"></div>
					<div class="clearfix"></div><br>
					<div id="lightBoxContent">
						<h3></h3>
						<p></p>
						<a href="" class="productHeroBtn">Læs mere</a>
					</div>
				</div>
			</div>
		</div>

		<div id="lightBoxSmallWrap">
			<div id="lightBoxSmallContent">
				<p>Vælg antal sider</p>
			</div>
		</div>

		<div id="mainWrapper">
			

<!-- <?php include_once("analyticstracking.php") ?> -->
