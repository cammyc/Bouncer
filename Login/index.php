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
$permissions = ['email', 'user_friends']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost:8888/login/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';


?>