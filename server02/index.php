<?php 

$url ="http://localhost/api/server01/";

$ch =  curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

if (isset($result['status'])) {
	if ($result['status']==true) {
		print_r($result['data']);
	}
	else{
		echo $result['data'];
	}
}
else{

}