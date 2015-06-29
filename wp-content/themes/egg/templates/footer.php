<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
	  	<div class="col-xs-12 col-sm-6 col-sm-push-6 col-md-6 col-md-push-6 col-lg-4 col-lg-push-8 footer_link_container">
	    <?
		    $id = array('en'=>4,'zh-hant'=>33,'zh-hans'=>35);
	   	 if (has_nav_menu('footer_navigation')){
	   	 	wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => -1));
	   	 } 
	    ?>
	    	<p class="copyright"><?=get_field("footer_copyright_text",$id[ICL_LANGUAGE_CODE])?></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6 col-lg-8 col-lg-pull-4">
			
		</div>
	</div>
  </div>
</footer>
<?php wp_footer(); ?>