<?php

//Username and password which you get when you registerd on the WebGenomics
$username = 'demo';
$password = 'demo';
//The target website
$website = 'facebook.com';
$opts = array('http' =>
    array(
        'method' => 'GET',
        //Accept header must be specified 
        'header' => "Accept: application/json\r\n" .
        //Authorization header
        "Authorization: Basic " . base64_encode("$username:$password") . "\r\n"
    )
);

//Create a stream context based on the options
$context = stream_context_create($opts);
$url = 'http://websitegenomics.cloudapp.net/Classify/?uri=' . $website;
//Fetch content from the WebGenomics
$result = file_get_contents($url, false, $context);
echo $result;


