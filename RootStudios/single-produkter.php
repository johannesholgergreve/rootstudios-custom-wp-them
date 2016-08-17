

<?php include("header.php") ?>

<div class="heroSectionSmall" style="background-color:<?php echo get_field("small_hero_background_color");?>">
	<div class="smallHeroTableCell">

		<div class="container">
			<div class="col-sm-12 col-md-8">
				<h1 class="smallHeroTitleH1" style="color:<?php echo get_field("small_hero_heading_color");?>"><?php echo get_field("heading");?></h1><br>
			</div>
			<div class="col-sm-12 col-md-4 rightHeadingPrice">
				<div class="smallHeroTitlePrice">
					<p style="color:<?php echo get_field("small_hero_heading_color");?>"><?php echo get_field("right_heading");?></p>
				</div>
				
				<div class="singlePriceSubHeading">
					<p class="singlePriceSubHeading" style="color:<?php echo get_field("small_hero_heading_color");?>"><?php echo get_field("right_sub_heading");?></p>
				</div>
			</div>
		</div>
	</div>
</div>





<div class="default2ColTextarea defaultContentMarginTop container">
	<div class="col-xs-12 hidden-xs">
		<h3><?php echo get_field("h3_heading");?></h3>	
	</div>
	
	<?php $i = 1; ?>

	<?php if( have_rows('about_text_box') ): ?>
		<?php while ( have_rows('about_text_box') ) : the_row(); ?>
			
			<div id="tab<?php echo $i;?>Content" class="tabContent">

				<?php $j = 0; ?>

				<?php if( have_rows('column') ): ?>
					<?php while ( have_rows('column') ) : the_row(); ?>

						<div class="col-sm-6 wysiwygGreyLinks <?php echo get_sub_field('class'); ?> singleAnswerLoad-<?php echo $j; ?>">
							<h4 class="theLoadHeading"><?php echo get_sub_field('title'); ?></h4>
							<p class="theLoadText"><?php echo get_sub_field('content'); ?></p>
						</div>

					<?php $j++; ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<?php $i++; ?>

		<?php endwhile; ?>
	<?php endif; ?>
	<div class="clearfix"></div><br>
	<a href="<?php echo get_field('produkt_oversigt_link'); ?>" class="productHeroBtn" style="background:#CCCCCC;"><?php echo get_field("default2content_btn_text");?></a>

</div>




<div class="singleProductContents">
	<div class="container">
		<div class="col-xs-12">
			<h3>Produkt indhold:</h3>	
		</div>

		<div class="clearfix"></div><br><br>

		<?php $i = 0; ?>

		<?php if( have_rows('product_detailt_items') ): ?>
			<?php while ( have_rows('product_detailt_items') ) : the_row(); ?>
			
				<div class="singleContentField" data-ajax-link="<?php echo get_sub_field('link'); ?>" data-link="<?php echo $i; ?>">
					
					<div class="col-sm-3 col-xs-10 singleProductTeknologi">
						<a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('teknologi'); ?></a>
					</div>

					<div class="col-sm-7 hidden-xs singleProductDescription">
						<p><?php echo get_sub_field('description'); ?></p>
					</div>

					<div class="col-xs-2 singleProductBtnWrap">
						<div class="toggleDownProduktContentBtn"></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="productTeknologiBeskrivelse" id="activeDescription-<?php echo $i; ?>">
					<div class="col-sm-12 wysiwygGreyLinks LoadH4Headings">
						<h4></h4><br>
						<p></p>
					</div>
					<div class="clearfix"></div>
					<br><br>
					<div class="col-md-12 col-sm-4 col-xs-12 toSingleFaqLink">
						<a href="<?php echo get_sub_field('link'); ?>" style="background:#DCDCDC;">Læs mere om <?php echo get_sub_field('teknologi'); ?></a>
					</div>
					<div class="clearfix"></div>
				</div>


				<div class="clearfix"></div>

				<?php $i++; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>




<?php include("footer.php") ?>





<script>
	$(document).on(clickTap, ".singleContentField", function(){

		$(this).css("background", "#EFEFEF")

		var url = $(this).attr("data-ajax-link");
		var loadHeading = $(this).next().find(".wysiwygGreyLinks h4");
		var loadContent = $(this).next().find(".wysiwygGreyLinks p");

		$.get(url, function(data){
			var theHeading = $(data).find('.singleAnswerLoad-0 .theLoadHeading').text();
			var theContent = $(data).find('.singleAnswerLoad-0 p').text();
			$(loadHeading).text(theHeading);
			$(loadContent).text(theContent);
		});


		

		var clickedTeknologi = $(this).attr("data-link");
		var activeDescription = $("#activeDescription-"+clickedTeknologi);



		if ($(activeDescription).is(':visible')) {
			$(activeDescription).velocity("slideUp") ;
			$(this).find(".toggleDownProduktContentBtn").velocity({
			    rotateZ: "0deg",
			    backgroundColor: "#7F8E65"
			});

		} else {
			$(activeDescription).velocity("slideDown", {delay: 500 });
			$(this).find(".toggleDownProduktContentBtn").velocity({
			    rotateZ: "180deg",
			    backgroundColor: "#D9D9D9"
			});	 
		}
	


	});



	$(document).on("mouseenter", ".singleContentField", function(){
		$(this).css("backgroundColor", "#EFEFEF");
	});

	$(document).on("mouseleave", ".singleContentField", function(){
		$(this).css("backgroundColor", "transparent");
	});



</script>




