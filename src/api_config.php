<?php

return [
    /**
    * @desc 获取广告主信息接口
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
    **/
    'openAdvertiserInfoGetApi' => [
        'desc' => '获取广告主信息接口',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710508983311',
        'call' => AdOceanSdk\Account\Advertiser\Api\AdvertiserInfoGetApi::class,
        'params' => AdOceanSdk\Account\Advertiser\Params\AdvertiserInfoGetParams::class,
        'response' => AdOceanSdk\Account\Advertiser\Response\AdvertiserInfoGetResponse::class,
    ],
    /**
    * @desc 获取已授权账户
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710506574848
    **/
    'openAdvertiserGetApi' => [
        'desc' => '获取已授权账户',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710506574848',
        'call' => AdOceanSdk\Oauth\Api\AdvertiserGetApi::class,
        'params' => AdOceanSdk\Oauth\Params\AdvertiserGetParams::class,
        'response' => AdOceanSdk\Oauth\Response\AdvertiserGetResponse::class,
    ],
    /**
    * @desc 获取Access Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710505596940
    **/
    'openAccessTokenGetApi' => [
        'desc' => '获取Access Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710505596940',
        'call' => AdOceanSdk\Oauth\Api\AccessTokenGetApi::class,
        'params' => AdOceanSdk\Oauth\Params\AccessTokenGetParams::class,
        'response' => AdOceanSdk\Oauth\Response\AccessTokenGetResponse::class,
    ],
    /**
    * @desc 刷新Refresh Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710506097679
    **/
    'openRefreshTokenPostApi' => [
        'desc' => '刷新Refresh Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710506097679',
        'call' => AdOceanSdk\Oauth\Api\RefreshTokenPostApi::class,
        'params' => AdOceanSdk\Oauth\Params\RefreshTokenPostParams::class,
        'response' => AdOceanSdk\Oauth\Response\RefreshTokenPostResponse::class,
    ],
];