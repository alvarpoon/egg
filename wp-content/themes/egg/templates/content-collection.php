<div id="collections-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
	<?=apply_filters('the_content', $post->post_content); ?>
</div>
</div>