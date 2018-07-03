
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
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
	    		  <!-- start search-->
				    
				 <a href=logout.php><font color=white>LOGOUT</font></a>
		           
				    
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				
				<?php
					include("Admin/config.php");
					$id = $_GET['id'];
					$sql = "select * from images where id=$id ";
		 			$result = mysqli_query($con,$sql);
		 			
		 			
		 				while($row = mysqli_fetch_assoc($result))
				{
						$IDstore = $row['image'];
						$Name = $row['aname'];
						$Pname = $row['pname'];
						$Cost = $row['cost'];
						$Size = $row['size'];
						$Desc = $row['details'];
						
						echo "<div class=col-md-9 class=single_left> <div class=single_image> <ul id=etalage> <li> <img class=etalage_source_image src='".$IDstore."' /> </a> </li> </ul> </div> <div class=single_right> <h3>Art Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$Name."</h3><h3> Artist Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$Pname."</h3><h3>Size:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$Size."</h3><h4>Description:</h4> <p class=m_10>'".$Desc."'</p> </div><div class=clear> </div> </div> <div class=col-md-3> <div class=box-info-product> <p class=price2>RS.".$Cost."</p> <a class=exclusive href=buy.php?name='".$Name."'&cost=".$Cost."> <span>BUY</span> </a> </div> </div>";
					
				}																	
												?>



				

				  </div>
				
	     </div>
	   </div>
	  </div>
	  
</body>	
</html>