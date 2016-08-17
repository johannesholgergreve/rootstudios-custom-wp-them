
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

<?php endwhile; endif; ?>





<?php include("footer.php") ?>