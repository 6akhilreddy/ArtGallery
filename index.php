<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
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
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
						<h3><font color=white>Art Gallery</font></h3>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.php">Shop</a></li>
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
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
               <img src="images/art1.jpeg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 ><b><font color=black>Creativity takes<br>Courage</h1></font>
                        <!-- /Text title -->
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/art2.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1><b><font color=white>An Art is a Poem<br>Without Words</h1></font>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>Art Gallery</h2>
			
			<div class="close_but"><i class="close1"> </i></div>
				<ul id="flexiselDemo3">
				<?php
				include("Admin/config.php");
				   $sql = "select * from images";
				   $result = mysqli_query($con,$sql);

				while($row = mysqli_fetch_assoc($result))
				{
						$IDstore = $row['image'];
						echo "<li><img src='".$IDstore."' width=100% height=200/></li>";

				}
?>

			</ul>



		<h3>Arts Extreme Series</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });

		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="content-bottom" >
		<div class="container" >
			<div class="row content_bottom-text">
			  <div class="col-md-7">
				<h3>About<br>Art Gallery</h3>
				<p class="m_1">Mahua Art Gallery is the leading contemporary art gallery in India. Founded in 2002 by Meenu Jaipuria, Mahua Art Gallery represents remarkable contemporary Indian artists and especially encourages young emerging talent all across the country. </p>
				<p class="m_2">With a rich history of art collection and appreciation, Mahua Art Gallery was initiated by Meenu to continue the tradition of fostering creativity of young Indian artists and generating art awareness. Her father,  Dr. H.K. Kejriwal, founding member of Chitrakala Parishad, had been a prominent collector of eclectic and rare art and donated a large part of his personal collection which is on permanent display at the H.K.Kejriwal Museum in Chitrakala Parishad, Bangalore.</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="features">
		<div class="container">
			<h3 class="m_3">Latest Arts</h3>
			<div class="close_but"><i class="close1"> </i></div>
			  <div class="row">
				

	<?php
					include("Admin/config.php");
					$sql = "select * from images where id > 4 ";
		 			$result = mysqli_query($con,$sql);
		 			
		 			
		 				while($row = mysqli_fetch_assoc($result))
				{
						$IDstore = $row['image'];
						$Name = $row['aname'];
						$Pname = $row['pname'];
						$id = $row['id'];
						
						echo "<div class=col-md-3 class=top_box> <div class=view class=view-ninth><a href=single.php?id='".$id."'> <img src='".$IDstore."' height=200 width=300/> </a> </div> <h4 class=m_4>".$Name."</a></h4> <p class=m_5>".$Pname."</p> </div>";

					
				}																	
												?>
				</div></div>

 				
			</div>
		 </div>
	    </div>

</body>
</html>
