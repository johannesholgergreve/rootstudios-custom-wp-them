
<?php include("header.php") ?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="heroSectionSmall" style="background-color: #E9E9E9">
		<div class="smallHeroTableCell">
			<div class="container">
				<div class="col-xs-12">
					<h1 style="color: #333333"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>

	

	<div class="singleFaqAnswer" id="singleFaqAnswer">
		
		<div class="container cols">

		<a class="inBetweenBackButton" href="https://rootstudios.dk/faq/">Til FAQ</a>

			

			<?php $i = 0; ?>
		
			<?php if( have_rows('single_faq') ): ?>
				<?php while ( have_rows('single_faq') ) : the_row(); ?>
					
						<div class="col-sm-12 singleAnswer wysiwygGreyLinks singleAnswerLoad-<?php echo $i; ?>">
								<div class="singleAnswerPadding">
									<h3 class="theLoadHeading"><?php echo get_sub_field('question_title'); ?></h3>
								<div class="produktLineSeperaterNegative"></div>
								<p class="theLoadText"><?php echo get_sub_field('answer_content'); ?></p>
								</div>
						</div>

			<?php $i++ ?>
					

				<?php endwhile; ?>
			<?php endif; ?>

		</div>

	</div>


	<div class="clearfix"></div>
		


<?php endwhile; endif; ?>





<div class="interestBox">
	<div class="container">
		<h1>Har vi fanget din interesse?</h1>
		<div class="interestBtnWrap">
			<a href="https://rootstudios.dk" class="heroButton hidden-xs" style="background:#2a5063;">Til forside</a>
			<a href="https://rootstudios.dk/kontakt/" class="heroButton" style="background:#c7b194;">Kontakt os</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>





<?php include("footer.php") ?>