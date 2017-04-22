<!DOCTYPE html>
<html>
<head>

	<title>Bouncer</title>

		<link rel="stylesheet" type="text/css" href="libraries/materialize/css/materialize.css"></link>
		<link rel="stylesheet" type="text/css" href="css/event_page.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


		<script src="libraries/materialize/js/materialize.js"></script>

</head>



<body>

	<div id="event_tab">
		<p id="event_tab_title">Event Title</p>
	</div>

	<div id="feed_tab">
		<p id="feed_tab_title">Feed</p>
	</div>

</body>

<script type="text/javascript">
	
$(document).ready(function(){
    $('ul.tabs').tabs();
  });

</script>

</html>