<div id="services-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<?=apply_filters('the_content', $post->post_content); ?>




	<div class="row">
		<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1">

			 <?
				$args= array(
					'post_type' 		=> 'page',
					'post_status' 		=> 'publish',
					'orderby'			=> 'date',
					'order' 			=> 'DESC',
					'post_parent'       => '13',
					'numberposts' 		=> -1
				  );
				$results = get_posts( $args );
				foreach( $results as $result ){
					$url = wp_get_attachment_url( get_post_thumbnail_id($result->ID, 'thumbnail') );
					$post_title = get_the_title( $result->ID );
			  ?>
			
						<div class="row services-container">
							<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 left-content-container">
								<img src="<? echo $url; ?>" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 right-content-container">
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

</div>