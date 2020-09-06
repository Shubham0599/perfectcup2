<?php
session_start();
include("dbcon.php");
//$con=new mysqli('localhost','root','','perfect_cup');

// if($con->connect_error){
//     die()
// }
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con, $_POST['lname']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);

if(strlen($fname)<2){
    echo 'fname';
}elseif(strlen($lname)<2){
    echo 'lname';
}elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($password) <= 4) {
    echo 'pshort';
}else{
    $spassword=password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));
    $query = "SELECT * FROM member WHERE email='$email'";
	$result = mysqli_query($con, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

		if ($num_row < 1) {

			$insert_row = $con->query("INSERT INTO member (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $con->insert_id;
				$_SESSION['fname'] = $fname;
				$_SESSION['lname'] = $lname;

                echo 'true';
            }
        }else{
            echo'false';
        }
}

?>
