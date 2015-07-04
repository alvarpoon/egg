<div class="page-head-container">
	<? $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>
	<img class="img-responsive" src="<? echo $url ?>" />
    <div class="page-title"><h2><?=roots_title(); ?></h2></div>
</div>