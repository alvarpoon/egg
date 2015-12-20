<section class="home-banner">
	<div id="main-banner">
	<?
		$args = array( 'numberposts' => -1, 'post_type' => 'mainpage_banner2', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order', 'suppress_filters' => 0);
	  $results = get_posts( $args );
	  foreach( $results as $result ) :
	  	$url = wp_get_attachment_image_src( get_post_thumbnail_id($result->ID), 'full');
	  	$page_url = get_field("link",$result->ID);
	?>
		<div class="main-banner-item">
    <?
        if($page_url){
            echo '<a href="'.$page_url.'">';
        }
    ?>
			<img src="<?=$url[0]?>" />
    <?
        if($page_url){
            echo '</a>';
        }
    ?>
		</div>
	<? endforeach;?>
	</div>
	<div class="container philosophy-container">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-push-1 col-lg-push-2 sectionIntro">
			<div class="section-contents"><?=apply_filters('the_content',$post->post_content);?></div>
	    </div>
		</div>
    </div>
    
</section>

<section class="home-new-collection">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-push-1 sectionIntro">
            <div class="section-title"><h2 id="product-highlight-heading"><?_e('Product Highlight')?></h2></div>
            <div class="section-contents">
            	<?
                    $new_collection = get_field('product_highlight',$post->ID);
                    $args= array(
                        'post_type' => 'eggstar_product',
                        'post_status'       => 'publish',
                        'orderby'           => 'menu_order',
                        'order'             => 'ASC',
                        'numberposts'       => 1,
                        'suppress_filters' => 0
                    );
                    $results = get_posts( $args );
                    if( $new_collection){
                        foreach( $new_collection as $index => $new_product ){
                            if($index==6){
                                break;
                            }
                            if(ICL_LANGUAGE_CODE!=en){
                                $new_product_id = icl_object_id($new_product->ID,'post',false,'en');
                            }
                            else{
                                $new_product_id = $new_product->ID;
                            }
                            $product_image_url = wp_get_attachment_url( get_post_thumbnail_id($new_product_id) );
                            if($index%3==0){
                ?>
                            <div class="row">
                <?
                            }
                ?>
                            <div class="col-sm-4 col-md-3">
                                <a href="<?=get_permalink($new_product->ID)?>"><img class="img-responsive" src="<?=$product_image_url; ?>" /></a>
                            </div>
                <?
                            if($index%3==2){
                ?>
                            </div>
                <?
                            }
                        }
                    }
                ?>

                <div class="view-all-btn"><a href="<?=get_permalink($results[0]->ID);?>"><?_e('All in Collection');?> ></a></div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-find-store">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-push-1  sectionIntro">
            <div class="section-title">
                <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/store_banner_eggstar.jpg"  />
                <div class="find-store-btn"><h2><a href="<?=(ICL_LANGUAGE_CODE=='en'?"":'/'.ICL_LANGUAGE_CODE)?>/eggstar/stores/"><?_e('Find a EGG* Store');?></a></h2></div>
            </div>
            
        </div>
    </div>
</div>
</section>