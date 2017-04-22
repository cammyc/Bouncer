<!DOCTYPE html>
<html>
<head>
	<title>Bouncer</title>

	<link rel="stylesheet" type="text/css" href="libraries/materialize/css/materialize.css"></link>
	<link rel="stylesheet" type="text/css" href="css/homePageCSS.css">

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
	        <li class="tab col s6"><a href="#test1">Events</a></li>
	        <li class="tab col s6"><a class="active" href="#test2">Feed</a></li>
	      </ul>
	    </div>
	    <div id="test1" class="col s12">
	    	Content Events
	    </div>
	    <div id="test2" class="col s12">
	    	Content Feed
	    </div>
  </div>



</body>

<script type="text/javascript">
	
$(document).ready(function(){
    $('ul.tabs').tabs();
  });

</script>


</html>