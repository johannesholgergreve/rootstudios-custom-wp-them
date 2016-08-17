
<?php
/*
Template Name: Lead Generation Email
*/
?>



<?php
	session_start();
	
	$sGetItemsReal = $_SESSION["theString"];
	$sTotalPrice = $_SESSION["totalPrice"];
	$sTotalDiscountPrice = $_SESSION["totalDiscountPrice"];


	$oGlobalProducts = json_decode('{"results" : {"chosenItems":'.stripslashes($sGetItemsReal).'}}');


	$detailItems; 

	foreach ($oGlobalProducts->results->chosenItems as $oProduct) {

		$detailItems .= 

			'<tr>
		   		<td style="text-align:left;">'.$oProduct->dataName.'</td>
		   		<td>'.$oProduct->dataValue.' kr</td>
		   		<td>30 %</td>
		   		<td style="text-align:right;">'.$oProduct->discountValue.' kr</td>
		  	</tr>';

	}



	// CONTACT INFO

	$sName = "Johannes Holger Greve";
	$sClientMail = "jhg@holgerco.com";
	$sPhone = "42424255";



	$to = "hello@rootstudios.dk";
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
				<h5>Tillykke '.$sName.'</h5><br>

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

	echo $message;

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$sFromMail = "hello@rootstudios.dk";
	$headers .= 'From: <'.$sFromMail.'>' . "\r\n";


	$sFromMail = "hello@rootstudios.dk";
	// mail($to,$subject,$message,$headers);

?>



