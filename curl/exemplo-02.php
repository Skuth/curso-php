<?php

function getInsta() {
	$token = ""; //API_KEY
	$link = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$token;

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	curl_close($ch);

	return $data = json_decode($response, true);
}

$res = getInsta();
$res = isset($res['data']) ? $res['data'] : null;

if ($res != null) {
	foreach ($res as $key => $value) {
		if ($value['type'] == 'image' && $key <= 5) {
			echo '<img src='.$value['images']['standard_resolution']['url'].' width="320">';
		}
	}
}

?>