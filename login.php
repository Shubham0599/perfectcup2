<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - About us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/mycss.css" rel="stylesheet">
    <!-- script jquery -->
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $("#login").click(function(){
            email=$("#email").val();
            password=$("#password").val();
            $.ajax({
                type: "POST",
                url: "pcheck.php",
                data:"email="+email+"&password="+password,
                success:function(html){
                    if(html=='true'){
                         
							  $("#err").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "blog.php";
                    }else if(html=='false'){
                        $("#err").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');	  
                    }else {
                        $("#err").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>'); 
                    }
                },
                beforeSend:function()
                {
                    $("#err").html("loading....");
                }
            });
            return false;
        });
    });
    </script>
</head>

<body>
    <?php require_once'nav.php'?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="alert alert-danger">
					<strong>You must be logged in to view the blog.</strong>
				    </div>
                    <hr>
                    <h2 class="text-center intro-text"><strong>Login</strong> Form</h2>
                    <hr>
                    <div id="err"></div>
                    <form role="form">
                        <div class="row">

                            <div class="col-lg-12 form-group">
                                <label>Email</label>
                                <input class="form-control" id="email" name="email" maxlength="25" type="email">
                            </div>

                            <div class="col-lg-12 form-group">
                                <label>Password</label>
                                <input class="form-control" id="password" name="password" maxlength="25"
                                    type="password">
                            </div>

                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-default">Login</button>
                            </div>

                        </div>
                    </form>
                    <div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
					</div>
                </div>
            </div>
        </div>
</div>
  <!-- footer -->
<?php require_once 'footer.php'; ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>