<?php
/*
Template Name: awdadw
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




	<?php if( have_rows('product_item') ): ?>
	    <?php while ( have_rows('product_item') ) : the_row(); ?>

			<div class="productListBox <?php echo get_sub_field('isnegative'); ?>">
				<div class="col-md-4 produktIconBox visible-md visible-lg" style="background: <?php echo get_sub_field('icon_background'); ?>">
					<img src="<?php echo get_sub_field('icon'); ?>" alt="">
				</div>
				<div class="col-md-8 col-sm-12 produktInfoBox" style="background: <?php echo get_sub_field('background_color'); ?>">
					<div class="produktTitelAndPrice">
						<div class="col-md-8 col-xs-8 productName">
							<h3><?php echo get_sub_field('title'); ?></h3>
						</div>
						<div class="col-md-4 col-xs-4 productPrice">
							<p><?php // echo get_sub_field('price'); ?></p>
						</div>
					</div>
					<div class="clearfix"></div>

						
					<?php if (get_sub_field('isnegative') == "") { ?>
						<div class="produktLineSeperater"></div>
					<?php } else { ?>
						<div class="produktLineSeperaterNegative"></div>
					<?php } ?>

					<div class="productListDescription">
						<p><?php echo get_sub_field('description'); ?></p>
					</div>
					<br><br>

					<div class="productDetailLinks visible-lg visible-md col-md-12 col-lg-9">
						<ul>
							<li><p>Indhold: </p></li>

							<?php $i = 0; ?>
							<?php if( have_rows('indhold') ): ?>
	    						<?php while ( have_rows('indhold') ) : the_row(); ?>
									
									<?php if ($i == 0) { ?>


									<li><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('teknologi'); ?></a></li>

									<?php } else { ?>
										<li> - <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('teknologi'); ?></a></li>
									<?php }?>

									<?php $i++; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>

					
					<div class="productOverblikWrapper">
						<?php if (get_sub_field('isnegative') == "") { ?>
						<a class="toSingleProduktBtn" href="<?php echo get_sub_field('link'); ?>">Læs mere</a>
						<?php } else { ?>
							<a class="toSingleProduktBtnNegative" href="<?php echo get_sub_field('link'); ?>">Læs mere</a>
						<?php } ?>
					</div>


					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

	   <?php endwhile; ?>
	<?php endif; ?>



<?php include("footer.php") ?>




