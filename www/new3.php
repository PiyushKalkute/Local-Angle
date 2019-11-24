<?php

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "  <head>\n";
echo "    <title>Local Angle</title>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n";
echo "    \n";
echo "    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">\n";
echo "    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i\" rel=\"stylesheet\">\n";
echo "\n";
echo "    <link rel=\"stylesheet\" href=\"css/open-iconic-bootstrap.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/animate.css\">\n";
echo "    \n";
echo "    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">\n";
echo "\n";
echo "    <link rel=\"stylesheet\" href=\"css/aos.css\">\n";
echo "\n";
echo "    <link rel=\"stylesheet\" href=\"css/ionicons.min.css\">\n";
echo "\n";
echo "    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/jquery.timepicker.css\">\n";
echo "\n";
echo "    \n";
echo "    <link rel=\"stylesheet\" href=\"css/flaticon.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/icomoon.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/style.css\">\n";
echo "  </head>\n";
echo "  <body>\n";
echo "    \n";
echo "	  <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">\n";
echo "	    <div class=\"container\">\n";
echo "	      <a class=\"navbar-brand\" href=\"index.html\">Local Angle</a>\n";
echo "	      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n";
echo "	        <span class=\"oi oi-menu\"></span> Menu\n";
echo "	      </button>\n";
echo "\n";
echo "	      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">\n";
echo "	        <ul class=\"navbar-nav ml-auto\">\n";
echo "	          <li class=\"nav-item active\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>\n";
echo "	          <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About Local Angle</a></li>\n";
echo "	          <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>\n";
echo "	        </ul>\n";
echo "	      </div>\n";
echo "	    </div>\n";
echo "	  </nav>\n";
echo "    <!-- END nav -->\n";
echo "    \n";
echo "    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('images/newspaper.jpg');\" data-stellar-background-ratio=\"0.5\">\n";
echo "      <div class=\"overlay\"></div>\n";
echo "      <div class=\"container\">\n";
echo "        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">\n";
echo "          <div class=\"col-md-10 text-center ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">\n";
echo "          	<h2 class=\"subheading\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Local Angle</h2>\n";
echo "            <h1 class=\"mb-4\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">\n";
echo "				<!--<span>Experience</span> . <span>Innovation</span> . <span>Excellence</span>-->\n";
echo "				Bringing to you the news you want\n";
echo "            </h1>\n";
echo "			<!--<p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search →</a></p>-->\n";
echo "          </div>\n";
echo "        </div>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "\n";
echo "    <section class=\"ftco-section bg-secondary\">\n";
echo "    	<div class=\"container-fluid\">\n";
echo "    		<div class=\"row justify-content-center mb-5 pb-3\">\n";
echo "          <div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">\n";
echo "          	<span class=\"subheading\">Hey there!</span>\n";
echo "            <h2 class=\"mb-4\">Are you looking for news related to</h2>\n";
echo "			<?php\n";
echo "		//include('testmysql.php');\n";
echo "		$dbcon = mysqli_connect('localhost', 'root', 'root@123', 'sakila');\n";
echo "		if (mysqli_connect_errno())\n";
echo "		{\n";
echo "			echo \"Failed to connect to MySQL: \" . mysqli_connect_error();\n";
echo "		}\n";
echo "		echo \"Connected\";\n";
echo "		$result = mysqli_query($dbcon, \"SELECT distinct * from links where\n";
echo "										LINK IN \n";
echo "										(Select link from alumna where\n";
echo "										NAME IN(\n";
echo "										SELECT Name FROM geo_tags\n";
echo "										where BIRTHPLACE = \"Maryland\" OR BIRTHPLACE like \"%New York%\"))\");\n";
echo "				\n";
echo "		\n";
echo "		$sqldata = mysqli_query($dbcon, $sqlget);\n";
echo "		while($row = mysqli_fetch_array($result){\n";
echo "				echo $row['link'];\n";
echo "				echo $row['title'];\n";
echo "				echo $row['time'];\n";
echo "		}\n";
echo "		\n";
echo "		mysqli_close($dbcon);\n";
echo "		\n";
echo "	?>\n";
echo "	\n";
echo "          </div>\n";
echo "        </div>\n";
echo "        <div class=\"row\">\n";
echo "				<div class=\"col-lg-3 col-sm-6\">\n";
echo "						<div class=\"block-2 ftco-animate\">\n";
echo "						<div class=\"flipper\">\n";
echo "						  <div class=\"front\" style=\"background-color: green;\">\n";
echo "							<div class=\"box\">\n";
echo "							  <h2>Your city?</h2>\n";
echo "							</div>\n";
echo "						  </div>\n";
echo "						  <div class=\"back\" align=\"center\">\n";
echo "							<!-- back content -->\n";
echo "							<form>\n";
echo "							<br/>\n";
echo "							<br/>\n";
echo "							  <select>\n";
echo "								<option value=\"1\">New York</option>\n";
echo "								<option value=\"2\">Chicago</option>\n";
echo "								<option value=\"3\">Maryland</option>\n";
echo "							  </select>\n";
echo "							  <br/>\n";
echo "							  <br/>\n";
echo "							  <input type=\"hidden\" name=\"selected_text\" id=\"selected_text\" value=\"\" />\n";
echo "							  <input type=\"submit\" class=\"btn btn-primary py-3 px-4 name=\"search1\" value=\"Search\"/>\n";
echo "							</form>\n";
echo "\n";
echo "							<br/>\n";
echo "							<!--<p align=\"center\"><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search →</a></p>-->\n";
echo "						  </div>\n";
echo "						</div>\n";
echo "					  </div>\n";
echo "					</div>\n";
echo "        	<div class=\"col-lg-3 col-sm-6\">\n";
echo "        		<div class=\"block-2 ftco-animate\">\n";
echo "	            <div class=\"flipper\">\n";
echo "	              <div class=\"front\" style=\"background-color: green;\">\n";
echo "	                <div class=\"box\">\n";
echo "	                  <h2>Your school?</h2>\n";
echo "	                </div>\n";
echo "	              </div>\n";
echo "	              <div class=\"back\" align=\"center\">\n";
echo "	                <!-- back content -->\n";
echo "						<form>\n";
echo "							<br/>\n";
echo "							<br/>\n";
echo "					          <select>\n";
echo "								<option value=\"1\">Northwestern University</option>\n";
echo "								<option value=\"2\">University of Pennsylvania</option>\n";
echo "								<option value=\"3\">Yale University</option>\n";
echo "							  </select>\n";
echo "							  <br/>\n";
echo "							  <br/>\n";
echo "							  <input type=\"hidden\" name=\"selected_text\" id=\"selected_text\" value=\"\" />\n";
echo "							  <input type=\"submit\" class=\"btn btn-primary py-3 px-4 name=\"search2\" value=\"Search\"/>\n";
echo "							</form>\n";
echo "\n";
echo "					<br/>\n";
echo "					<!--<p align=\"center\"><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search →</a></p>-->\n";
echo "				  </div>\n";
echo "	            </div>\n";
echo "	          </div>\n";
echo "        	</div>\n";
echo "			\n";
echo "	\n";
echo "		\n";
echo "    </section>\n";
echo "\n";
echo "    <section class=\"ftco-section bg-light\">\n";
echo "      <div class=\"container\">\n";
echo "        <div class=\"row justify-content-center mb-5 pb-3\">\n";
echo "          <div class=\"col-md-7 heading-section text-center ftco-animate\">\n";
echo "          	<span class=\"subheading\">News</span>\n";
echo "            <h2>This might be of interest to you!</h2>\n";
echo "          </div>\n";
echo "        </div>\n";
echo "        <div class=\"row d-flex\">\n";
echo "          <div class=\"col-md-4 d-flex ftco-animate\">\n";
echo "          	<div class=\"blog-entry justify-content-end\">\n";
echo "              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_1.jpg');\">\n";
echo "              </a>\n";
echo "              <div class=\"text p-4 float-right d-block\">\n";
echo "              	<div class=\"topper d-flex align-items-center\">\n";
echo "              		<div class=\"one py-2 pl-3 pr-1 align-self-stretch\">\n";
echo "              			<span class=\"day\">15</span>\n";
echo "              		</div>\n";
echo "              		<div class=\"two pl-0 pr-3 py-2 align-self-stretch\">\n";
echo "              			<span class=\"yr\">2019</span>\n";
echo "              			<span class=\"mos\">January</span>\n";
echo "              		</div>\n";
echo "              	</div>\n";
echo "                <h3 class=\"heading mt-2\"><a href=\"#\">All you want to know about industrial laws</a></h3>\n";
echo "                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "          </div>\n";
echo "          <div class=\"col-md-4 d-flex ftco-animate\">\n";
echo "          	<div class=\"blog-entry justify-content-end\">\n";
echo "              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_2.jpg');\">\n";
echo "              </a>\n";
echo "              <div class=\"text p-4 float-right d-block\">\n";
echo "              	<div class=\"topper d-flex align-items-center\">\n";
echo "              		<div class=\"one py-2 pl-3 pr-1 align-self-stretch\">\n";
echo "              			<span class=\"day\">12</span>\n";
echo "              		</div>\n";
echo "              		<div class=\"two pl-0 pr-3 py-2 align-self-stretch\">\n";
echo "              			<span class=\"yr\">2019</span>\n";
echo "              			<span class=\"mos\">January</span>\n";
echo "              		</div>\n";
echo "              	</div>\n";
echo "                <h3 class=\"heading mt-2\"><a href=\"#\">All you want to know about industrial laws</a></h3>\n";
echo "                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "          </div>\n";
echo "          <div class=\"col-md-4 d-flex ftco-animate\">\n";
echo "          	<div class=\"blog-entry\">\n";
echo "              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_3.jpg');\">\n";
echo "              </a>\n";
echo "              <div class=\"text p-4 float-right d-block\">\n";
echo "              	<div class=\"topper d-flex align-items-center\">\n";
echo "              		<div class=\"one py-2 pl-3 pr-1 align-self-stretch\">\n";
echo "              			<span class=\"day\">10</span>\n";
echo "              		</div>\n";
echo "              		<div class=\"two pl-0 pr-3 py-2 align-self-stretch\">\n";
echo "              			<span class=\"yr\">2019</span>\n";
echo "              			<span class=\"mos\">January</span>\n";
echo "              		</div>\n";
echo "              	</div>\n";
echo "                <h3 class=\"heading mt-2\"><a href=\"#\">All you want to know about industrial laws</a></h3>\n";
echo "                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "          </div>\n";
echo "        </div>\n";
echo "      </div>\n";
echo "    </section>\n";
echo "		\n";
echo "    \n";
echo "  \n";
echo "\n";
echo "  <!-- loader -->\n";
echo "  <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>\n";
echo "\n";
echo "\n";
echo "  <script src=\"js/jquery.min.js\"></script>\n";
echo "  <script src=\"js/jquery-migrate-3.0.1.min.js\"></script>\n";
echo "  <script src=\"js/popper.min.js\"></script>\n";
echo "  <script src=\"js/bootstrap.min.js\"></script>\n";
echo "  <script src=\"js/jquery.easing.1.3.js\"></script>\n";
echo "  <script src=\"js/jquery.waypoints.min.js\"></script>\n";
echo "  <script src=\"js/jquery.stellar.min.js\"></script>\n";
echo "  <script src=\"js/owl.carousel.min.js\"></script>\n";
echo "  <script src=\"js/jquery.magnific-popup.min.js\"></script>\n";
echo "  <script src=\"js/aos.js\"></script>\n";
echo "  <script src=\"js/jquery.animateNumber.min.js\"></script>\n";
echo "  <script src=\"js/bootstrap-datepicker.js\"></script>\n";
echo "  <script src=\"js/jquery.timepicker.min.js\"></script>\n";
echo "  <script src=\"js/scrollax.min.js\"></script>\n";
echo "  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>\n";
echo "  <script src=\"js/google-map.js\"></script>\n";
echo "  <script src=\"js/main.js\"></script>\n";
echo "    \n";
echo "  </body>\n";
echo "</html>";

?>
