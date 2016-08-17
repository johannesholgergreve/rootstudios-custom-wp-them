<?php
/*
Template Name: Om os
*/
?>

<?php include("header.php") ?>

<div class="heroSectionLarge" style="background-image: url('<?php echo get_field("large_hero_background_image");?>');">
	<div class="container">
		<div class="col-md-7 heroTextBox">
			<div class="heroTexts">
				<h1><?php echo get_field("heading");?></h1><br>
				<h2><?php echo get_field("sub_heading");?></h2>
			</div>
		</div>
	</div>
</div>


<div id="aboutContent">
	
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
								<h4><?php echo get_sub_field('title'); ?></h4>
								<p><?php echo get_sub_field('content'); ?></p>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<?php $i++; ?>

			<?php endwhile; ?>
		<?php endif; ?>



		<div id="aboutMenuBar" class="col-md-12">
			<div id="aboutMenuBarMobile">
				<p>MERE OM OS</p>
				<div id="aboutMenuBarMobileBtn">
					<img src="<?php include bloginfo('template_url'); ?>/resources/images/arrow-down.png" alt="">
				</div>
			</div>
			<div class="clearfix"></div>
			<ul>
				<li id="tab1">HVEM ER VI / SÅDAN ARBEJDER VI</li>
				<li id="tab2">MISSION &nbsp;& &nbsp;VISION</li>
				<li id="tab3">VÆRDIER &nbsp;& &nbsp;PROCESSER</li>
				<li id="tab4">NAVNET /ROOT &nbsp;+ &nbsp;BRUGEROPLEVELSER</li>
				<li id="tab5">SEO OPTIMERING &nbsp;& &nbsp;ANALYSE</li>
			</ul>
		</div>
	</div>

</div>











<?php include("footer.php") ?>