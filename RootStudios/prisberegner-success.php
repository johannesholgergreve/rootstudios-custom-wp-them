<?php
/*
Template Name: Prisberegner Blanket
*/
?>

<?php

	session_start();
	
	$sGetItemsReal = $_SESSION["theString"];
	$sTotalPrice = $_SESSION["totalPrice"];
	$sTotalDiscountPrice = $_SESSION["totalDiscountPrice"];
	$sClientName = $_GET["clientName"];
	$sClientEmail = $_GET["clientEmail"];
	$sClientPhone = $_GET["clientPhone"];


	$oGlobalProducts = json_decode('{"results" : {"chosenItems":'.stripslashes($sGetItemsReal).'}}');

?>

<?php include("header.php") ?>

<div class="container">
	<div class="calculatorOverviewTopSection">
		<img src="<?php include bloginfo('template_url'); ?>/resources/images/check-Icon-Green.png" alt="">
		<h3>Indsendt</h3>
	</div>
</div>

<div class="ticket">
	<h3>Kvittering for indsendelse af resultat</h3>
	<h5>Tillykke <?php echo $sClientName; ?></h5><br>

	<p>Vi vil gerne give dig 30 % rabat på design og udvikling af din ny hjemmeside. Husk at dette tilbud er fuldstændig uforpligtende. Vi vender tilbage til dig snarest for at høre om vi skal gå igang med udviklingen af dit website. Denne kvittering er også sendt til din email.</p>

	<div class="borderDivider"></div>

	<h3>Detaljeret overblik over vores tilbud</h3>
	<table style="width:100%">
	  	<tr>
	   		<td style="text-align:left;"><strong>Produkt</strong></td>
	   		<td><strong>Værdi</strong></td>
	   		<td><strong>Rabat</strong></td>
	   		<td style="text-align:right;"><strong>Din pris</strong></td>
	  	</tr>

	  	<?php foreach ($oGlobalProducts->results->chosenItems as $oProduct) { ?>

	  		<?php if ($oProduct->dataValue == "-") { ?>

				<tr>
			   		<td style="text-align:left;"><?php echo $oProduct->dataName; ?></td>
			   		<td> - </td>
			   		<td> - </td>
			   		<td style="text-align:right;"> - </td>
			  	</tr>

			  <?php } else {  ?>

			  	<tr>
			   		<td style="text-align:left;"><?php echo $oProduct->dataName; ?></td>
			   		<td><?php echo $oProduct->dataValue; ?> kr</td>
			   		<td>30 %</td>
			   		<td style="text-align:right;"><?php echo $oProduct->discountValue; ?> kr</td>
			  	</tr>

			  <?php } ?>

		<?php } ?>



	  	<tr style="	border-width:3px; border-style:double; border-left:0; border-right:0; border-color:#DCDCDC;">
	   		<td style="text-align:left;"><strong>Total pris</strong></td>
	   		<td><strong><?php echo $sTotalPrice?> kr</strong></td>
	   		<td><strong>30 %</strong></td>
	   		<td style="text-align:right;"><strong><?php echo $sTotalDiscountPrice?> kr</strong></td>
	  	</tr>
	</table>
	
	<br>

	<p class="smallText">Alle priser er ekskl. moms</p>

	<br><br><br><br>

	<a href="<?php echo get_option('home'); ?>" id="toFrontpageBtn" class="productHeroBtn">Til forside</a>
</div>































<?php 


$detailItems; 

