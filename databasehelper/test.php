<?php

// include("databasehelper.php");

function getDB(){
	$mysqli = new mysqli(null, "root", 'Wh3re$Th3Cl0sestKany3P4rtyAt', "Bouncer", null, "/cloudsql/bouncer-165415:us-central1:bouncer");
	$mysqli->set_charset('utf8mb4');
  	return $mysqli;
}

$db = getDB();

if($db->connect_errno){
	echo "yay";
}else{
	echo "string";
}


?>