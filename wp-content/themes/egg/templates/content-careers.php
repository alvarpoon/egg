<div id="career-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<div class="row">
    	<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1 career-content">
            <?=apply_filters('the_content', $post->post_content); ?>
		</div>
	
	</div>
	<div class="row career-section-container">
		<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1 ">
			<h4><?_e('Office Recruitment')?></h4>
			<div class="career-list-container career-office-list-container clearfix">
				
			<ul>
	<?
		$args= array(
			'post_type' 		=> 'career_office',
			'orderby'			=> 'date',
			'order' 			=> 'DESC',
			'numberposts' 		=> -1,
			'suppress_filters' 	=> 0
		  );
		$results = get_posts( $args );
		foreach( $results as $result ){
			$thumb = get_post_thumbnail_id($result->ID, 'thumbnail');
			$post_title = get_the_title( $result->ID );
	  ?>
	
				
						<li class="career-post">
							<h3><? echo $post_title; ?></h3>
							<? if($thumb!=""){?>
							<div>
								<div class="career-details-container" style="display:none"><img class="img-career" src="<?=wp_get_attachment_url($thumb)?>" /></div>
								<a class="expend-btn" href="#"><em><?_e('Know more about your career path')?></em><span></span></a>
							</div>
							<? } ?>
							<div>
								<div class="career-details-container" style="display:none"><?=apply_filters('the_content', $result->post_content); ?></div>
								<a class="expend-btn" href="#"><em><?_e('Expand for more details')?></em><span></span></a>
							</div>
						</li>
					
			
			
			<?
		}
	?>
		</ul>
		</div>
		<? if(get_field("office_opening_text",$post->ID)){ ?>
		<div class="career-box-text clearfix"><?=apply_filters('the_content', get_field("office_opening_text",$post->ID)); ?></div>
	 	<? } ?>
	 	</div>
	</div>
	<div class="row career-section-container">
		<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1 ">
			<h4><?_e('Shop Recruitment')?></h4>
			<div class="career-list-container clearfix">
				
			<ul>
	<?
		$args= array(
			'post_type' 		=> 'career',
			'orderby'			=> 'menu_order',
			'order' 			=> 'ASC',
			'numberposts' 		=> -1,
			'suppress_filters' 	=> 0
		  );
		$results = get_posts( $args );
		foreach( $results as $result ){
			$url = wp_get_attachment_url( get_post_thumbnail_id($result->ID, 'thumbnail') );
			$post_title = get_the_title( $result->ID );
	  ?>
	
				
						<li class="career-post">
							<h3><? echo $post_title; ?></h3>
							<?=apply_filters('the_content', $result->post_content); ?>
						</li>
					
			
			
			<?
		}
	?>
		</ul>
		</div>
		<? if(get_field("box_text",$post->ID)){	?>
		<div class="career-box-text clearfix"><?=apply_filters('the_content', get_field("box_text",$post->ID)); ?></div>
		<? } ?>
	 	<div class="career-text-after-box"><?=apply_filters('the_content', get_field("text_after_box",$post->ID)); ?></div>
	 	</div>
	</div>

	
		
		
</div>

</div>