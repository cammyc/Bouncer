<!DOCTYPE html>
<html>
<head>
	<title>Create Event</title>
<style>
  body{

  }

  main{
    font-family: sans-serif;
  }

  .main_input{
    border: solid #3D95CE;
    border-width: 1px 0;
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
  }

  .about_input{
    border: solid #3D95CE;
    border-width: 1px 0;
    width:400px;
    height:200px;
    padding: 12px 20px;
    margin: 8px 0;
    font-family: sans-serif;
  }

  .city_input{
    border: solid #3D95CE;
    border-width: 1px 0;
    width: 150px;
    padding: 12px 20px;
    margin: 8px 0;    
  }

  .menu_input{
    border: solid #3D95CE;
    border-width: 1px 0;
    width: 100px;
    padding: 12px 20px;
    margin: 8px 0;    
    color: gray;
  }

  input[type=date]{
    border: solid #3D95CE;
    border-width: 1px 0;
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    font-family: sans-serif;
    color: gray;
  }

  input[type=time]{
    border: solid #3D95CE;
    border-width: 1px 0;
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    font-family: sans-serif;
    color: gray;
  }

  .button{
    background-color: white;
    color: black;
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    border: 1px solid #3D95CE;
    border-radius: 1px;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    font-family: robotto;
    text-decoration: none;
    font-size: 17px;
}

.topnav {
    background-color: #3D95CE;
    overflow: hidden;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body>


<header>

  <div class="topnav" id="myTopnav">
    <a href="#home">Home</a>
    <a href="#createEvent">Create Event</a>
    <a href="#contact">Profile</a>
  </div>

  <br>
  <main>Event Name</main>
  <input type="text" name="event_name" placeholder="Event Name" class="main_input">
  <br><br>
  <main>Date</main>
  <input type="date" name="event_date">
  <br><br>
  <main>Time</main>
  <input type="time" name="event_time">
  <br><br>
  <main>Address</main>
  <input type="text" name="event_address" placeholder="Street Address" class="main_input">
  <br>
  <input type="text" name="event_city" placeholder="City" class="city_input">


  <select name="state" id="state" name="event_state" class="menu_input">
    <option value="" selected="selected">State</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
  </select><br>

  <input type="text" name="event_zip" pattern="[0-9]{5}" placeholder="Zip" class="city_input"><br><br>

  <main>Description/About:</main>
  <textarea onkeyup="textCounter(this, 'counter', 1000);" name="event_description" class="about_input" placeholder="1,000 character max"></textarea><br><br>

  <main>Event Type</main>
  <select name="type" id="type" name="event_type" class="menu_input">
    <option value="" selected="selected">Type</option>
    <option value="Friends">Friends Only</option>
    <option value="Invite">Invite Only</option>
    <option value="Public">Public</option>
  </select><br><br>

  <main>Cover Charge ($)</main>
  <input type="number" name="event_covercharge" min="0.00" step="1.00" class="city_input" placeholder="Optional"><br><br>

  <main>Event Image</main>
  <input type="url" name="event_image" placeholder="URL" class="main_input"><br><br>

  <form action="createAccount.php">
    <input type="Submit" class="button" value="Create Event"></input>

  
</header> 
</body>
</html>

<script type="text/javascript">
// Checks to see if fields are blanks, alerts if they are
function validateForm()
{
	var a=document.forms["loginForm"]["username"].value;
    var b=document.forms["loginForm"]["password"].value;
    if(a==null || a=="",b==null || b=="")
    {
    	alert("Please fill all required fields");
    	return false;
    }
}

function textCounter(field,field2,maxlimit){
   var countfield = document.getElementById(field2);
   if ( field.value.length > maxlimit ) {
    field.value = field.value.substring( 0, maxlimit );
    return false;
   } else {
    countfield.value = maxlimit - field.value.length;
   }
  }
</script>