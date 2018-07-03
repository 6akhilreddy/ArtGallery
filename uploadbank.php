<?php
include("Admin/config.php");

if(isset($_POST['cancel'])){

 
echo "<h1>payement unsucessfull</h1>";
echo"<center><h2><a href=index.php>Continue Shopping</a></h2></center>";


}


if(isset($_POST['but_upload'])){

 
echo "<h1>payement sucessfull</h1>";
echo"<center><h2><a href=index.php>Continue Shopping</a></h2></center>";


}





?>
