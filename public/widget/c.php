<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

    $widget_id = $_GET['id'];

    $cURLConnection = curl_init();
    $headers = array(
        'Content-Type: application/json',
    );


    curl_setopt($cURLConnection, CURLOPT_URL, 'https://app.closor.com/widget/'.$widget_id);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    //Set the headers that we want our cURL client to use.
    curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);

    $phoneList = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    echo $phoneList;
