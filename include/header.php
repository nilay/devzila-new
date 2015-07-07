<?php
$PAGE = ltrim($_SERVER['REQUEST_URI'], '/');

print $PAGE;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title><?php echo $TITLE; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">  
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" ><img alt="LOGO" src="/images/logo-text.png" height="50"></a>
                </div>
                <div class="navbar-collapse collapse" id="navbar" style="max-height: 710px;">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="<?php echo $PAGE == '' ? 'active':'';?>"><a href="/">Home</a></li>
                        <li class="<?php echo $PAGE == 'about-us' ? 'active':'';?>"><a href="/about-us">About Us</a></li>
                        <li class="<?php echo $PAGE == 'services' ? 'active':'';?>"><a href="/services">Services</a></li>
                        <li class="<?php echo $PAGE == 'work' ? 'active':'';?>"><a href="/work">Work</a></li>
                        <li class="<?php echo substr($PAGE,0,4) == 'blog' ? 'active':'';?>"><a href="/blog">Blog</a></li>
                        <li class="<?php echo $PAGE == 'jobs' ? 'active':'';?>"><a href="/jobs">Jobs</a></li>
                        <li class="<?php echo $PAGE == 'contact' ? 'active':'';?>"><a href="/contact">Contact</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
      </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div style="margin-bottom: 130px;">
    </div>
