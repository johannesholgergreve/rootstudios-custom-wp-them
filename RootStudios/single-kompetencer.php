
<?php include("header.php") ?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="heroSectionSmall" style="background-color:<?php echo get_field("small_hero_background_color");?>">
	<div class="smallHeroTableCell">
		<div class="container">
			<div class="col-xs-12">
				<h1 class="smallHeroTitleH1" style="color:<?php echo get_field("small_hero_heading_color");?>"><?php echo get_field('heading'); ?></h1>	
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
	<a href="#" class="productHeroBtn" style="background:#CCCCCC;"><?php echo get_field("default2content_btn_text");?></a>

</div>



<div class="kompetenceTextBoxes">
	<!-- <div class="container kompetenceMenuWrapper hidden-sm">
		<div id="skillsMenuBar" class="col-md-12">
			<div id="skillsMenuBarMobile">
				<p>KOMPETENCE OMRÅDER: </p>
				<div id="skillsMenuBarMobileBtn">
					<img src="<?php include bloginfo('template_url'); ?>/resources/images/arrow-down-dark.png" alt="">
				</div>
			</div>
			<div class="clearfix"></div>
			<ul>
				<li>DESIGNPROCESS</li>
				<li>RESPONSIVE</li>
				<li>LESS IS MORE</li>
			</ul>
		</div>
	</div> -->



	<?php if( have_rows('kompetence_box') ): ?>
		<?php while ( have_rows('kompetence_box') ) : the_row(); ?>
			

			<div class="kompetenceBox">
				<div class="col-sm-6 kompetenceHalfBox textBox <?php echo get_sub_field('align_class'); ?>" style="background-color:  <?php echo get_sub_field('background_color'); ?>">
					<div class="kompetenceContent">
						<h2 class="alignleft"><?php echo get_sub_field('heading'); ?></h2><div class="clearfix"></div>
						<div class="produktLineSeperater"></div>
						<p><?php echo get_sub_field('content_text'); ?></p>
					</div>
				</div>
				<div class="col-sm-6 hidden-xs kompetenceHalfBox iconBox" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="kompetenceContent">
						<img src="<?php echo get_sub_field('icon'); ?>" alt="">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>


		<?php endwhile; ?>
	<?php endif; ?>


</div>




<?php endwhile; endif; ?>



<?php include("footer.php") ?>



