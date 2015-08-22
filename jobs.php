<?php
$TITLE = "Devzila";
include_once("include/header.php");
?>
<div class="container">

      <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Let's Keep In Touch!</h1>
                <p class="tagline">Thank you for visiting out little slice of the internet. If you would like to get into contact with our team simply fill out the nifty form below. Click send. Let's talk.</p>  
            </div><!--end jumbotron -->
        </div>
        <div class="col-md-9">
         
         <!-- generic contact form -->   
		<?php include("include/_contact.php");?>           
            
        </div><!-- end left -->

        <div class="col-md-3">
			<?php include("include/_contact.php");?>
			<?php include("include/_related.php");?>
        </div><!--end right --> 
     
      </div><!--end row -->
</div>


<?php
include_once("include/footer.php");
?>

