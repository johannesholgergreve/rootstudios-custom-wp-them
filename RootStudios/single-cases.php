

<?php include("header.php") ?>

<?php 
	$singleHeroImg = get_field('single_case_hero_single_image'); 
?>

<div class="singleCaseHeroSection" style="background-color:<?php echo get_field("single_case_hero_background_color");?>; background-image: url('<?php echo get_field("single_case_hero_background_image");?>');">
	<div class="container">
		
		<?php if($singleHeroImg){ ?>
			<img src="<?php echo $singleHeroImg; ?>" alt="">
		<?php }?>

		<div class="singleCaseTitle" style="background-color:<?php echo get_field('title_box_background_color'); ?>">
			<h1 style="color:<?php echo get_field('title_box_text_color'); ?>;"><?php echo get_the_title();?></h1>
			<div class="singleCaseSlideDown" style="background-color:<?php echo get_field('single_case_slidedown_color')?>; background-image:url('<?php echo get_field('arrow');?>');">
			</div>
		</div>
	</div>
</div>


<div class="default2ColTextarea container">
	<div class="col-xs-12">
		<h3><?php echo get_field("h3_heading");?></h3>	
	</div>
	
	<?php $i = 1; ?>

	<?php if( have_rows('about_text_box') ): ?>
		<?php while ( have_rows('about_text_box') ) : the_row(); ?>
			
			<div id="tab<?php echo $i;?>Content" class="tabContent">

				<?php if( have_rows('column') ): ?>
					<?php while ( have_rows('column') ) : the_row(); ?>

						<div class="col-sm-6 <?php echo get_sub_field('class'); ?>">
							<h4><b><?php echo get_sub_field('title'); ?></b></h4>
							<p><?php echo get_sub_field('content'); ?></p>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<?php $i++; ?>

		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-xs-12">
		
		<?php if( have_rows('roll_details') ): ?>
			<p id="roles">Rolle:</p>
			<?php while ( have_rows('roll_details') ) : the_row(); ?>
				<a class="roleLink" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('teknologi'); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<?php if(get_field('link_href')): ?>
			<a href="<?php echo get_field('link_href'); ?>" target="_blank" class="productHeroBtn" id="singleHeroBtn" style="background-color:<?php echo get_field('title_box_background_color'); ?>;">
				<?php echo get_field('default2content_btn_text'); ?>		
			</a>
		<?php endif; ?>
	</div>

</div>



<?php if(get_field('big_box_right_background_color')): ?>

	<div id="caseBoxGridSection" style="background-color:<?php echo get_field('big_box_right_background_color'); ?>;">

		<div id="gridBoxRight" class="col-sm-6" style="background-color:<?php echo get_field('big_box_right_background_color'); ?>;">
			<img src="<?php echo get_field('big_box_right_image'); ?>" alt="">
		</div>

		<div id="gridBoxLeft" class="col-sm-6" style="padding:0;">

			<div class="col-sm-12 gridBoxLeftTop" style="background-color:<?php echo get_field('box_top_left_background_color'); ?>;">
				<p><?php echo get_field('box_top_left_text'); ?></p>
			</div>
			<div class="col-xs-6 halfImg" style="background-color:<?php echo get_field('box_bottom_left_background_color'); ?>;">
				<p><?php echo get_field('box_bottom_left_text'); ?></p>
				<img src="<?php echo get_field('box_bottom_left_image'); ?>" alt="">
			</div>
			<div class="col-xs-6 halfImg" style="background-color:<?php echo get_field('box_bottom_right_background_color'); ?>;">
				<p><?php echo get_field('box_bottom_right_text'); ?></p>
				<img src="<?php echo get_field('box_bottom_right_image'); ?>" alt="">
			</div>

		</div>
		<div class="clearfix"></div>
	</div>

<?php endif; ?>




<div id="carouselSection" style="background-color:<?php echo get_field("carousel_background_color"); ?>;">	
	<div id="carouselSlides" style="-webkit-transform: translateZ(0);
