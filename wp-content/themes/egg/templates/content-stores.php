 <div id="stores-page">

<? get_template_part('templates/page-header'); ?>




<section class="tab-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-push-1 sectionIntro">
		
				<ul class="nav nav-tabs" role="tablist">
					<?
						//$cat = array('en'=>24,'zh-hant'=>39,'zh-hans'=>37);
						$google_map_url = array('en'=>'en-US','zh-hant'=>'zh-TW','zh-hans'=>'zh-CN');
						$args = array(
							'hide_empty'               => false,
							'hierarchical'             => false,
							'parent'				   => 0,
							//'parent'      		   	   => $cat[ICL_LANGUAGE_CODE]
						);
						$categories = get_terms('region', $args );
						foreach ($categories as $index => $category){
					?>
							<li role="region" class="<?=($index==0?"active":"")?>"><a href="#<?=$category->slug?>" aria-controls="<?=$category->slug?>" role="tab" data-toggle="tab" ><?=$category->name?></a></li>
					<?
						}
					?> 
				</ul>
				
			</div>
		</div>
	</div>
</section>

		
<section class="tab-container">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-push-1 sectionIntro">
			
				<div class="tab-content">
					<?
						foreach ($categories as $index => $category){
					?>
							<div role="tabpanel" class="tab-pane <?=($index==0?"active":"")?>" id="<?=$category->slug?>">
					<?
								$args2 = array(
									'hide_empty'               => false,
									'hierarchical'             => false,
									'parent'				   => $category->term_id,
									//'parent'      		   	   => $cat[ICL_LANGUAGE_CODE]
								);
								$sub_categories = get_terms('region', $args2 );
								foreach ($sub_categories as $sub_category){
					?>
									<h3 class="district"><?=$sub_category->name?></h3>
									
									<div class=" store-slider">
					<?
										$args3= array(
											'post_type' => 'store',
											'tax_query' => array(
															  array(
																'taxonomy' => 'region',
																'field'    => 'slug',
																'terms'    => $sub_category->slug,
																'include_children' => false
															  )
															),
											'post_status' 		=> 'publish',
											'orderby'			=> 'menu_order',
											'order' 			=> 'ASC',
											'numberposts' 		=> -1
										);
										$stores = get_posts( $args3 );
										$size = sizeof($stores);
										foreach( $stores as $store ){ 
											$url = wp_get_attachment_url( get_post_thumbnail_id($store->ID));
											$location = get_field('google_map_address',$store->ID);
						?>
										
												<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
													<div class="single-store">
														<img src="<? echo $url; ?>" class="img-responsive" />
														<h4><?=$store->post_title?></h4>
														<?=apply_filters('the_content', $store->post_content); ?>
														
													</div>
													<a target="_blank" class="map-btn" href="https://www.google.com/maps/place/<?=$location['address']?>/@<?=$location['lat']?>,<?=$location['lng']?>,16z?hl=<?=$google_map_url[ICL_LANGUAGE_CODE]?>">map</a>
												</div>
						<?
											}
											
						?>
									</div>
						<?
										}
						?>
									
									
									
									
								</div>
					<?
						}
					?>
				</div>
				
			</div>
		</div>
	</div>
</section>
</div>