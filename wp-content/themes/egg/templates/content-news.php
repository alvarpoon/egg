<div id="news-page">

<div class="page-head-container">
	<? $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>
	<img src="<? echo $url ?>" />
    <div class="page-title"><h2>News</h2></div>
</div>

<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-container">
		<?=get_template_part('partials/_page_title'); ?>
        <?=apply_filters('the_content',$post->post_content);?>
	      testing
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-container">
		<?=get_template_part('partials/_page_title'); ?>
        <?=apply_filters('the_content',$post->post_content);?>
	      testing
    </div>
</div>

</div>