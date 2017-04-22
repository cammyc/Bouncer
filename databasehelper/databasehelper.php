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
 	public $privacyType;
 	public $features;
 	public $coverCharge;
 	public $spotifyPlaylist;
 	public $timestamp;
 }

 class query{

 }

function getDB(){
	// $mysqli = new mysqli(null, "root", 'Wh3re$Th3Cl0sestKany3P4rtyAt', "Bouncer", null, "/cloudsql/bouncer-165415:us-central1:bouncer");
	$mysqli = new mysqli("104.154.166.171", "root", 'Wh3re$Th3Cl0sestKany3P4rtyAt', "Bouncer");

	$mysqli->set_charset('utf8mb4');
  	return $mysqli;
}

function createEvent($mysqli, $event){
	$insertQuery = "INSERT INTO Events (Title, Date, StartTime, Address, Lat, Lon, Description, ImageURL, PrivacyType, Features, CoverCharge, SpotifyPlaylist, Timestamp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

	$statement = $mysqli->prepare($insertQuery);
	
	$statement->bind_param("ssssddssisis", $event->title, $event->date, $event->startTime, $event->address, $event->lat, $event->lon, $event->description, $event->imageURL,$event->privacyType, $event->features, $event->coverCharge, $event->spotifyPlaylist, $event->timestamp);

	$statement->execute();

	if($statement){
		return true;
	}else{
		return false;
	}
}

function getEvents($mysqli, $query){
	$query = 'SELECT ID,Title, Date, StartTime, Address, Lat, Lon, Description, ImageURL, PrivacyType, Features, CoverCharge, SpotifyPlaylist, Timestamp FROM Events';

	$statement = $mysqli->prepare($query);
	$statement->execute();

	$result = $statement->get_result();

	$events = array();
	$i = 0;


	while($row = $result->fetch_array(MYSQLI_NUM)){
		$event = new Event();

		$event->eventID = $row[0];
		$event->title =$row[1];
		$event->date = $row[2];
		$event->startTime = $row[3];
		$event->address = $row[4];
		$event->lat = $row[5];
		$event->lon = $row[6];
		$event->description = $row[7];
		$event->imageURL = $row[8];
		$event->privacyType = $row[9];
		$event->features = $row[10];
		$event->coverCharge = $row[11];
		$event->spotifyPlaylist = $row[12];
		$event->timestamp = $row[13];

		$events[$i] = $event;
		$i++;
	}

	if(sizeof($events > 0)){
		return $events;
	}else{
		return false;
	}

}

function loginCheck(){
    //COOKIE[UserID] just remembers the user, they are only logged in if they have the session variable, when session is expired
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }

    if(!isset($_COOKIE['UserID'])){//may need to change this
      header("Location: ../logout.php");//log user out even if session has user ID in case they have been tampering with cookie data, this will destroy session
      return false;
    }else{
      //reset session variable since user has left and it has been deleted
        $mysqli = getDB();
        $userID = getEncryptedUserIDCookie($mysqli,$_COOKIE['UserID']);
        $mysqli->close();

        if(!isset($_SESSION['UserID'])){
          //here is where session variable will be reinitialized
          /*

          1.check DB for encrypted cookie, if found set session variable to corresponing userID

          2.if cookie has been changed or for some other reason there is no match unset the cookie and make the user login again.

          if session has expired 1. will take effect if cookie has been altered 2 will happen

          */

          if($userID == -1){
            header("Location: ../logout.php");
          }else{
            $_SESSION['UserID'] = $userID;
          }
        }else{
          if($userID == -1){
            header("Location: ../logout.php");
            //if session is active but cookie doesnt match that of database it means user has tampered with it. Log them out.
          }
        }



      hasEmailCheck($_SESSION['UserID']);

      return true;
    }
  }

  function insertEncryptedUserID($mysqli, $userID){
    $encryptedID = password_hash($userID, PASSWORD_DEFAULT);

    $checkQuery = 'SELECT UserID, encryptedID FROM UserCookies WHERE UserID = ?';

    $checkStatement = $mysqli->prepare($checkQuery);
	$checkStatement->bind_param("i", $userID);
	$checkStatement->execute();
	$checkStatement->store_result();
	$checkStatement->fetch();
	$row_count = $checkStatement->num_rows;

	$result = null;
   

    if($check->num_rows > 0){
    	$updateQuery = 'UPDATE UserCookies SET encryptedID = ? WHERE UserID = ?';

    	$statement = $mysqli->prepare($insertQuery);
	
		$statement->bind_param("si", $encryptedID, $userID);

		$result = $statement->execute();

    }else{
    	$insertQuery = 'INSERT INTO UserCookies (UserID, EncryptedID) VALUES(?,?)';

    	$statement = $mysqli->prepare($insertQuery);
	
		$statement->bind_param("is",$userID, $encryptedID);

		$result = $statement->execute();
    }
   

    if($result){
      return $encryptedID;
    }else{
      return false;
    }
  }

  function getEncryptedUserIDCookie($mysqli, $encryptedCookie){
      $result = $mysqli->query('SELECT * FROM userid_cookie WHERE encryptedID = "'.$encryptedCookie.'"');
      $userID = -1;

      while($row = $result->fetch_row()){
        $userID = $row[0];
      }

      return $userID;
  }

?>