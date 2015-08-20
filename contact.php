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
              <iframe width="100%" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109779.95612093745!2d76.85480699999992!3d30.700864000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDQyJzAzLjEiTiA3NsKwNTEnMTcuMyJF!5e0!3m2!1sen!2sin!4v1440094143672" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>          </div><!--end well -->
        </div><!--end right --> 
     
      </div><!--end row -->
</div>



<?php
include_once("include/footer.php");
?>

