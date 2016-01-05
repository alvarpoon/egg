

    
<?
	/*$terms = get_the_terms( $post->ID, 'collection' );
	if ( $terms && ! is_wp_error( $terms )){
		$term = $terms[0];*/
?>

<section class="product-back-btn-container">
	<div class="container">
            <div class="row">
            	<div class="col-md-12 col-lg-10 col-lg-push-1 ">
    				<a class="back-btn" href="<?=(ICL_LANGUAGE_CODE=='en'?"":'/'.ICL_LANGUAGE_CODE)?>/eggstar">< <?_e('Back to eGG*');?></a>
                </div>
             </div>
    </div>
</section>
<section class="product-name-container">
	<div class="container">
            <div class="row">
            	<div class="col-md-12 col-lg-10 col-lg-push-1 ">
                    <div class="page-title"><h2>eGG*</h2></div>
             </div>
        </div>
    </div>
</section>

<?
	//}
?>
    
    
<div class="container" id="product-content-page" >

<? get_template_part('templates/page-header'); ?>

<div class="row">
	<div class="col-md-10 col-md-push-1">


	<?
		$product = $post;
		$current_product_id = $product->ID;
        //if current lang is not english, find the eng version to get its images
        if(ICL_LANGUAGE_CODE!=en){
            $image_post_id = icl_object_id($current_product_id,'post',false,'en');
        }
        else{
            $image_post_id = $current_product_id;
        }
		$product_image_url = wp_get_attachment_url( get_post_thumbnail_id($image_post_id) );

	?>
		
		<div class="product-container"> 
        	
            
                <!-- <div class="model-name"><h2><?//=$product->post_name?></h2></div> -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 product-left-container">
                        <?
                                $image_args = array(
                                    'post_type' => 'attachment',
                                    'numberposts' => -1,
                                    'post_status' => null,
                                    'post_parent' => $image_post_id,
                                    'order' => 'ASC',
                                    'orderby' => 'menu_order'
                                );
                                $images = get_posts( $image_args );
                                foreach( $images as $image ){
                                //$page_url = get_field("page_link",$result->ID);
								?>
								
								<div><?=wp_get_attachment_image($image->ID,'full')?></div>
								
								<?
									}
								?>
							
                    </div>
                    <div class="col-sm-12 col-md-6 product-right-container">
                            <div class="product-info">
                            <?
                                if($product->post_content!=""){
                                    echo apply_filters('the_content', $product->post_content);
                                }
                                else{
                                    $collection_page_id = ['en'=>2874,'zh-hant'=>2883, 'zh-hans'=>2885];
                                    echo apply_filters('the_content',get_post($collection_page_id[ICL_LANGUAGE_CODE])->post_content);
                                }
                            ?>
                            </div>
                            <?
                                if(sizeof($images)>1){
                            ?>
                                    <div id="product-slider"  class="row hidden-xs">
                            <?
                                         foreach( $images as $image ){
                                            //$page_url = get_field("page_link",$result->ID);
                            ?>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 product-slider-item">
                                                <?=wp_get_attachment_image($image->ID,'full')?>
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
        
    	<div class="others-collection-container ">
            <h3><?_e('Others in this collection');?></h3>
            
            <div class="collection-container">
            <?
                //$terms = get_the_terms( $post->ID, 'collection' );
                //if ( $terms && ! is_wp_error( $terms )){
                    //$term = $terms[0];
                    $args= array(
                        'post_type' => 'eggstar_product',
                        /*'tax_query' => array(
                                          array(
                                            'taxonomy' => 'collection',
                                            'field'    => 'slug',
                                            'terms'    => $term->slug,
                                            'include_children' => false
                                          )
                                        ),*/
                        'post_status' 		=> 'publish',
                        'orderby'			=> 'menu_order',
                        'order' 			=> 'ASC',
                        'numberposts' 		=> -1,
                        'suppress_filters'  => 0
                    );
                    $products = get_posts( $args );
                    //$size = sizeof($products);
                    if($products){
        ?>
                        <div id="collection-slider">
        <?
                        foreach( $products as $product ){ 
                        $product_id = $product->ID;
                        if($product_id!=$current_product_id){
                            if(ICL_LANGUAGE_CODE!=en){
                                $image_post_id = icl_object_id($product_id,'post',false,'en');
                            }
                            else{
                                $image_post_id = $product_id;
                            }
                            $product_image_url = wp_get_attachment_url( get_post_thumbnail_id($image_post_id) );
        ?>
                            <div class="collection-slider-item">
                                <a href="<?=get_permalink($product_id)?>"><img src="<?=$product_image_url ?>" /></a>
                            </div>
        <?
                        }
                        }
        ?>
                        </div>
        <?
                    }
                //}
        ?>
        	</div>
		</div>
	</div>
</div>
</div>