<? get_template_part('templates/page-header'); ?>
<div class="container" id="collection-content-page" >
	<div class="row">
		<div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1">
<?
	$args = array(
	    /*'orderby'           => 'menu_order', 
	    'order'             => 'ASC',*/
	    'hide_empty'        => false
	);
	$terms = get_terms('eggstar_collection',$args);
	  foreach ( $terms as $index => $term ) {
	  	$args= array(
			'post_type' => 'product',
			'tax_query' => array(
							  array(
								'taxonomy' => 'eggstar_collection',
								'field'    => 'slug',
								'terms'    => $term->slug,
								'include_children' => false
							  )
							),
			'post_status' 		=> 'publish',
			'orderby'			=> 'menu_order',
			'order' 			=> 'ASC',
			'numberposts' 		=> 1
		);
		$results = get_posts( $args );
        if($index%3==0){
?>
        	<div class="row">
<?
        }
?>
            <div class="col-sm-4 collection-box">
                <div class="single-collection-img"><a href="<?=get_permalink($results[0]->ID);?>"><span class="overlay"><p><?_e('SEE THE COLLECTION');?></p></span><img class="img-responsive" src="<?=z_taxonomy_image_url($term->term_id); ?>" /></a></div>
                <div class="single-collection-title"><h3><a href="<?=get_permalink($results[0]->ID);?>"><?=$term->name?></a></h3></div>
            </div>
            
            <!--
            <a href="<?=get_permalink($results[0]->ID);?>">
				<span class="col-sm-4 collection-box">
					<span class="img-wrapper">
						<span class="single-collection-img"><img class="img-responsive" src="<?=z_taxonomy_image_url($term->term_id); ?>" /></span>
						<span class="overlay"><p>SEE THE COLLECTION</p></span>
					</span>
					<span class="single-collection-title"><h3><?=$term->name?></h3></span>
				</span>
            </a>
            -->
<?
            if($index%3==2){
?>
            </div>
<?
            }
        }
?>
		</div>
	</div>
</div>