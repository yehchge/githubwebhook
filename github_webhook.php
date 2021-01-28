<?php

/**
 * 與 GitHub 串接的 WebHook
 * @created 2021/01/28
 */

$secret = 'ilovefish1234567890';
$path = '/data/sites/webhook';
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
if ($signature){
	$request = file_get_contents("php://input");
	$hash = "sha1=".hash_hmac('sha1', $request, $secret);
	if(strcmp($signature, $hash) == 0){
		echo "Hello GitHub WebHook.";
		$aResult = json_decode($request);
		echo "<pre>";print_r($aResult);echo "</pre>";
		exit();
	}

}

echo "Error Secret.";
http_response_code(404);

//header('Content-Type: application/json');
//$req_dump = print_r( $request, true );
//$fp = file_put_contents( 'request.log', $req_dump );

