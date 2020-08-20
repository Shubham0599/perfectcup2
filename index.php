<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Cup</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/mycss.css" rel="stylesheet">

  <!-- Fonts -->
</head>

<body>

  <div class="brand">The Perfect Cup</div>
  <div class="address-bar">Grand Taj | George Hills, NO. 2345 | 123.456.7890</div>
  <?php

if (isset($_GET["logout"])) {

  if ($_GET["logout"] == "true") { ?>

    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>You have been logged out of the system.</strong>
    </div>

<?php
  }
}
?>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html" class="navbar-brand"> The Perfect Cup</a>
      </div>
      <div class="collapse navbar-collapse" id="menu">
        <ul class=" nav navbar-nav">
        <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <div id="myframe" class="carousel slide">
            <ol class="carousel-indicators hidden-xs">
              <li data-target="myframe" data-slide-to="0" class="active"></li>
              <li data-target="myframe" data-slide-to="1"></li>
              <li data-target="myframe" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
              </div>
            </div>
            <a class="left carousel-control" href="#myframe" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myframe" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
          <h2 class="brand-before">
            <small>Welcome to</small>
          </h2>
          <h3 class="brand-name">The perfect cup</h3>
          <hr class="tagline-divider">
          <h2>
            <div class="brand-small">
              <small>By
                <strong>The perfect cups</strong>
              </small></div>
          </h2>
        </div>
      </div>
     </div>
     <div class="row">
         <div class="box">
             <div class="col-lg-12">
             <hr>
                    <h2 class="intro-text text-center">Build a website
                        <strong>worth visiting</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>


             </div>
         </div>
     </div>

  </div>
<!-- footer -->
<?php require_once 'footer.php'; ?>


  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Script to Activate the Carousel -->
  <script>
    $('.carousel').carousel({
      interval: 5000 //changes the speed
    })
  </script>

</body>

</html>
