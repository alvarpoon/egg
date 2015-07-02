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
		<h2>News</h2>
		<div class="section-contents"><p>contents goes here.</p></div>
	</div>
</div>
</section>

<section class="home-new-collection">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<h2>New Collection</h2>
		<div class="section-contents">contents goes here.</div>
	</div>
</div>
</section>

<section class="home-collections">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<h2>Collections</h2>
		<div class="section-contents">contents goes here.</div>
	</div>
</div>
</section>

<section class="home-find-store">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionIntro">
		<h2>Find a EGG Store</h2>
		
	</div>
</div>
</section>