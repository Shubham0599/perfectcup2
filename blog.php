<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/mycss.css" rel="stylesheet">

  
      

</head>

<body>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcome <?php echo $fname; ?><small class="logout"> <a class="" href="logout.php">Logout</a></small></h2>
                <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full"  src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOBER 13, 2016</small>
                    </h2>   
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-lg  btn-warning" data-toggle="modal" data-target="#mod1">Read More</button>     
                <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <img src="img/slide-2.jpg" alt="" class="img-responsive img-full">
                    <h2>IRISH COFFEE
                        <br>
                        <small>SEPTEMBER, 2014</small>
                    </h2>
                        <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#mod2">Read more</button>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>JULY 18, 2012</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#mod3">Read More</button>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <!-- mod1 -->
    <div id="mod1" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
    </div>
    <!-- mod2 -->
    <div id="mod2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close"  type="button">&times;</button>
                    <h4 class="modal-title">Irish Coffee</h4>
                </div>
                <div class="modal-body">
                    <p>Sample tag</p>
                </div>
                <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- mod3 -->
    <div id="mod3" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
    </div>
<!-- footer -->
<?php require_once 'footer.php'; ?>


    <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}else{
    header("location:login.php");
}
?>