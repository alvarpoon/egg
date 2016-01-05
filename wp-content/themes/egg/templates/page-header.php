<?
	if(is_page()){
		
			$url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
		
?>
	<div class="page-head-container">
		<? if ( $url) { ?>
			<img class="img-responsive" src="<? echo $url ?>" />
		<? } else { ?>
			<div class="no-featured-img	"></div>
		<? } ?>
		<?
		$template_name = get_post_meta( $post->ID, '_wp_page_template', true );
		if ($template_name!='template-promo.php'){?>
		<div class="page-title"><h2><?=roots_title(); ?></h2></div>
		<? } ?>
	</div>
<?
	}
	/*else if(is_tax()){
	//if it's a collection page
		global $wp_query;
	    $term = $wp_query->get_queried_object();
	    $title = $term->name;*/
?>
	<!-- <div class="collection-head-container">
		<a href="/collections">< Back to all collections</a>
		<div class="page-title"><h2><?=$title; ?></h2></div>
	</div> -->
<?
	//}
?>
    
