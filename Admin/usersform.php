<?php
include("config.php");

if(isset($_POST['but_upload'])){

 $fname = $con->real_escape_string($_POST['fname']);
 $lname = $con->real_escape_string($_POST['lname']);
 $email = $con->real_escape_string($_POST['email']);
 $pass = $con->real_escape_string($_POST['password']);

  $query = "insert into users(fname,lname,email,password) values('".$fname."','".$lname."','".$email."','".$pass."')";
  mysqli_query($con,$query);

 }



echo "<h1>uploaded sucessfully</h1>";



?>
