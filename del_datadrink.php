<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

try {
    $response =  $client->request('DELETE', '/api/kordrink', [
        'json' => [
            'id' => $id,
        ]
    ]);
    
    $body = $response->getBody();
    header('location:index.php');
    
} catch (\Exception $e) {
    $e->getMessage();
}
