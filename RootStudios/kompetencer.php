<?php
/*
Template Name: Kompetencer
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



<?php 
	$singleFaq = new WP_Query(
    array(
        'post_type' => 'kompetencer',
		'orderby'=>'date',
		'order'=>'ASC',
		'posts_per_page'=>'-1',
        'post_status' => 'publish'
    )
);

?>


<?php while($singleFaq->have_posts()) : $singleFaq->the_post(); ?>



				<div class="productListBox <?php echo get_field('isnegative')[0]; ?>">
					<div class="col-md-4 produktIconBox visible-md visible-lg" style="background: <?php echo get_field('small_hero_background_color'); ?>">
						<img src="<?php echo get_field('kompetence_icon'); ?>" alt="">
					</div>
					<div class="col-md-8 col-sm-12 produktInfoBox" style="background: <?php echo get_field('small_hero_background_color'); ?>">
						<div class="produktTitelAndPrice">
							<div class="col-md-8 col-xs-8 productName">
								<h3><?php echo get_field('heading'); ?></h3>
							</div>
							<div class="col-md-4 col-xs-4 productPrice">
								<p><?php echo get_field('right_heading'); ?></p>
							</div>
						</div>
						<div class="clearfix"></div>

							
						<?php if (get_field('isnegative') == "") { ?>
							<div class="produktLineSeperater"></div>
						<?php } else { ?>
							<div class="produktLineSeperaterNegative"></div>
						<?php } ?>

						<div class="productListDescription">
							<p><?php echo get_field('oversigt_overskrift'); ?></p>
						</div>
						<br><br>

						<div class="productDetailLinks visible-lg visible-md col-md-12 col-lg-9">
							<ul>
								<li><p>Indhold: </p></li>

								<?php $i = 0; ?>
								<?php if( have_rows('kompetence_box') ): ?>
		    						<?php while ( have_rows('kompetence_box') ) : the_row(); ?>

		    							
		    							

		    							<?php if(get_sub_field('show_in_overview')) { ?>

		    								

    										<?php if ($i <= 2) {?>
    								

												<li><a href="<?php echo get_sub_field('link'); ?>"> <?php echo get_sub_field('heading'); ?></a></li>
												<li>-</li>

											<?php } else { ?>
												<li><a href="<?php echo get_sub_field('link'); ?>"> <?php echo get_sub_field('heading'); ?></a></li>
											<?php }?>


											<?php $i++; ?>
											


										<?php } ?>

										
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>

						
						<div class="productOverblikWrapper">
							<?php if (get_field('isnegative') == "") { ?>
							<a class="toSingleProduktBtn" href="<?php echo get_permalink(); ?>">Læs mere</a>
							<?php } else { ?>
								<a class="toSingleProduktBtnNegative" href="<?php echo get_permalink(); ?>">Læs mere</a>
							<?php } ?>
						</div>


						
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>






<?php endwhile; ?>








<?php include("footer.php") ?>




