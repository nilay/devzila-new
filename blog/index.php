<?php 
require_once("../config.php");
define('WP_USE_THEMES', false);
$articleSlug = @ $_REQUEST['path'] ? $_REQUEST['path'] : "hello-world";

// include wordpress
require CMS_PATH . 'wp-blog-header.php';

// collect posts directly without using API
$query = new \WP_Query("name=$articleSlug");
$post = $query->get_post();


// collect posts using API
//$articleSlug = @ $_REQUEST['path'] ? $_REQUEST['path'] : "hello-world";
//$cmsContent = file_get_contents(CMS_API_URL . '/?json=get_post&post_slug=' . $articleSlug);
//$cmsContentDecoded = json_decode($cmsContent);


$TITLE = $post->post_title . " | Devzila";
include_once("../include/header.php");
?>

<div class="container">

      <div class="row">
        <div class="col-md-8">
         	<h2><?php print $post->post_title; ?></h2>
            <?php print $post->post_content; ?>        
            
        </div><!-- end left -->

        <div class="col-md-4">
			<?php include("../include/_contact.php");?>
			<?php include("../include/_related.php");?>
        </div><!--end right --> 
     
      </div><!--end row -->
</div>
<?php
include_once("../include/footer.php");
?>