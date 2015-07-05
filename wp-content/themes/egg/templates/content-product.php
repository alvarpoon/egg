<?
	$terms = get_the_terms( $post->ID, 'collection' );
	if ( $terms && ! is_wp_error( $terms )){
		$term = $terms[0];
?>
<div class="product-head-container">
	<a href="/collections">< Back to all collections</a>
	<div class="page-title"><h2><?=$term->name ?></h2></div>
</div>
<?
	}
?>


<div id="product-content-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<?
		$product = $post;
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
		//$terms = get_the_terms( $post->ID, 'collection' );
		if ( $terms && ! is_wp_error( $terms )){
			//$term = $terms[0];
			$args= array(
				'post_type' => 'product',
				'tax_query' => array(
								  array(
									'taxonomy' => 'collection',
									'field'    => 'slug',
									'terms'    => $term->slug,
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
		}
?>
</div>
</div>