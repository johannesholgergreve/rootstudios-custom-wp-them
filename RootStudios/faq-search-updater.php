<?php
/*
Template Name: Faq Search Updater
*/
?>

<?php
	$searchQ = $_GET["searchQ"];
?>




<?php


	$type = 'faq';
	$args=array(
	  'post_type' => $type,
	  's' => $searchQ,
	  'post_status' => 'publish',
	  'orderby'=>'title',
	  'order'=>'ASC',
	  'posts_per_page' => -1,
	  'caller_get_posts'=> 1
	);



	$my_query = null;
	$my_query = new WP_Query($args);

?>

	<?php $topicCount = 0; ?>

	<?php if ( $my_query->have_posts() ) : while($my_query->have_posts()) : $my_query->the_post(); ?>


	<div class="faqItemList">
		
		<div class="singleProductContents">
			<div class="container">
				<div class="col-xs-12">
					<h3><?php echo get_the_title(); ?></h3>	
				</div>

				<div class="clearfix"></div><br>

				<?php $i = 0; ?>

				<?php if( have_rows('single_faq') ): ?>
					<?php while ( have_rows('single_faq') ) : the_row(); ?>
					
						<div class="singleContentField" data-ajax-link="<?php echo get_permalink(); ?>" data-topic-count="<?php echo $topicCount; ?>"data-link="<?php echo $i; ?>" >
							
							<div class="col-sm-10 col-xs-10 singleProductTeknologi">
								<p><?php echo get_sub_field('question_title'); ?></p>
							</div>

							<div class="col-xs-2 singleProductBtnWrap">
								<div class="toggleDownProduktContentBtn"></div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="productTeknologiBeskrivelse" id="activeDescription-<?php echo $topicCount; ?>-<?php echo $i; ?>">
							<div class="col-sm-12 wysiwygGreyLinks LoadH4Headings">
								<h4></h4><br>
								<p></p>
							</div>
							<div class="clearfix"></div>

						</div>


						<div class="clearfix"></div>

						<?php $i++; ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

	</div>



	<?php $topicCount++; ?>

	<?php endwhile; else : ?>

	<div class="faqItemList">
		<div class="singleProductContents">
			<div class="container">
				<div class="col-xs-12">
					<h3>Ingen resultater..</h3>	
				</div>
				<div class="clearfix"></div><br>
			</div>
		</div>
	</div>

<?php endif; ?>


<div class="rightSideContainerDevider"></div>

