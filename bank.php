<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body style="background-color:  #2c3e50">
    <center><font color=white size="10">Furniture</font></center>
    <div style=" position: absolute;
  width: 500px;
  height: 400px;
  z-index: 15;
  top: 35%;
  left: 45%;
  margin: -100px 0 0 -150px;
  background:  #64DDBB;">

  <div class="wrapper">
        <h2>Payement</h2>
        <p>Please fill in your card details for payement.</p>
        <script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["Form"]["cno"].value;
        var b=document.forms["Form"]["cvv"].value;
        if (a==null || a=="",b==null || b=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
</script>
        <form action="uploadbank.php" method="post" name=Form onsubmit="return validateForm()">
            <div class="form-group">
            	<label>Total Amount</label>
            	<?php
            	$total  = $_GET['total'];
            	echo "<h1>$total</h1>";
            	?>
            </div>
            <div class="form-group ">
                <label>Card Number</label>
                <input type="text" name="cno" class="form-control" >
            </div>    
            <div class="form-group ">
                <label>CVV</label>
                <input type="password" name="cvv" class="form-control">
                </div>
            <div class="form-group">
            	<button type="submit" class="btn btn-default" name='but_upload'>Submit</button>
            	<button type="submit" class="btn btn-default" name='cancel'>Cancel</button>
            	
            </div>
           </form>
    </div>

</body>
</html>

