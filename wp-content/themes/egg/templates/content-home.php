<section class="home-banner">
	<div id="main-banner">
	<?
		$args = array( 'numberposts' => -1, 'post_type' => 'mainpage_banner', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order', 'suppress_filters' => 0);
	  $results = get_posts( $args );
	  foreach( $results as $result ) :
	  	$url = wp_get_attachment_image_src( get_post_thumbnail_id($result->ID), 'full');
	  	//$page_url = get_field("page_link",$result->ID);
	?>
		<div class="main-banner-item">
			<img src="<?=$url[0]?>" />
		</div>
	<? endforeach;?>
	</div>
	<div class="container">
		<!-- <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sectionIntro">
		</div> -->
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-push-1 col-lg-push-2 sectionIntro">
			<div class="section-contents"><?=apply_filters('the_content',$post->post_content);?></div>
	    </div>
		</div>
	    <!-- <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sectionIntro">
		</div> -->
    </div>
    
</section>

<section class="home-news">
<div class="container ">
	<div class="row">
        <div class="col-md-10 col-md-push-1 sectionIntro">
            <div class="section-title"><h2><?_e('News');?></h2></div> 
            <div class="section-contents">
                <?
                $args= array(
                    'post_type' => 'post',
                    'post_status' 		=> 'publish',
                    'orderby'			=> 'date',
                    'order' 			=> 'DESC',
                    'numberposts' 		=> -1,
                    'suppress_filters' 	=> 0
                  );
                $results = get_posts( $args );
                foreach( $results as $result ){
                    $url = wp_get_attachment_url( get_post_thumbnail_id($result->ID, 'thumbnail',array('class'=> "media-object")) );
                    $post_title = apply_filters('the_content',get_field('introduction',$result->ID));
                    
                    echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">';
                    echo '<div class="news-slider">';
                        echo '<div class="post-img"><a href="/'.(ICL_LANGUAGE_CODE=='en'?"":ICL_LANGUAGE_CODE.'/').'news"><img src="'. $url.'" /></a></div>';
                        echo '<div class="post-title"><a href="/news">'.$post_title.'</a></div>';
                    echo '</div></div>';
                    
                }
                ?>
            </div>
            <div class="view-all-btn"><a href="<?=(ICL_LANGUAGE_CODE=='en'?"":'/'.ICL_LANGUAGE_CODE)?>/news"><?_e('All News');?> ></a></div>
        </div>
    </div>
</div>
</section>

<section class="home-new-collection">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-push-1 sectionIntro">
            <div class="section-title"><h2><?_e('New Collection')?></h2></div>
            <div class="section-contents">
            	<?
                    $new_collection = get_field('new_collection',$post->ID);
                    $new_collection_name = get_field('new_collection_name',$post->ID);
                    $args= array(
						'post_type' => 'product',
						'tax_query' => array(
										  array(
											'taxonomy' => 'collection',
											'field'    => 'slug',
											'terms'    => $new_collection_name->slug
										  )
										),
						'post_status' 		=> 'publish',
						'orderby'			=> 'menu_order',
						'order' 			=> 'ASC',
						'numberposts' 		=> 1,
						'suppress_filters' => 0
					);
					$results = get_posts( $args );
                    if( $new_collection){
                        foreach( $new_collection as $index => $new_product ){
                            if($index%3==0){
                            	$product_image_url = wp_get_attachment_url( get_post_thumbnail_id($new_product->ID) );
                ?>
                            <div class="row">
                <?
                            }
                ?>
                            <div class="col-sm-4">
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

                <div class="view-all-btn"><a href="<?=get_permalink($results[0]->ID); ?>"><?_e('All in New Collection');?> ></a></div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-collections">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-push-1 sectionIntro">
            <div class="section-title"><h2><?_e('Collections');?></h2></div>
            <div class="section-contents">
                    
                <?
                    $featured_collections = get_field('featured_collection',$post->ID);
                    if( $featured_collections){
                        foreach( $featured_collections as $index => $featured_collection ){
                        	$args= array(
								'post_type' => 'product',
								'tax_query' => array(
												  array(
													'taxonomy' => 'collection',
													'field'    => 'slug',
													'terms'    => $featured_collection->slug
												  )
												),
								'post_status' 		=> 'publish',
								'orderby'			=> 'menu_order',
								'order' 			=> 'ASC',
								'numberposts' 		=> 1,
								'suppress_filters' => 0
							);
							$results = get_posts( $args );
                            if($index%4==0){
                ?>
                            <div class="row">
                <?
                            }
                ?>
                            <div class="col-sm-3">
                                <a href="<?=get_permalink($results[0]->ID);?>"><img class="img-responsive" src="<?=z_taxonomy_image_url($featured_collection->term_id); ?>" /></a>
                                <h3><a href="<?=get_permalink($results[0]->ID);?>"><?=$featured_collection->name?></a></h3>
                            </div>
                <?
                            if($index%4==3){
                ?>
                            </div>
                <?
                            }
                        }
                    }
                ?>
                </div>
                <div class="view-all-btn"><a href="/collections"><?_e('All Collections');?> ></a></div>
            </div>
	</div>
</div>
</section>

<section class="home-find-store">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-push-1  sectionIntro">
            <div class="section-title">
                <div class="find-store-btn"><h2><a href="/our-stores/"><?_e('Find a EGG Store');?></a></h2></div>
                <a href="/our-stores/"><img class="find-store-arrow" src="<?=get_stylesheet_directory_uri()?>/assets/img/arrow-right-brown.png"  /></a>
            </div>
            
        </div>
    </div>
</div>
</section>