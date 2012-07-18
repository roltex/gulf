<?php 
require_once 'facebook.php';
$app_id = "388621264526998";
$app_secret = "d28e03d2918d091e0b47ca86a4353c99";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));
$signed_request = $facebook->getSignedRequest();
function parsePageSignedRequest() {
    if (isset($_REQUEST['signed_request'])) {
      $encoded_sig = null;
      $payload = null;
      list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
      $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
      $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
      return $data;
    }
    return false;
  }
  if($signed_request = parsePageSignedRequest()) {
    if($signed_request->page->liked) {
			include("after.php");
	    } else {
	    	include("before.php");
	    }
  }
?>