<?php

return [
    /**
    * @desc 获取广告主信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
    **/
    'openAccountAdvertiserInfoGetApi' => [
        'desc' => '获取广告主信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710508983311',
        'call' => AdOceanSdk\Account\Api\AccountAdvertiserInfoGetApi::class,
        'params' => AdOceanSdk\Account\Params\AccountAdvertiserInfoGetParams::class,
        'response' => AdOceanSdk\Account\Response\AccountAdvertiserInfoGetResponse::class,
    ],
    /**
    * @desc 获取授权User信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710507039756
    **/
    'openOauthUserInfoGetApi' => [
        'desc' => '获取授权User信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710507039756',
        'call' => AdOceanSdk\Oauth\Api\OauthUserInfoGetApi::class,
        'params' => AdOceanSdk\Oauth\Params\OauthUserInfoGetParams::class,
        'response' => AdOceanSdk\Oauth\Response\OauthUserInfoGetResponse::class,
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
    /**
    * @desc 获取APP Access Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1713655428885516
    **/
    'openAppAccessTokenPostApi' => [
        'desc' => '获取APP Access Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1713655428885516',
        'call' => AdOceanSdk\Oauth\Api\AppAccessTokenPostApi::class,
        'params' => AdOceanSdk\Oauth\Params\AppAccessTokenPostParams::class,
        'response' => AdOceanSdk\Oauth\Response\AppAccessTokenPostResponse::class,
    ],
];