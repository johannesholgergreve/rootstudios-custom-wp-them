<?php
/*
Template Name: Priser
*/
?>

<?php include("header.php") ?>




<!-- <div class="heroSectionSmall" style="background-color: #2A5063;">
	<div class="smallHeroTableCell">
		<div class="container">
			<div class="col-xs-8 col-md-9">
				<h1 class="smallHeroTitleH1" style="color: #FFFFFF; "><?php echo get_field("overskrift");?></h1>
				<p class="prisberegnerSub hidden-sm hidden-xs" style="color: #FFFFFF;"><?php echo get_field('under_overskrift'); ?></p>	
		</div>
			<div class="col-xs-4 col-md-3 rightHeadingPrice">

				<div class="beregnerPrisBtn beregnPrisBtnTelefon visible-xs visible-sm">
					<a href="https://rootstudios.dk/hjemmeside-prisberegner/">Beregn Pris</a>
				</div>

				<div class="smallHeroTitlePrice hidden-xs hidden-sm">
					<p style="color: #FFFFFF; "><?php echo get_field("prisberegner_prisen");?></p>
				</div>
				
				<div class="singlePriceSubHeading hidden-xs">
					<p class="singlePriceSubHeading" style="color: #FFFFFF; "><?php echo get_field("prisberegner_pris_sub");?></p>
				</div>
				
				<div class="beregnerPrisBtn hidden-xs hidden-sm alignright">
					<a href="https://rootstudios.dk/hjemmeside-prisberegner/">Beregn din pris</a>
				</div>
			</div>
		</div>
	</div>
</div> -->



<div class="heroSectionSmall" style="background-color: #2A5063;">
	<div class="smallHeroTableCell">
		<div class="container">
			<div class="col-sm-12 col-md-8">
				<h1 class="smallHeroTitleH1" style="color: #FFFFFF"><?php echo get_field("overskrift");?></h1><br>
			</div>
			<div class="col-sm-12 col-md-4 rightHeadingPrice priceBtnPaddingTop">
			
				<a href="https://rootstudios.dk/hjemmeside-prisberegner/" class="productHeroBtn" id="priceHeroBtn">Beregn din pris</a>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>




