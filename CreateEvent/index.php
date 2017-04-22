<!DOCTYPE html>
<html>
<head>
	<title>Create Event</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../libraries/materialize/css/materialize.css"  media="screen,projection"/>

<style>
 
 h2{
  text-indent: 15px;
 }

 h3{
  text-indent: 15px;
  font-size: 16px;
 }

</style>
</head>
<body>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../libraries/materialize/js/materialize.js"></script>

  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Homepage</a></li>
        <li><a href="badges.html">Create Event</a></li>
        <li><a href="collapsible.html">Profile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Homepage</a></li>
        <li><a href="badges.html">Create Event</a></li>
        <li><a href="collapsible.html">Profile</a></li>
      </ul>
    </div>
  </nav>

  <h2>Create an Event</h2>

  <h3>Enter information for your event here including title, time, address, and event options.</h3>

<form method="post" id="createEvent" name="createEvent" action="../formHandlers/createEventForm.php">

<!-- Event Name -->
  <div class="row">
    <div class="input-field col s12">
      <input id="event_name" name="event_name" type="text" class="validate">
      <label for="event_name">Event Name</label>
    </div>
  </div>

<!-- Event Date -->
    <div class="row">
      <div class="input-field col s6">
        <input id="event_date" name="event_date" type="date" class="datepicker">
        <label for="event_date">Date</label>
      </div>

<!-- Event Time -->
      <div class="input-field col s6">
        <input id="event_time" name="event_time" type="time" class="validate">
        <label for="event_time"></label>
      </div>
    </div>

<!-- Event Address -->
    <div class="row">
      <div class="input-field col s12">
        <input id="event_streetaddress" name="event_streetaddress" type="text" class="validate">
        <label for="event_streetaddress">Event Address</label>
      </div>
    </div>
    
<!-- Event Description -->
    <div class="row">
      <div class="input-field col s12">
        <textarea id="event_description" name="event_description" class="materialize-textarea"></textarea>
        <label for="event_description">Event Description</label>
      </div>
    </div>

<!-- Image URL -->
    <div class="row">
      <div class="input-field col s12">
        <input id="event_image" name="event_image" type="text" class="validate">
        <label for="event_image">Event Image URL</label>
      </div>
    </div>

<!-- Event Type Buttons, 1 for friends, 2 for private, 3 for public -->
    <p>
      <input name="event_type" type="radio" id="friends_only" value="1" />
      <label for="friends_only">Friends Only</label>
    </p>
    <p>
      <input name="event_type" type="radio" id="invite_only" value="2" />
      <label for="invite_only">Invite Only</label>
    </p>
    <p>
      <input name="event_type" type="radio" id="public" value="3" />
      <label for="public">Public</label>
    </p>

<!-- Cover Charge -->
  <div class="row">
    <class="col s4">
        <div class="input-field col s12">
          <input id="cover_charge" name="cover_charge" type="number" class="validate">
          <label for="cover_charge">Cover Charge ($) - Optional</label>
        </div>
  </div>

<!-- Submit Button -->
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">add</i>
    </button>

</form>


<header>

</header> 
</body>
</html>




<script type="text/javascript">
  
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});

$(".button-collapse").sideNav();

</script>