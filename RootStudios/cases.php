<?php
/*
Template Name: Cases
*/
?>

<?php include("header.php") ?>



<?php 
	$singleFaq = new WP_Query(
    array(
        'post_type' => 'cases',
		'order'=>'ASC',
		'meta_key' => 'case_position',
		'orderby' => 'meta_value',
		'posts_per_page'=>'-1',
        'post_status' => 'publish'
    	)
	);

?>


<?php while($singleFaq->have_posts()) : $singleFaq->the_post(); ?>

	

		<?php 
			$img = get_field('single_case_overview_single_image');
			$case_title = get_the_title();
			$case_title_cast = preg_replace('/\s*/', '', $case_title);
			$case_title_cast = strtolower($case_title_cast);
		?>
		
			<div id="<?php echo $case_title_cast?>Case" class="fullscreenCase">
				<div class="fullscreenCaseBg" style="background-color: <?php echo get_field('single_case_hero_background_color');?>; background-image:url('<?php echo get_field('single_case_hero_background_image');?>');">
					<?php if($img){ ?>
						<img src="<?php echo $img; ?>" alt="">
					<?php } ?>
				</div>
				<div id="<?php echo $case_title_cast;?>CaseRightAside" class="caseRightAside">
					<h3><?php echo $case_title;?></h3>
					<h4>
						<?php echo get_field("h3_heading");?>
					</h4>

					<p><?php echo get_field('oversigt_overskrift');?></p>


					<br><br><br><br><br>
					

					<p class="categories">Kategorier</p>

					<?php if( have_rows('roll_details') ): ?>
						<?php while ( have_rows('roll_details') ) : the_row(); ?>

							<a class="categoryLink" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('teknologi'); ?></a>

						<?php endwhile; ?>
					<?php endif; ?>

					<a href="<?php echo get_permalink(); ?>" class="viewCaseBtn">Se case</a>
					<a href="<?php echo get_permalink(); ?>" class="viewCaseBtnMobile">
						<div class="viewCaseBtnMobileIcon" style="background-color:<?php echo get_field('single_case_slidedown_color');?>; background-image:url('<?php include bloginfo('template_url'); ?>/resources/images/arrowRight.png');"></div>
					</a>
				</div>
			</div>






<?php endwhile; ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post().?>




<?php include("footer.php") ?>