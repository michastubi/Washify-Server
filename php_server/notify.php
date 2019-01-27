<?php

$url = 'todo your own glitch domain.../api/send-push-msg';


$handle = fopen("sub.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {

        $postData = '{"subscription":' . $line . ',"data":"Test bla", "applicationKeys":{"public":"todo: your own public notification public key",
	"private":"your own private notification key"}}';

//Initiate cURL.
        $ch = curl_init($url);

//The JSON data.

//Encode the array into JSON.
        $jsonDataEncoded = $postData;

//Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
        $result = curl_exec($ch);

    }

    fclose($handle);
} else {
    print("File Error");
}

?>