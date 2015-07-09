<div id="career-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<div class="row">
    	<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1 career-content">
            <?=apply_filters('the_content', $post->post_content); ?>
		</div>
	
	
	
	<?
		$args= array(
			'post_type' 		=> 'career',
			'orderby'			=> 'date',
			'order' 			=> 'ASC',
			'numberposts' 		=> -1,
			'suppress_filters' 	=> 0
		  );
		$results = get_posts( $args );
		foreach( $results as $result ){
			$url = wp_get_attachment_url( get_post_thumbnail_id($result->ID, 'thumbnail') );
			$post_title = get_the_title( $result->ID );
	  ?>
	
				<div class="row">
					<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1 career-post">
						<h3><? echo $post_title; ?></h3>
						<?=apply_filters('the_content', $result->post_content); ?>
					</div>
				</div>
			
			
			<?
		}
	?>
		 
	</div>
	
		
		
</div>

</div>