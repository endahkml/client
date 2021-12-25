<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT', '/api/korfood', [
    'json' => [
        'id' => $id,
        'nama' => $_POST['nama'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:makanan.php');
