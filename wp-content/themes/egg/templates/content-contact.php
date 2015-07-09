<div id="contact-page">

<? get_template_part('templates/page-header'); ?>

<div class="container ">
	<div class="row">
            <div class="col-md-push-1 col-md-10 col-lg-10 col-lg-push-1">
				<?=apply_filters('the_content', $post->post_content); ?>
			</div>
	</div>
</div>



</div>