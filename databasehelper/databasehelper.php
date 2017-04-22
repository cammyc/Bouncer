<?php

 class User{
 	public $userID;
	public $firstName;
	public $lastName;
	public $email;
	public $facebookID;
 }

 class Event{
 	public $eventID;
 	public $title;
 	public $date;
 	public $startTime;
 	public $address;
 	public $lat;
 	public $lon;
 	public $description;
 	public $imageURL;
 	public $features;
 	public $coverCharge;
 	public $spotifyPlaylist;
 	public $timestamp;

 }

function getDB(){
	$mysqli = new mysqli(null, "root", 'Wh3re$Th3Cl0sestKany3P4rtyAt', "Bouncer", null, "/cloudsql/bouncer-165415:us-central1:bouncer");
	$mysqli->set_charset('utf8mb4');
  	return $mysqli;
}

?>