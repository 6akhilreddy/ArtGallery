	<?php
include("Admin/config.php");

if(isset($_POST['but_upload'])){

 $fname = $con->real_escape_string($_POST['fname']);
 $name = $con->real_escape_string($_POST['name']);
 $email = $con->real_escape_string($_POST['email']);
 $num = $con->real_escape_string($_POST['num']);
 $addr = $con->real_escape_string($_POST['addr']);
 $qua = $con->real_escape_string($_POST['qua']);
 
 $cost = $con->real_escape_string($_POST['cost']);
 $total = $qua * $cost;
 
 $query = "insert into trans(fname,name,email,number,address,quantity,total) values('".$fname."','".$name."','".$email."','".$num."','".$addr."','".$qua."','".$total."')";

  mysqli_query($con,$query);

	header("location: bank.php?total=$total");


}




?>
