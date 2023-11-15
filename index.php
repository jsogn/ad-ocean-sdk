<?php

use AdOceanSdk\Account\Advertiser\Api\AdvertiserInfoGetApi;

require_once 'vendor/autoload.php';

$client = \AdOceanSdk\Application::init();
$client->client()
    ->setAccessToken('e25d6644445cc6db62a3a9b5c762aa5ef8812e73');

//$response = $client->apis()
//    ->openAdvertiserInfoGetApi(\AdOceanSdk\Account\Advertiser\Params\AdvertiserInfoGetParams::from([
//        'advertiser_ids' => [1776703569290333]
//    ]));

$response = $client->apis()->openAccessTokenGetApi(\AdOceanSdk\Oauth\Params\AccessTokenGetParams::from([
    'app_id'    => '1751011096122384',
    'secret'    => 'b48a6db6c93c5c1391a75ae60b1e9176b83eb7a1',
    'auth_code' => 'b48a6db6c93c5c1391a75ae60b1e9176b83eb7a1',
]));

print_r($response);
