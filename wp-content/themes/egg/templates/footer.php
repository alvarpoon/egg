<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
	  	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 footer_link_container">
	    <?
		    $id = array('en'=>4,'zh-hant'=>33,'zh-hans'=>35);
	   	 if (has_nav_menu('footer_navigation')){
	   	 	wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => -1));
	   	 } 
	    ?>
	    	<p class="copyright"><?=get_field("footer_copyright_text",$id[ICL_LANGUAGE_CODE])?></p>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
		
		<div class="nav-social">
			<a href="http://weibo.com/eggoptical" target="_blank"><span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#" target="_blank"><span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-wechat fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="https://www.facebook.com/EggOpticalBoutique" target="_blank"><span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="http://www.instagram.com/eggoptical" target="_blank"><span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="mailto:info@eggoptical.com "><span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
            </span></a>
		  </div>
	  </div>
	  
	</div>
  </div>
</footer>
<?php wp_footer(); ?>