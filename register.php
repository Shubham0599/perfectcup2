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
        $("#register").click(function(){
            fname=$("#fname").val();
            lname=$("#lname").val();
            email=$("#email").val();
            password=$("#password").val();

            $.ajax({
                type:"POST",
                url:"adduser.php",
                data:"fname=" + fname +"&lname="+lname+"&email="+email + "&password=" + password,
                success: function(html){
                    if(html=='true'){
                        $("#add").html('<div class="alert alert-success"><strong>Account</strong> processed.</div>');
                        window.location.href="index.php";
                    }
                    else if(html=='false'){
                        $("#add").html('<div class="alert alert-danger"><strong>Email address </strong> allready in system.</div>')
                    } else if (html == 'fname') {
                            $("#add").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');

						} else if (html == 'lname') {
                            $("#add").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');

						} else if (html == 'pshort') {
                            $("#add").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        }else{
                            $("#add").html('<div class="alert alert-danger"><strong>Error</strong> processing ')
                        }
                },
                beforeSend:function(){
                    $("#add").html("loading....");
                }
            });
            return false;
        });
    });


   </script>

</head>

<body>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration
                        <strong>form</strong>
                    </h2>

                    <hr>
                    <div id="add"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="register" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
 <!-- footer -->
<?php require_once 'footer.php'; ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <body>
    </html>
