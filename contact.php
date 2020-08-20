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

    <script src="js/jquery.js"></script>
	
    <script type="text/javascript">
    $(document).ready(function () {

        $("#contact").click(function () {

            fname = $("#fname").val();
            email = $("#email").val();
            message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "fname=" + fname + "&email=" + email + "&message=" + message,
                success: function (html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                             <strong>Message Sent!</strong> \ \
                                             </div>');

                    } else if (html == 'fname_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'fname_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must exceed 2 characters. \ \
                                             </div>');
                                             
                    } else if (html == 'email_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'email_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must exceed 2 characters. \ \
                                             </div>');
                                             
                    } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> format incorrect. \ \
                                             </div>');
                                             
                    } else if (html == 'message_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must exceed 2 characters. \ \
                                             </div>');


                    } else {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Error</strong> processing request. Please try again. \ \
                                             </div>');
                    }
                },
                beforeSend: function () {
                    $("#add_err2").html("loading...");
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
                    <h2 class="intro-text text-center">Contact
                        <strong>The Perfect Cup</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14374.483272052343!2d93.16496478223095!3d25.750050188271146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3745838a512df9c1%3A0x86e6af847f0d3fc0!2sLumding%2C%20Assam%20782447!5e0!3m2!1sen!2sin!4v1595522443939!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-4">
                <p>Phone:<strong><a href="tel:+91-9988776655">+91-9988776655</a></strong>
                </p>
                <p>Email:<strong><a href="mailto:tenaciousanand01@gmail.com">abc@gmail.com</a></strong>
                </p>
                <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>Form</strong></h2>
                    <hr>
                
                <div id="add_err2"></div>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input type="text" id="fname" name="fname" maxlen="30" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email</label>
                            <input type="text" id="email" name="email" maxlen="30" class="form-control">
                        </div>
                            <div class="clearfix"></div>
                            <div class="form-group  col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group  col-lg-12">
                            <button type="submit"  id="contact" class="btn btn-default">Submit</button>
                            </div>
                    </div>

                </form>
            </div>
        </div>


    </div>

                </div>
 <!-- footer -->
<?php require_once 'footer.php'; ?>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>