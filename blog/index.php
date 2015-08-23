<?php 
require_once("../config.php");
define('WP_USE_THEMES', false);

// include wordpress
require CMS_PATH . 'wp-blog-header.php';

// collect posts directly without using API
$query = new \WP_Query(array(
    'posts_per_page' => 20,
    'order' => 'ASC',
    'orderby' => 'post_title',
));
$posts = $query->get_posts();


// collect posts using API
//$articleSlug = @ $_REQUEST['path'] ? $_REQUEST['path'] : "hello-world";
//$cmsContent = file_get_contents(CMS_API_URL . '/?json=get_post&post_slug=' . $articleSlug);
//$cmsContentDecoded = json_decode($cmsContent);


$TITLE = $cmsContentDecoded->post->title . " | Devzila";
include_once("../include/header.php");
?>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">

<h1><?php print $posts[0]->post_title;//print $cmsContentDecoded->post->title; ?></h1>
      
<?php //print $cmsContentDecoded->post->content; ?>
          
  </div>
</div>
<?php
include_once("../include/footer.php");
?>