<div class="allPrices">
	<div class="container">
	
		<!-- <div class="beregnerPrisBtn hidden-xs">
			<a href="https://rootstudios.dk/hjemmeside-prisberegner/">Beregn Pris</a>
		</div> -->

		<div class="clearfix"></div><br><br>




		<!-- HJEMMESIDE PRODUKT PRISER-->

		<div class="col-md-12 hjemmesideProduktClass">
			<h3>Hjemmesider</h3>
		</div>

		<div class="col-md-12 productPriceBox">

		
			<?php 
				$prices = new WP_Query(
			    array(
			        'post_type' => 'produkter',
					'orderby'=>'date',
					'order'=>'ASC',
					'posts_per_page'=>'-1',
			        'post_status' => 'publish'
			    )
			);

			?>
			

	
			<?php while($prices->have_posts()) : $prices->the_post(); ?>

				<?php if (has_category("hjemmeside-produkter")) { ?>

					<div class="thePriceContentBox">

						<div class="col-md-3 priceItemBox">
							<div class="productPriceCol productColHeading">
								<p><?php echo get_field("heading"); ?></p>
							</div>


							<div class="productPriceTeknology">
								<?php if( have_rows('product_detailt_items') ): ?>
			    					<?php while ( have_rows('product_detailt_items') ) : the_row(); ?>

			    						<a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("teknologi"); ?></a>

			    						<?php $i++;  ?>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>


							<div class="thePriceTag">
								<p><?php echo get_field("right_heading"); ?> <span class="priceTagSpan"> DKK</span><span class="priceTagSpanMonth"> <?php if (get_field("lobende_abonnement")) { ?> /MD <?php } ?></span></p>
							</div>

						</div>


					</div>

				<?php } ?>

			<?php endwhile; ?>


		</div>









		

		<!-- SEO PRODUKT PRISER-->
		
		<div class="col-md-12">
			<h3>SEO optimering</h3>
		</div>

		<div class="col-md-12 productPriceBox">

		
			<?php 
				$prices = new WP_Query(
			    array(
			        'post_type' => 'produkter',
					'orderby'=>'date',
					'order'=>'ASC',
					'posts_per_page'=>'-1',
			        'post_status' => 'publish'
			    )
			);

			?>
			

	
			<?php while($prices->have_posts()) : $prices->the_post(); ?>

				<?php if (has_category("seo-produkter")) { ?>

					<div class="thePriceContentBox">

						<div class="col-md-3 priceItemBox">
							<div class="productPriceCol productColHeading">
								<p><?php echo get_field("heading"); ?></p>
							</div>


							<div class="productPriceTeknology priceLinks-2">
								<?php if( have_rows('product_detailt_items') ): ?>
			    					<?php while ( have_rows('product_detailt_items') ) : the_row(); ?>

			    						<a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("teknologi"); ?></a>

			    						<?php $i++;  ?>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>


							<div class="thePriceTag">
								<p><?php echo get_field("right_heading"); ?> <span class="priceTagSpan"> DKK</span><span class="priceTagSpanMonth"> <?php if (get_field("lobende_abonnement")) { ?> /MD <?php } ?></span></p>
							</div>

						</div>


					</div>

				<?php } ?>

			<?php endwhile; ?>


		</div>









		<!-- HOSTING PRODUKT PRISER-->
		
		<div class="col-md-6">
			<h3>Hosting</h3>
		</div>

		<div class="col-md-12 productPriceBox">

		
			<?php 
				$prices = new WP_Query(
			    array(
			        'post_type' => 'produkter',
					'orderby'=>'date',
					'order'=>'ASC',
					'posts_per_page'=>'-1',
			        'post_status' => 'publish'
			    )
			);

			?>
			

	
			<?php while($prices->have_posts()) : $prices->the_post(); ?>

				<?php if (has_category("hosting-produkter")) { ?>

					<div class="thePriceContentBox">

						<div class="col-md-3 priceItemBox">
							<div class="productPriceCol productColHeading">
								<p><?php echo get_field("heading"); ?></p>
							</div>


							<div class="productPriceTeknology priceLinks-3">
								<?php if( have_rows('product_detailt_items') ): ?>
			    					<?php while ( have_rows('product_detailt_items') ) : the_row(); ?>

			    						<a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("teknologi"); ?></a>

			    						<?php $i++;  ?>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>


							<div class="thePriceTag">
								<p><?php echo get_field("right_heading"); ?> <span class="priceTagSpan"> DKK</span><span class="priceTagSpanMonth"> <?php if (get_field("lobende_abonnement")) { ?> /MD <?php } ?></span></p>
							</div>

						</div>


					</div>

				<?php } ?>

			<?php endwhile; ?>


		</div>








		<!-- SUPPORT PRODUKT PRISER-->
		
		<div class="col-md-6">
			<h3>Support</h3>
		</div>

		<div class="col-md-12 productPriceBox">

		
			<?php 
				$prices = new WP_Query(
			    array(
			        'post_type' => 'produkter',
					'orderby'=>'date',
					'order'=>'ASC',
					'posts_per_page'=>'-1',
			        'post_status' => 'publish'
			    )
			);

			?>
			

	
			<?php while($prices->have_posts()) : $prices->the_post(); ?>

				<?php if (has_category("support-produkter")) { ?>

					<div class="thePriceContentBox">

						<div class="col-md-3 priceItemBox">
							<div class="productPriceCol productColHeading">
								<p><?php echo get_field("heading"); ?></p>
							</div>


							<div class="productPriceTeknology priceLinks-3">
								<?php if( have_rows('product_detailt_items') ): ?>
			    					<?php while ( have_rows('product_detailt_items') ) : the_row(); ?>

			    						<a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("teknologi"); ?></a>

			    						<?php $i++;  ?>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>


							<div class="thePriceTag">
								<p><?php echo get_field("right_heading"); ?> <span class="priceTagSpan"> DKK</span><span class="priceTagSpanMonth"> <?php if (get_field("lobende_abonnement")) { ?> / MD <?php } ?></span></p>
							</div>

						</div>


					</div>

				<?php } ?>

			<?php endwhile; ?>


		</div>
















	





	</div>
</div>













<?php include("footer.php") ?>




<script>
	


	$(document).ready(function(){


		windowWidth = $(window).innerWidth();


		if (windowWidth > 768) {

		var productBoxe = $(".productPriceBox");
		var aProductBoxe = $(".productPriceBox").length;

		var highestLink;


		for (var p = 0; p < aProductBoxe; p++) {

			switch(p) {
			    case 0:
			        highestLink = 10;
			        break;
			    case 1:
			        highestLink = 14;
			        break;
			    case 2:
			        highestLink = 4;
			        break;
			    case 3:
			        highestLink = 3;
			        break;
			}
			
			var teknologiBox = $(productBoxe[p]).find(".productPriceTeknology");

			for (var i = 0; i < teknologiBox.length; i++) {
				// console.log(teknologiBox[i]);
				var linkAmount = $(teknologiBox[i]).find("a").length;
				
				if (linkAmount > highestLink) {
					highestLink = linkAmount;
				}
				console.log(linkAmount);

				if (linkAmount < highestLink) {

					var numberOfAppends = highestLink - linkAmount;

					for (var j = 0; j < numberOfAppends; j++){
						$(teknologiBox[i]).append('<a href="">-</a>');
					}

				}

			}

		}

		}

		


		
	});




	$(document).on("mouseenter", ".productPriceTeknology a", function(){
		$(this).css("text-decoration", "underline");
	});


	$(document).on("mouseleave", ".productPriceTeknology a", function(){
		$(this).css("text-decoration", "none");
	});

	$(document).on("mouseenter", ".beregnerPrisBtn a", function(){
		$(this).css("background-color", "rgba(255,255,255,0.2)");
	});


	$(document).on("mouseleave", ".beregnerPrisBtn a", function(){
		$(this).css("background-color", "#2A5063");
	});



</script>


