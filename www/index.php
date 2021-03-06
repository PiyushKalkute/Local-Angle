<?php
	$conn = mysqli_connect('localhost','aditi','root123','local_angle');
	if($conn->connect_error){
		echo 'Connection error' . mysqli_connect_error();
	}
	
?> 
<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Local Angle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style> 
	#b1, #b2 {
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 16px 32px;
	text-decoration: none;
	margin: 4px 2px;
	cursor: pointer;
	}

	#card1{
		position:absolute;
		left: 300px; 
	}
	#card2{
	
		left: 650px; 
	}
</style>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Local Angle</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About Local Angle</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/newspaper.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Local Angle</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
				<!--<span>Experience</span> . <span>Innovation</span> . <span>Excellence</span>-->
				Bringing to you the news you want
            </h1>
			<!--<p><a href="#" class="btn btn-primary py-3 px-4">Search →</a></p>-->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-secondary">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Hey there!</span>
            <h2 class="mb-4">Are you looking for news related to</h2>
          </div>
        </div>
        <div class="row">
				<div id="card1" class="col-lg-3 col-sm-6">
						<div class="block-2 ftco-animate">
						<div class="flipper">
						  <div class="front" style="background-image: url('images/chicago.jpg');">
							<div class="box">
							  <h2>Your city?</h2>
							</div>
						  </div>
						  <div class="back" align="center" style="background-image: url('images/chicago3.jpg');">
							<!-- back content -->
							<form method = "POST">
							<br/>
							<br/>
								<input type="text" placeholder="Search city.." id="city" name="city" size=12>
							  <br/>
							  <br/>
							 
							  
							  <form action="localhost/index.php#piyush">
							  <input id="b1" type="submit" name="search1" value="Search" />
							
							<?php
								if(isset($_POST['search1']))
								{
									$selected_val = $_POST['city'];
									$query = "SELECT DISTINCT * from links where LINK IN  (Select link from alumna where NAME IN( SELECT Name FROM geo_tags where BIRTHPLACE = \"$selected_val\" OR  BIRTHPLACE like \"%$selected_val%\") AND NAME NOT IN (SELECT NAME FROM alumna GROUP BY name HAVING COUNT(*) > 5))";
									
								}
							?>
							<br/>
						  </div>
						</div>
					  </div>
					</div>
    
        	<div id="card2" class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url('images/weber_arch4.jpg');">
	                <div class="box">
	                  <h2>Your school?</h2>
	                </div>
	              </div>
	              <div class="back" align="center" style="background-image: url('images/weber_arch6.jpg');">
	                <!-- back content -->
						<form method = "POST">
							<br/>
							<br/>
							<input type="text" placeholder="Search school.." id="school" name="school" size=12>
							  <br/>
							  <br/>
							  
							  <form action="localhost/index.php#piyush">
							  <input id="b2" type="submit" name="search2" value="Search" />
							</form>
							</form>
							</div>
						<?php
								
								if(isset($_POST['search2']))
								{
									$selected_val = $_POST['school'];
									$query = "SELECT DISTINCT * from links where LINK IN  (Select link from alumna where NAME IN( SELECT Name FROM alum_tags where UNIVERSITY = \"$selected_val\" OR  UNIVERSITY like \"%$selected_val%\") AND NAME NOT IN (SELECT NAME FROM alumna GROUP BY name HAVING COUNT(*) > 5))";
								}	
						?>
					<br/>
			
				  </div>
	            </div>
	          </div>
        	</div>
			
	
		
    </section>

	<p id="piyush">
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News</span>
			<h2>
			<?php
				if(isset($selected_val)){
					echo "This might be of interest to you!\n";
					echo "You have selected: " .$selected_val;
				}
				else{
					echo "Please select a city or a school.";
				} ?>
			</h2>
          </div>
        </div>
        <div class="row d-flex">
         
		  <?php 
		    
		  	if(isset($selected_val )){
					if ($stmt = $conn->prepare($query)) {
								$stmt->execute();
								$stmt->bind_result($link,$title,$published_time,$image);
								while ($stmt->fetch()) {
												?>
									
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url(<?php printf("%s\n", $image)?>);">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="two pl-0 pr-3 py-2 align-self-stretch" align="right">
              			<span class="mos"><?php printf("%s\n", $published_time); ?></span>
              		</div>
				  </div>
				<h3 class="heading mt-2"><a href="<?php 
				printf("%s\n", $link)?>"><?php printf("%s\n", $title); ?></a></h3>
				
              </div>
            </div>
          </div>
		  <?php
		 }
		 $stmt->close();
		}}
		?>
          
    </section>
	</p>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>