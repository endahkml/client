<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

try {
    $response =  $client->request('PUT', '/api/kordrink', [
        'json' => [
            'id' => $id,
            'nama' => $_POST['nama'],
            'jenis' => $_POST['jenis'],
            'harga' => $_POST['harga'],
        ]
    ]);
    
    $body = $response->getBody();
    header('location:index.php');
    
} catch (\Exception $e) {
    echo $e->getMessage();
}
