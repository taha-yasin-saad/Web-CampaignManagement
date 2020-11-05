<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Content-type: application/json');

$data = file_get_contents('php://input');

$ch = curl_init();

//Create the headers array.
$headers = array(
    'Content-Type: application/json',
);

$baseUrl = 'https://app.closor.com/api/widgetView/widget';

if ($_GET['path']) {
	$baseUrl .= $_GET['path'];
}

curl_setopt($ch, CURLOPT_URL, $baseUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Set the headers that we want our cURL client to use.
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec($ch);

curl_close ($ch);

echo $server_output;

?>

