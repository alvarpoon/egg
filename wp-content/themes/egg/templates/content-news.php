<div id="news-page">

<? get_template_part('templates/page-header'); ?>

<div class="container">
    
		<?=get_template_part('partials/_page_title'); ?>
        <?=apply_filters('the_content',$post->post_content);?>


          <?
	    	$args= array(
			    'post_type' 		=> 'post',
			    'post_status' 		=> 'publish',
			    'orderby'			=> 'date',
			    'order' 			=> 'DESC',
			    'numberposts' 		=> -1,
			    'suppress_filters' 	=> 0
			  );
	    	$results = get_posts( $args );
	    	foreach( $results as $result ){
	    		$url = wp_get_attachment_url( get_post_thumbnail_id($result->ID, 'thumbnail',array('class'=> "img-responsive")) );
				$post_title = get_the_title( $result->ID );
		?>
            
            <div class="row">
            <div class="col-sm-10 col-sm-push-1">
				<div class="row news-container">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-content-container">
						<div class="post-img"><img src="<? echo $url; ?>" /></div>
                    </div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-content-container">
                        <div class="post-title"><h4><? echo $post_title; ?></h4></div>
                        
                        
                        <? if( !get_field("introduction",$result->ID) ): ?>
                            <div class="news-content-container">
                                <?=apply_filters('the_content', $result->post_content); ?>
                            </div>
                        <?php else : ?>
                        	<div class="have-excerpt">
                                <div class="news-excerpt-container">
                                    <?=apply_filters('the_content', get_field("introduction",$result->ID)); ?>
                                </div>
                                <div class="news-content-container">
                                    <?=apply_filters('the_content', $result->post_content); ?>
                                </div>
                                <div class="expend-btn "></div>
                            </div>
                        <?php endif; ?>
                        
                	</div>
                </div>
             </div>
             </div>
        <?
			}
		?>
            
            
    
</div>

</div>