foreach ($oGlobalProducts->results->chosenItems as $oProduct) {

	if ($oProduct->dataValue == "-") {

		$detailItems .= 

		'<tr>
	   		<td style="text-align:left;">'.$oProduct->dataName.'</td>
	   		<td> - </td>
	   		<td> - </td>
	   		<td style="text-align:right;"> - </td>
	  	</tr>';

	} else {

		$detailItems .= 

		'<tr>
	   		<td style="text-align:left;">'.$oProduct->dataName.'</td>
	   		<td>'.$oProduct->dataValue.' kr</td>
	   		<td>30 %</td>
	   		<td style="text-align:right;">'.$oProduct->discountValue.' kr</td>
	  	</tr>';

	}

}



	$subject = "Root Studios - Kvittering for indsendelse af prisberegner";

	$message = '
	<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

		<title>Kvittering for hjemmeside beregning</title>
		
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/reset.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style-johannes.css">
	</head>

		<body>
			<div class="container">
				<div class="calculatorOverviewTopSection">
					<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/check-Icon-Green.png" alt="">
				</div>
			</div>

			<div class="ticket">
				<h3>Kvittering for indsendelse af resultat</h3>
				<h5>Tillykke '.$sClientName.'</h5><br>

				<p>
					Vi vil gerne give dig 30 % rabat på design og udvikling af din ny hjemmeside. Husk at dette tilbud er fuldstændig uforpligtende. Vi vender tilbage til dig snarest for at høre om vi skal gå igang med udviklingen af dit website.
				</p>

				<div class="borderDivider"></div>

				<h3>Detaljeret overblik over vores tilbud</h3>
				<table style="width:100%">
				  	<tr>
				   		<td style="text-align:left;"><strong>Produkt</strong></td>
				   		<td><strong>Værdi</strong></td>
				   		<td><strong>Rabat</strong></td>
				   		<td style="text-align:right;"><strong>Din pris</strong></td>
				  	</tr>
				  	

				  	'. $detailItems .'


				  	<tr style="	border-width:3px; border-style:double; border-left:0; border-right:0; border-color:#DCDCDC;">
				   		<td style="text-align:left;"><strong>Total pris</strong></td>
				   		<td><strong>'.$sTotalPrice.' kr</strong></td>
				   		<td><strong>30 %</strong></td>
				   		<td style="text-align:right;"><strong>'.$sTotalDiscountPrice.' kr</strong></td>
				  	</tr>
				</table>
				
				<br>

				<p class="smallText">Alle priser er ekskl. moms</p>

				<br><br><br><br>

				<a href="https://rootstudios.dk/kontakt" id="toFrontpageBtn" class="productHeroBtn">Kontakt os</a>
			</div>
		</body>

	<style>

		.ticket {
			margin-top: -50px;
			width: 90%
		}
		.calculatorOverviewTopSection {
			padding: 20px;
			margin-top: 0px;
			border: none;
		}

		h5 {
			font-size: 15px;
		}

		@media only screen and (min-width: 992px) {

			.ticket {
				margin-top: -70px;
			}
		}


	</style>

	</html>
	';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$sFromMail = "hello@rootstudios.dk";
	$headers .= 'From: <'.$sFromMail.'>' . "\r\n";

	mail($sClientEmail,$subject,$message,$headers);









































	$subjectToRoot = "Ny kunde fra beregner";

	$messageToRoot = '
	<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

		<title>Kvittering for hjemmeside beregning</title>
		
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/reset.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style.css">
		<link rel="stylesheet" href="https://rootstudios.dk/wp-content/themes/rootstudios/resources/css/style-johannes.css">
	</head>

		<body>
			<div class="container">
				<div class="calculatorOverviewTopSection">
					<img src="https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/check-Icon-Green.png" alt="">
				</div>
			</div>

			<div class="ticket">
				<h3>Ny lead fra beregner</h3>
				<h5>Navn / Firma: '.$sClientName.'</h5><br>
				<h5>Email:  '.$sClientEmail.'</h5><br>
				<h5>Telefon: '.$sClientPhone.'</h5><br>

				<div class="borderDivider"></div>

				<h3>Detaljeret overblik over vores tilbud</h3>
				<table style="width:100%">
				  	<tr>
				   		<td style="text-align:left;"><strong>Produkt</strong></td>
				   		<td><strong>Værdi</strong></td>
				   		<td><strong>Rabat</strong></td>
				   		<td style="text-align:right;"><strong>Din pris</strong></td>
				  	</tr>
				  	

				  	'. $detailItems .'


				  	<tr style="	border-width:3px; border-style:double; border-left:0; border-right:0; border-color:#DCDCDC;">
				   		<td style="text-align:left;"><strong>Total pris</strong></td>
				   		<td><strong>'.$sTotalPrice.' kr</strong></td>
				   		<td><strong>30 %</strong></td>
				   		<td style="text-align:right;"><strong>'.$sTotalDiscountPrice.' kr</strong></td>
				  	</tr>
				</table>
				
				<br>

				<p class="smallText">Alle priser er ekskl. moms</p>

				<br><br><br><br>

				<a href="https://rootstudios.dk/kontakt" id="toFrontpageBtn" class="productHeroBtn">Kontakt os</a>
			</div>
		</body>

	<style>

		.ticket {
			margin-top: -50px;
			width: 90%
		}
		.calculatorOverviewTopSection {
			padding: 20px;
			margin-top: 0px;
			border: none;
		}

		h5 {
			font-size: 15px;
		}

		@media only screen and (min-width: 992px) {

			.ticket {
				margin-top: -70px;
			}
		}


	</style>

	</html>
	';

	// Always set content-type when sending HTML email
	$headersToRoot = "MIME-Version: 1.0" . "\r\n";
	$headersToRoot .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	$headersToRoot .= 'From: <'.$sClientEmail.'>' . "\r\n";

	mail("hello@rootstudios.dk",$subjectToRoot,$messageToRoot,$headersToRoot);


?>

























<?php include("footer.php") ?>
