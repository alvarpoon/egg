<div class="container">
	<div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 content-container">
		<?=get_template_part('partials/_page_title'); ?>
        <?=apply_filters('the_content',$post->post_content);?>
	</div>
</div>