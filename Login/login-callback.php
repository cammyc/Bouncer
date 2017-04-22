<?php

require_once '../databasehelper/databasehelper.php';
require_once '../vendor/autoload.php';

if(!session_id()) {
    session_start();
}

$fb = new Facebook\Facebook([
  'app_id' => '1672987282715886',
  'app_secret' => '89da16645b2f486d2a77d48c62d4437d',
  'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
  $response = $fb->get('/me?fields=id ,first_name, last_name, email', $accessToken);

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  $user = $response->getGraphUser();

  $dbUser = new User();

  $dbUser->firstName = $user["first_name"];
  $dbUser->lastName = $user["last_name"];
  $dbUser->email = $user["email"];
  $dbUser->facebookID = $user["id"];

  $mysqli = getDB();

  $resultUser = saveFacebookUser($mysqli, $dbUser);

  if($resultUser != false){ //if not false then result is $dbUser with id
    $insertCookieResult = insertEncryptedUserID($mysqli, $resultUser->userID);

    if($insertCookieResult != false){ //if not false it returns encrypted cookie
      setcookie("UserID",$insertCookieResult,0,'/');
      $mysqli->close();
      header("Location: ../Profile/?id=".$resultUser->userID);
    }else{
      echo "error inserting User";
    }
  }else{
    echo "error adding user";
  }

  $mysqli->close();


  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']

  var_dump($dbUser);
}

?>