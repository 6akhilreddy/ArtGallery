<!DOCTYPE html>
<html lang="en">
<head>
  <title>Art-Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f1c40f ;">

<div class="container">
  <h2>BUY Arts</h2><br/><br/>
    <script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["Form"]["email"].value;
        var b=document.forms["Form"]["num"].value;
        var c=document.forms["Form"]["addr"].value;
        var d=document.forms["Form"]["qua"].value;
        var e=document.forms["Form"]["name"].value;
        if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="",e==null || e=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
  </script>

  <form action="uploadbuy.php" method="post" name=Form onsubmit="return validateForm()">
    <div class="form-group">
      <label for="name">Art Name:</label>
      <?php
      $Name =$_GET['name'];
      echo "<h3><font color=white>$Name</h3></font>";
      echo "<input type=text class=form-control id=pname name=fname value=$Name readonly=readonly>";
      ?>
    </div>
    <div class="form-group">
      <label for="name">Art Cost:</label>
      <?php
      $Cost =$_GET['cost'];
      echo "<input type=text class=form-control id=pname name=cost value=$Cost readonly=readonly>";
      ?>
    </div>
    <div class="form-group">
      <label for="pname">Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter your name" name="name">
    </div>

    <div class="form-group">
      <label for="cost">Email:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter  your Email Address" name="email">
    </div>
    <div class="form-group">
      <label for="cost">Number:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter your Number" name="num">
    </div>
    
    <div class="form-group">
      <label for="cost">Address:</label>
      <Textarea class="form-control" id="cost" placeholder="Enter your Address" name="addr"></Textarea>
    </div>
    
    <div class="form-group">
      <label for="cost">Quantity:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter number of items" name="qua">
    </div>
    

    <button type="submit" class="btn btn-default" name='but_upload'>Submit</button>
  </form>
</div>

</body>
</html>
