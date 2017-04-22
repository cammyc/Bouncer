<?php

include("databasehelper.php");

$mysqli = getDB();

var_dump(getEvents($mysqli, null));


?>