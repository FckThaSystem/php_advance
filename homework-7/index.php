<?php

include 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://ithillel.ua/');

echo $response->getStatusCode();

echo $response->getBody()->getContents();
