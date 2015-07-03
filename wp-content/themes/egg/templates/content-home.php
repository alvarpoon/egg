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
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sectionIntro">
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 sectionIntro">
			<div class="section-contents"><?=apply_filters('the_content',$post->post_content);?></div>
	    </div>
	    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sectionIntro">
		</div>
    </div>
    
</section>

<section class="home-news">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<div class="section-title"><h2>News</h2></div> 
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
				$post_title = get_the_title( $result->ID );
				
				echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">';
				echo '<div class="news-slider">';
					echo '<div class="post-img"><a href="'.get_permalink($result->ID).'"><img src="'. $url.'" /></a></div>';
					echo '<div class="post-title"><a href="'.get_permalink($result->ID).'">'.$post_title.'</a></div>';
				echo '</div></div>';
				
            }
			?>
        </div>
        <div class="view-all-btn"><a href="/news">All News ></a></div>
	</div>
</div>
</section>

<section class="home-new-collection">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<div class="section-title"><h2>New Collection</h2></div>
		<div class="section-contents">contents goes here.
        	<div class="view-all-btn"><a href="/news">All News ></a></div>
        </div>
	</div>
</div>
</section>

<section class="home-collections">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<div class="section-title"><h2>Collections</h2></div>
		<div class="section-contents">contents goes here.
        	<div class="view-all-btn"><a href="/news">All News ></a></div>
        </div>
	</div>
</div>
</section>

<section class="home-find-store">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<div class="section-title">
       	  <a href="#">
          	<div class="find-store-btn"><h2>Find a EGG Store</h2></div>
          	<img class="find-store-arrow" src="<?=get_stylesheet_directory_uri()?>/assets/img/arrow-right-brown.png"  />
          </a>
        </div>
		
	</div>
</div>
</section>