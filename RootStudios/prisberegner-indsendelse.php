<?php
/*
Template Name: Prisberegner Indsendelse
*/
?>




<?php
	session_start();
	$sGetItemsReal = $_GET["theString"];
	$sTotalPrice = $_GET["totalPrice"];
	$sTotalDiscountPrice = $_GET["totalDiscountPrice"];

	$_SESSION["theString"] = $sGetItemsReal;
	$_SESSION["totalPrice"] = $sTotalPrice;
	$_SESSION["totalDiscountPrice"] = $sTotalDiscountPrice;

	$sGetItemsRealClean = stripslashes($sGetItemsReal);

	$oGlobalProducts = json_decode('{"results" : {"chosenItems":'.$sGetItemsRealClean.'}}');

?>



<?php include("header.php") ?>

<div class="container">
	<div class="calculatorOverviewTopSection">
		<img src="<?php include bloginfo('template_url'); ?>/resources/images/check-Icon-Blue.png" alt="">
		<h3>Overblik</h3>
	</div>
</div>

<div class="ticket" id="ticket">
	<h3>Pris inklusive 30 % rabat</h3>
	<h1><?php echo $sTotalDiscountPrice; ?></h1>
	<p class="smallText">Værdi: <?php echo $sTotalPrice; ?> DKK - ekskl. moms </p>

	<div class="borderDivider"></div>

	<h3>Inhold på din nye hjemmeside</h3>
	<div class="websiteFeaturesWrap">

		<?php foreach ($oGlobalProducts->results->chosenItems as $oProduct) { ?>


					<div class="websiteFeatures col-xs-12 col-sm-6 col-md-4">
						<img src="<?php include bloginfo('template_url'); ?>/resources/images/check-Icon-Green.png" alt="">
						<p><?php echo $oProduct->dataName; ?></p>
					</div>

		<?php } ?>




		
		
	</div>

	<div class="clearfix"></div>
	<div class="borderDivider"></div>

	<h3 style="padding:0;">Indsend nu og få 30 % rabat</h3>
	<p>( Vi kontakter dig -  det er totalt uforpligtende )</p><br><br>

	<div class="inpWrapper">
		<input type="text" name="" class="ticketInput" id="nameInp" placeholder="Navn eller firma:">
		<span class="inputError"></span>
	</div><br>

	<div class="inpWrapper">
		<input type="email" name="" class="ticketInput" id="emailInp" placeholder="Email:">
		<span class="inputError"></span>
	</div><br>

	<div class="inpWrapper">
		<input type="text" name="" class="ticketInput" id="phoneInp" placeholder="Telefon:">
		<span class="inputError"></span>
	</div><br>

	<div class="swipeBtn">
		<div class="swipeBtnCircle"></div>
		<p>
		<span>I</span>
		<span>n</span>
		<span>d</span>
		<span>s</span>
		<span>e</span>
		<span>n</span>
		<span>d</span>
		<span>&nbsp;</span>
		<span>b</span>
		<span>e</span>
		<span>r</span>
		<span>e</span>
		<span>g</span>
		<span>n</span>
		<span>i</span>
		<span>n</span>
		<span>g</span>
		</p>
	</div>

	<br>

	<a href="https://rootstudios.dk/hjemmeside-prisberegner/">Begynd ny beregning</a>
</div>



<?php include("footer.php") ?>

<!-- <script>
$(document).ready(function() {
	function textFadeAnimation(){
		
		$(".swipeBtn p span").each(function(i){
			$(this).velocity({opacity:0.9},{
				duration: 400, 
				stagger: 120,
				delay: (i*40),
				complete: function(){
					$(this).velocity({opacity:0.3},{
						duration: 400, 
						stagger: 120,
						delay: (i*40)
					});
				},
			});
		});
	}

	textFadeAnimation();
	setInterval(textFadeAnimation,3500);
});
</script> -->
