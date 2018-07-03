<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #64DDBB">

<div class="container">
  <h2>All Transactions</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Art_Name</th>
        <th>Username</th>
        <th>Email</th>

        <th>Number</th>
        <th>Address</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

<?php
          include("config.php");
        
          $sql = "select * from trans ";
          $result = mysqli_query($con,$sql);
          
          
            while($row = mysqli_fetch_assoc($result))
        {
            $Fname = $row['fname'];
            $Name = $row['name'];
            $Email = $row['email'];
            $Number = $row['number'];
            $Address = $row['address'];
            $Quantity = $row['quantity'];
            
            echo "<tr>";
            echo "<td>".$Fname."</td>";
            echo "<td>".$Name."</td>";
            echo "<td>".$Email."</td>";
            echo "<td>".$Number."</td>";
            echo "<td>".$Address."</td>";
            echo "<td>".$Quantity."</td>";
            echo "<tr>";
          
        }                                 
                        ?>
          

    </tbody>
  </table>
</div>

</body>
</html>
