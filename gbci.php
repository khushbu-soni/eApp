<?php
/*
------------------------------------------------------
  www.idiotminds.com
--------------------------------------------------------
*/
require_once 'config.php';
require_once 'google_lib/Google_Client.php';
require_once 'google_lib/Google_Oauth2Service.php';

$client = new Google_Client();
$client->setApplicationName("Google UserInfo PHP Starter Application");

$client->setClientId('768511394602-bpes48arotgcjso4c01q8oog0t4mloqs.apps.googleusercontent.com');
$client->setClientSecret('qpS3n9tbYViy24Yeko15WHmt');
$client->setRedirectUri('http://www.myendorse.com');
$client->setApprovalPrompt('auto');
$client->setAccessType('online');

$oauth2 = new Google_Oauth2Service($client);

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  echo '<script type="text/javascript">window.close();</script>'; exit;
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['error'])) {
 echo '<script type="text/javascript">window.close();</script>'; exit;
}

if ($client->getAccessToken()) {
  $user = $oauth2->userinfo->get();

  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
  $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
  $personMarkup = "$email<div><img src='$img?sz=50'></div>";

  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();


} else {
  echo $authUrl = $client->createAuthUrl();
}
?>
