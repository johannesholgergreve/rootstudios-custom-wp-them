<?php
/*
Template Name: Forside
*/
?>

<?php include("header.php") ?>



<div class="heroSectionLarge frontPageHero" style="background-image:url('<?php echo get_field("large_hero_background_image");?>'); border-bottom:1px solid rgba(0,0,0,0.06);">
	<div class="container">
		<div class="col-md-7 heroTextBox">
			<div class="heroTexts">
				<h1><?php echo get_field("heading");?></h1><br>
				<h2><?php echo get_field("sub_heading");?></h2>
				<a href="https://rootstudios.dk/cases" class="heroButton" id="tilHjemmesiderBtn" style="background:#2a5063;">Se cases</a>
				<a href="https://rootstudios.dk/hjemmeside-produkter" class="heroButton hidden-xs" id="tilKompetencer" style="background:#c7b194;">Hjemmesider</a>
			</div>
		</div>
	</div>
</div>





<div id="produktBoxesSection" class="container-fluid">

	<?php if( have_rows('colorboxes') ): ?>
	    <?php while ( have_rows('colorboxes') ) : the_row(); ?>
			
			<a href="<?php echo get_sub_field('colorbox_link') ?>" class="col-xs-6 col-sm-3">
				<div class="frontpageProducBox <?php echo get_sub_field('background_color_class'); ?>">
					<p><?php echo get_sub_field('top_left_text'); ?></p>
					<div class="productBoxIcon" style="background:<?php echo get_sub_field('circle_#_color'); ?>;">
						<img src="<?php echo get_sub_field('colorbox_icon'); ?>" alt="">
					</div>
				</div>
				<h4><?php echo get_sub_field('color_box_title'); ?></h4>
			</a>
			

	   <?php endwhile; ?>
	<?php endif; ?>
	
</div>







<div class="container-fluid" style="padding:15px 30px 15px 30px; ">
	<div id="selectedCasesHeading" class="col-xs-12">
		<h3>Udvalgte cases</h3>
		<a href="https://rootstudios.dk/cases" class="smallBtn darkBg">Alle cases</a>
	</div>
</div>






<div id="selcetedCasesSection" class="container-fluid">

	<?php if( have_rows('favourite_cases') ): ?>
	    <?php while ( have_rows('favourite_cases') ) : the_row(); ?>
			

			<div class="selectedCase col-xs-12">
				<div class="selcetedCaseBg" style="background-image:url('<?php echo get_sub_field('case_background_image'); ?>')">
					<h3 style="background-color:<?php echo get_sub_field('case_title_background_color'); ?>;"><?php echo get_sub_field('case_title'); ?></h3>		
				</div>
				<div class="caption">
					<?php echo get_sub_field('arbejde'); ?>
					<a href="<?php echo get_sub_field('case_link'); ?>" class="smallBtn darkBg">Se case</a>
				</div>
			</div>
			

	   <?php endwhile; ?>
	<?php endif; ?>

</div>






<br>
<br>
<br>
<br>


<?php include("footer.php") ?>