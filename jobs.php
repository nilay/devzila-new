<?php
require_once("config.php");
$args = array( 'numberposts' => 10, 'category_name' => 'jobs' );
$posts = get_posts( $args );


$TITLE = "Jobs | Devzila";
include_once("include/header.php");
?>
<div class="container">

      <div class="row">


        <div class="col-md-8">

        <div class="jumbotron">
            <h1>We are hiring!</h1>
            <p class="tagline">YOU CAN'T TEACH EMPLOYEES TO SMILE. THEY HAVE TO SMILE BEFORE YOU HIRE THEM - ARTE NATHAN</p>  
        </div><!--end jumbotron -->

         
         <!-- generic contact form -->   
		<?php foreach( $posts as $post ): setup_postdata($post);?>
    		<h2> <a href="<?php echo BLOG_BASE_URL . $post->post_name;?>"><?php echo the_title() ?> </a></h2>
    		<div> <?php the_excerpt() ?> </div>
    		<hr>
		<?php endforeach; ?>           
            
        </div><!-- end left -->

        <div class="col-md-4">
			<?php include("include/_contact.php");?>
			<?php include("include/_related.php");?>
        </div><!--end right --> 
     
      </div><!--end row -->
</div>


<?php
include_once("include/footer.php");
?>