"> 
		<?php if( have_rows('carousel_slide') ): ?>
			<?php while ( have_rows('carousel_slide') ) : the_row(); ?>
			
				<div class="slideWrap">
					<div class="container slideTable">
						<div class="slideTableCell">
							<?php if( have_rows('slide_item') ): ?>
								<?php while ( have_rows('slide_item') ) : the_row(); ?>
									<div class="<?php echo get_sub_field('col_size'); ?> Item">
										<img src="<?php echo get_sub_field('device_image'); ?>" alt="">
									</div>
								<?php endwhile; ?>
							<?php endif; ?>

						<div class="clearfix"></div>

						</div>	
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>

	<div id="carouselDots">
	<?php $i = 1; ?>

		<?php if( have_rows('carousel_slide') ): ?>
			<?php while ( have_rows('carousel_slide') ) : the_row(); ?>
				
				<div class="dot" id="dot<?php echo $i;?>" style="background-color:<?php echo get_field('carousel_element_color'); ?>;"></div>

				<?php $i++; ?>

			<?php endwhile; ?>
		<?php endif; ?>	

		<div class="clearfix"></div>
	</div>

	<div id="prevSlide" style="background-color:<?php echo get_field('carousel_element_color'); ?>;"></div>
	<div id="nextSlide" style="background-color:<?php echo get_field('carousel_element_color'); ?>;"></div>
</div>






<?php if(get_field('design_colors_h4')): ?>

	<div id="caseDesignSection" style="background-image:url('<?php echo get_field("design_section_background_image"); ?>');">
		<div class="container">
			<div class="col-md-9">

				<div id="caseDesignTypography">
					<h4><?php echo get_field('typography_h4'); ?></h4>
					<p style="font-weight:200; font-family:<?php echo get_field('typography_font_family'); ?>;">
						<?php echo get_field('typography_alphabet'); ?>
					</p><br>
					<p style="font-weight:500; font-family:<?php echo get_field('typography_font_family'); ?>;">
						<?php echo get_field('typography_alphabet'); ?>
					</p><br>
					<p style="font-weight:800; font-family:<?php echo get_field('typography_font_family'); ?>;">
						<?php echo get_field('typography_alphabet'); ?>
					</p>
				</div>
				
				<div id="caseDesignElementer">
					<h4><?php echo get_field('design_elements_h4'); ?></h4>

					<?php if( have_rows('icons') ): ?>
						<?php while ( have_rows('icons') ) : the_row(); ?>
							<div class="col-xs-4 col-md-4">
								<img src="<?php echo get_sub_field('icon_image'); ?>" alt="">
								<p><?php echo get_sub_field('icon_text'); ?></p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>	
					
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-3" id="caseDesignFarver">
				<h4><?php echo get_field('design_colors_h4'); ?></h4>

				<?php if( have_rows('design_colors') ): ?>
					<?php while ( have_rows('design_colors') ) : the_row(); ?>
						<div class="col-xs-4 col-md-12">
							<div class="colorCircle col-md-6" style="background-color: <?php echo get_sub_field('color_hex');?>; border: 12px solid <?php echo get_sub_field('border_color_hex');?>;"></div>
							<p class="col-md-6"><?php echo get_sub_field('color_hex');?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>		

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<?php endif; ?>	



<?php if(get_field('lds_right_side_image')): ?>

	<div id="longDeviceSection" style="background-image:url('<?php echo get_field('lds_background_image'); ?>');">
		<div class="col-sm-5" id="ldsLeft">
			<div id="ldsLeftContent">
				<img src="<?php echo get_field('lds_left_side_top_image'); ?>" alt="">
				<p><?php echo get_field('lds_left_side_text'); ?></p>
			</div>
		</div>
		<div class="col-sm-7" id="ldsRight">
			<img src="<?php echo get_field('lds_right_side_image'); ?>" alt="">
		</div>
		<div class="clearfix"></div>
	</div>

<?php endif; ?>	



<?php if( have_rows('fullscreen_image') ): ?>
	<?php while ( have_rows('fullscreen_image') ) : the_row(); ?>
		<div id="fullscreenPresentationSection" style="background-image:url('<?php echo get_sub_field("background_image"); ?>'); background-position: <?php echo get_sub_field('background_position'); ?>;"></div>
	<?php endwhile; ?>
<?php endif; ?>	











<?php include("footer.php") ?>