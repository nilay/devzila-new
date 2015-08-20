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
        <div class="col-md-6">
            
            <form role="form">
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="smt">What would you like to discuss?</label>
                <textarea class="form-control"></textarea>  
              </div>
              <button type="submit" class="btn btn-default">Send</button>
            </form> 
            
            
        </div><!-- end left -->

        <div class="col-md-6">
          <div class="well">
             <iframe width="100%" height="350" frameborder="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+city&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=60.867771,135.263672&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;z=11&amp;iwloc=A&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no"></iframe>
          </div><!--end well -->
        </div><!--end right --> 
     
      </div><!--end row -->
</div>



<?php
include_once("include/footer.php");
?>

