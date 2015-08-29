<div class="panel panel-default">
  <div class="panel-body">

<div class="sidebar-section newto">
    <h2 class="newto-title">Recent <strong>Posts</strong></h2>
    
    <?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ):
	?>   
    
	<article class="dots-h">
    	 <div class="holder">        
    	 	<header>            
    	 		<h3><a href="<?php echo BLOG_BASE_URL . $recent["post_name"] ?>"><?php echo $recent["post_title"] ?></a></h3>        
    	 	</header>        
    	 	<p class="newto-description"><?php echo $recent["post_excerpt"] ?><a class="moretext" href="<?php echo BLOG_BASE_URL . $recent["post_name"] ?>"> more</a></p>    
    	 </div>   
    </article>
	<?php endforeach;?>


</div>



  </div>
</div>    
 