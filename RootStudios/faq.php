<?php
/*
Template Name: FAQ
*/
?>

<?php include("header.php") ?>


<div class="heroSectionSmall" style="background-color:<?php echo get_field("small_hero_background_color");?>">
	<div class="smallHeroTableCell">
		<div class="container">
			<div class="col-xs-3 col-md-3">
				<h1 class="smallHeroTitleH1" style="color:<?php echo get_field("small_hero_heading_color");?>"><?php echo get_field("heading");?></h1>	
			</div>
			<div class="col-xs-9 col-md-9 rightHeadingPrice">
				<div class="smallHeroTitlePrice searchFaqInput">
					<input type="text" name="searchQ" id="searchFaqInput" placeholder="Søg i FAQ..">
				</div>
			</div>
		</div>
	</div>
</div>



<?php 
	$singleFaq = new WP_Query(
    array(
        'post_type' => 'faq',
		'orderby'=>'title',
		'order'=>'ASC',
		'posts_per_page'=>'-1',
        'post_status' => 'publish'
    )
);

?>


<div class="faqListWrapper">
	

	<?php $topicCount = 0; ?>

	<?php while($singleFaq->have_posts()) : $singleFaq->the_post(); ?>


	<div class="faqItemList">
		
		<div class="singleProductContents faqSingleItems">
			<div class="container">
				<div class="col-xs-12">
					<h3><?php echo get_the_title(); ?></h3>	
				</div>

				<div class="clearfix"></div><br>

				<?php $i = 0; ?>

				<?php if( have_rows('single_faq') ): ?>
					<?php while ( have_rows('single_faq') ) : the_row(); ?>
					
						<div class="singleContentField" data-ajax-link="<?php echo get_permalink(); ?>" data-topic-count="<?php echo $topicCount; ?>"data-link="<?php echo $i; ?>" >
							
							<div class="col-sm-10 col-xs-10 singleProductTeknologi">
								<p><?php echo get_sub_field('question_title'); ?></p>
							</div>

							<div class="col-xs-2 singleProductBtnWrap">
								<div class="toggleDownProduktContentBtn"></div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="productTeknologiBeskrivelse" id="activeDescription-<?php echo $topicCount; ?>-<?php echo $i; ?>">
							<div class="col-sm-12 wysiwygGreyLinks LoadH4Headings">
								<h4></h4><br>
								<p></p>
							</div>
							<div class="clearfix"></div>

						</div>


						<div class="clearfix"></div>

						<?php $i++; ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

	</div>



	<?php $topicCount++; ?>

	<?php endwhile; ?>



</div>






<?php include("footer.php") ?>



<script>
	$(document).on(clickTap, ".singleContentField", function(){

		$(this).css("background", "#EFEFEF")

		var url = $(this).attr("data-ajax-link");
		var theDataLinkCount = $(this).attr("data-link");

		var loadHeading = $(this).next().find(".wysiwygGreyLinks h4");
		var loadContent = $(this).next().find(".wysiwygGreyLinks p");

		$.get(url, function(data){
			var theHeading = $(data).find('.singleAnswerLoad-'+theDataLinkCount+' .theLoadHeading').text();
			var theContent = $(data).find('.singleAnswerLoad-'+theDataLinkCount+' p').text();
			$(loadHeading).text(theHeading);
			$(loadContent).text(theContent);
		});


		

		var clickedTeknologi = $(this).attr("data-link");
		var theTopicCount = $(this).attr("data-topic-count");
		var activeDescription = $("#activeDescription-"+theTopicCount+"-"+clickedTeknologi);



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




	$(document).on("keyup", "#searchFaqInput", function(){

		var searchQ = $(this).val();
	

			$.get("https://rootstudios.dk/faq-search-updater/?searchQ="+searchQ, function(sData){
				$(".faqListWrapper").empty();
				$(".faqListWrapper").append(sData);
		      	console.log(sData);
		  	});


	});


	$(document).on("mouseenter", ".singleContentField", function(){
		$(this).css("backgroundColor", "#EFEFEF");
	});

	$(document).on("mouseleave", ".singleContentField", function(){
		$(this).css("backgroundColor", "transparent");
	});



</script>


