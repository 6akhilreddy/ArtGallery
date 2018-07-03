<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:  #64DDBB">

<div class="container">
  <h2>Upload Arts</h2><br/><br/>
  <form action="upload.php" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="name">Art Name:</label>
      <input type="text " class="form-control" id="aname" placeholder="Enter Art Name" name="aname">
    </div>
    <div class="form-group">
      <label for="pname">Painted By:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter Painter Name" name="pname">
    </div>

    <div class="form-group">
      <label for="cost">Art Cost:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Art Cost" name="cost">
    </div>


    <div class="form-group">
      <label for="cost">Art Size:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Art Size" name="size">
    </div>


    <div class="form-group">
      <label for="cost">Art Details:</label>
      <Textarea class="form-control" id="cost" placeholder="Enter Art Details" name="desc"></Textarea>

    </div>

    <div class="form-group">
      <label for="pwd">Upload Art</label>
      <input type='file' name='file' />
    </div>

    <button type="submit" class="btn btn-default" name='but_upload'>Submit</button>
  </form>
</div>

</body>
</html>
