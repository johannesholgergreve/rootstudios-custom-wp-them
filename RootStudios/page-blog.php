<?php
/*
Template Name: Blog
*/
?>

<?php include("header.php") ?>


	<div class="heroSectionSmall" style="background-color: #F3F3F3">
		<div class="smallHeroTableCell">
			<div class="container">
				<div class="col-xs-12">
					<h1 style="color: #333333">Blog</h1>
				</div>
			</div>
		</div>
	</div>
	
	
<?php 
	$singleFaq = new WP_Query(
    array(
        'post_type' => 'post',
		'orderby'=>'title',
		'order'=>'ASC',
		'posts_per_page'=>'-1',
        'post_status' => 'draft'
    )
);

?>


	<?php
	    $i = 0; // set up a counter so we know which post we're currently showing
	    $class = 'blogPostDark'; // set up a variable to hold an extra CSS class
	?>
	<?php while($singleFaq->have_posts()) : $singleFaq->the_post(); ?>

		<?php
			$i++;

			if( $i % 2 != 0) {
				$class = 'blogPostLight';
			} 
			else {
				$class = 'blogPostDark'; 
			} 
		?>

		<div class="blogPostWrap">
			<div class="blogPostContent <?php echo $class; ?>">
				<h3> <?php echo get_the_title(); ?> </h3>
			</div>
			
		</div>

<?php endwhile; ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post().?>





<?php include("footer.php") ?>