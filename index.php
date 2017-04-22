<!DOCTYPE html>
<html>
<head>
	<title>Bouncer</title>

	<link rel="stylesheet" type="text/css" href="libraries/materialize/css/materialize.css"></link>
	<link rel="stylesheet" type="text/css" href="css/homePageCSS.css">

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAja1VIM1FqrdXzsjrqw-wcz2QNCswoboE&callback=myMap"></script>

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

	<div class="row card"  id="mainTabs" >

	    <div class="col s12">

	      <ul class="tabs">
	        <li class="tab col s6"><a class="active" href="#test1">Events</a></li>
	        <li class="tab col s6"><a href="#test2">Feed</a></li>
	      </ul>
	    </div>
	    <div id="test1" class="col s12">
	    	<ul>
		    	<div class="row card">
		    		<li class="card listItemContainer">
			    			<div class="imageTitleHeader"> 
			    				<img class="listImage" src='redSoloCup.jpg'>
			    				<div class="titleText">
			    					<h5>Title of Event</h5>	
			    				</div>
			    			</div>	  

				    		<div style="float: left">

				    			<p style='padding-left: 5px;'>Host: </p>
				    		
				    			<p style='padding-left: 5px;'>When: </p>
				    		
				    			<p style='padding-left: 5px;'>Cover Charge: </p>
				    	
				    			<p style='padding-left: 5px;margin-bottom: 0px;'>Who is Going: </p>
				    			<img class="listImage" src='Albert.jpg'>
				    			<img class="listImage" src='tomBrady.jpg'>

				    
				    		</div>


				    			<div id="googleMap" style="padding: 10px; float: right; width:50%;height:200px;"
				    				></div>

			    </div>


		    	</li>

		    		<!-- <li class="col s6">
		    		<li class="col s6">
		    		<p>Date</p>
		    		</li>

		    		<li class="col s6">
		    		<p>Cover Charge</p>
		    		</li>

		    		<li class="col s6">
		    		<p>People Going</p>
		    		</li>

		    		<li class="col s6">
		    		<p>Location</p>
		    		</li> -->
		    	</li>

	    	</ul>
	    </div>
	    <div id="test2" class="col s12">
	    	Content Feed
	    </div>
  </div>



</body>

<script type="text/javascript">
	
$(document).ready(function(){
    $('ul.tabs').tabs();

	myMap();
							
  });

function myMap() {
		var mapProp= {
		    center:new google.maps.LatLng(40.015205, -105.239187),
		    zoom:5,
		};

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}

</script>


</html>