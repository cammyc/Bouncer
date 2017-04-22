<?php

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

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']

  echo "string";
}

?>