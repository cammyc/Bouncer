<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>

	<link rel="stylesheet" type="text/css" href="../libraries/materialize/css/materialize.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/HomePageCSS.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="libraries/materialize/js/materialize.js"></script>

	 <nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">Logo</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="sass.html">Sass</a></li>
	        <li><a href="badges.html">Components</a></li>
	        <li><a href="collapsible.html">JavaScript</a></li>
	      </ul>
	    </div>
	  </nav>

</head>

<body>

	<div class="row">

		<!-- First Third of Page (User Information) -->
		<div class="col s3 card" style="height: auto; padding-left: 5px; padding-bottom: 10px ">
			<div>
				<img class="listImage" style="float: left;" src='../images/paytonManning.jpg'><br>
				<h5>NAME</h5>
			</div>

			<div style="float: left;">
				
				<p style='padding-left: 5px;'>Description: </p>
					    		
				<p style='padding-left: 5px;'>Birthday: </p>
					    		
				<p style='padding-left: 5px;'>Male of Female: </p>

				<p style='padding-left: 5px;'>Profession: </p>
					    		
				<p style='padding-left: 5px;'>Lives: </p>
					    		
				<p style='padding-left: 5px;'>Religion: </p>

			</div>
		</div>

			<!-- Secon Third of Page (Feed) -->

			<div class="col s6">
				<h5 style="text-align: center;">Your Feed</h5>
				<ul></ul>
			</div>

			<div class="col s3 card" style="height: auto">
				<h5>Your Events</h5>
			</div>

	</div>


</body>

<script type="text/javascript">
	
$(document).ready(function(){
    $('ul.tabs').tabs();

	myMap();
							
  });

</script>

</html>