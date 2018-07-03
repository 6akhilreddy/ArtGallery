
<!DOCTYPE HTML>
<html>
<head>
<title>Art Gallery</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="current"><a href="shop.php">Shop</a></li>
						  	<li><a href="contact.html">Contact</a></li>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>
	    		    <div class="clear"></div>
	    	    </div>
	             <div class="header_right">
				    <a href=logout.php><font color=white>LOGOUT</font></a>
		           <div class="clear"></div>
	       </div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class=row class=shop_box-top>

	<?php
					include("Admin/config.php");
					$sql = "select * from images  ";
		 			$result = mysqli_query($con,$sql);
		 			
		 			
		 				while($row = mysqli_fetch_assoc($result))
				{
						$IDstore = $row['image'];
						$Name = $row['aname'];
						$Pname = $row['pname'];
						$id = $row['id'];
						$Cost = $row['cost'];
						
						echo "<div class=col-md-4 class=shop_box><a href=single.php?id='".$id."'> <img src='".$IDstore."' height=200 width=360/> <div class=shop_desc> <h3>Art Name : ".$Name."</h3> <p>Artist Name :".$Pname."</p> <span class=actual>Cost :".$Cost."</span><br> </div> </a></div>";
					
				}																	
												?>




				


				
			</div>
		 </div>
	   </div>
	  </div>

</body>
</html>
