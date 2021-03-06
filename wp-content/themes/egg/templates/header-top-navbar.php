<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="javascript:;" class="menu-label hidden-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-collapse">menu</a>
    <?
      $is_eggstar = false;
      if(is_child_of(2872) || is_child_of(2878) || is_child_of(2880) || get_post_type()=='eggstar_product'){
        $is_eggstar = true;
      }
    ?>
      <a class="navbar-brand" href="<?=($is_eggstar?home_url().'/eggstar':home_url()); ?>/"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/<?=($is_eggstar?"logo-top-eggstar.png":"logo-top.png")?>"></a>
    </div>

    <div class="lang-switcher hidden-xs visible-sm visible-md visible-lg">
    <?
            $lang_arr = icl_get_languages('skip_missing=0&orderby=id&order=asc');
            $lang_len = sizeof($lang_arr);
            $i = 0;
            foreach( $lang_arr as $lang ){
              if ($lang['active'] == 0){
                if ($i == $lang_len - 1) {
                  $lang_class = "last";
                }
                else{
                  $lang_class = "";
                }
                echo '<a class="'.$lang_class.'" href="'.$lang['url'].'">'.$lang['tag'].'</a>';
              }
              $i++;
            }
      ?>
      </div>
  
	  <div class="nav-social hidden-xs">
		<a href="http://weibo.com/eggoptical" target="_blank"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
		</span></a>
        <a class="fancybox" rel="group" href="/wp-content/uploads/2015/07/qrcode_for_gh_80b589dedf95_430.jpg" ><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-wechat fa-stack-1x fa-inverse"></i>
		</span></a>
        <a href="https://www.facebook.com/EggOpticalBoutique" target="_blank"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		</span></a>
		<a href="https://www.instagram.com/eggopticalhk/" target="_blank"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
		</span></a>
		<a href="mailto:info@eggoptical.com "><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
		</span></a>
	  </div>
      
      
	  <div class="nav-container">
		<nav class="collapse navbar-collapse main-menu" role="navigation">
			<?php
				//Main menu
				if (has_nav_menu('primary_navigation') && !$is_eggstar){
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => -1));
				}
        else if (has_nav_menu('eggstar_navigation') && $is_eggstar){
          wp_nav_menu(array('theme_location' => 'eggstar_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => -1));
        }
			?>
		</nav>
		
		<nav class="collapse navbar-collapse  mobile-language-selector-wrapper" role="navigation">
		<?
            $lang_arr = icl_get_languages('skip_missing=0&orderby=id&order=asc');
            $lang_len = sizeof($lang_arr);
            $i = 0;
            foreach( $lang_arr as $lang ){
              if ($lang['active'] == 0){
                if ($i == $lang_len - 1) {
                  $lang_class = "last";
                }
                else{
                  $lang_class = "";
                }
                echo '<a class="'.$lang_class.'" href="'.$lang['url'].'">'.$lang['tag'].'</a>';
              }
              $i++;
            }
      ?>
      
		</nav>
		
	  </div>
      
      
  </div>
</header>
