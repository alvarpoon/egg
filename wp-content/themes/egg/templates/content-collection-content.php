<div id="collection-content-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<?
		global $wp_query;
	    $collection = $wp_query->get_queried_object();
	    $collection_slug = $collection->slug;

	    //get the 1st product in the collection
	    $args= array(
			'post_type' => 'product',
			'tax_query' => array(
							  array(
								'taxonomy' => 'collection',
								'field'    => 'slug',
								'terms'    => $collection_slug,
								'include_children' => false
							  )
							),
			'post_status' 		=> 'publish',
			'orderby'			=> 'menu_order',
			'order' 			=> 'ASC',
			'numberposts' 		=> 1
		);
		$product = get_posts( $args );
		$product = $product[0];
		$product_id = $product->ID;
		$product_image_url = wp_get_attachment_url( get_post_thumbnail_id($product_id) );

	?>
		<h2><?=$product->post_name?></h2>
		<div class="row">
			<div class="col-sm-6">
				<img class="img-responsive" src="<?=$product_image_url ?>" />
			</div>
			<div class="col-sm-6">
				<div class="product-info"><?=apply_filters('the_content', $product->post_content); ?></div>
				<div id="product-slider">
					<?
						$image_args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $product_id,
							'order' => 'ASC',
							'orderby' => 'menu_order'
						);
						$images = get_posts( $image_args );
						foreach( $images as $image ){
					  	//$page_url = get_field("page_link",$result->ID);
					?>
						<div class="product-slider-item">
							<?=wp_get_attachment_image($image->ID,'full')?>
						</div>
					<?
						}
					?>
				</div>
			</div>
		</div>
	<h3>Others in this collection</h3>
	<?
		$args= array(
			'post_type' => 'product',
			'tax_query' => array(
							  array(
								'taxonomy' => 'collection',
								'field'    => 'slug',
								'terms'    => $collection_slug,
								'include_children' => false
							  )
							),
			'post_status' 		=> 'publish',
			'orderby'			=> 'menu_order',
			'order' 			=> 'ASC',
			'numberposts' 		=> -1
		);
		$products = get_posts( $args );
		//$size = sizeof($products);
		if($products){
?>
			<div id="collection-slider">
<?
			foreach( $products as $product ){ 
				$product_id = $product->ID;
				$product_image_url = wp_get_attachment_url( get_post_thumbnail_id($product_id) );
?>
				<div class="collection-slider-item">
					<img src="<?=$product_image_url ?>" />
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