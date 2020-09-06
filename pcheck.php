<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

//$con= new mysqli('localhost','root','','perfect_cup');
include("dbcon.php");
if($con==false){
die('connection error');
}
$query="SELECT *FROM member WHERE email='$email'";
$run=mysqli_query($con,$query);
$row_num=mysqli_num_rows($run);
$row=mysqli_fetch_array($run);
if($row_num>=1){
    if(password_verify($password,$row['password'])) {
        $_SESSION['login']=$row['id'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
        echo 'true';
    }
    else{
        echo 'false';
    }
}else {
    echo 'false';
}

?>
