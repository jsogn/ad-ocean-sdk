<?php

return [
    /**
    * @desc 更新广告主账户头像
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710512435215
    **/
    'openAdvertiserAvatarSubmitPostApi' => [
        'desc' => '更新广告主账户头像',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710512435215',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserAvatarSubmitPostApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserAvatarSubmitPostParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserAvatarSubmitPostResponse::class,
    ],
    /**
    * @desc 获取主体资质（新版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1743294338713611
    **/
    'openAdvertiserQualificationGetApi' => [
        'desc' => '获取主体资质（新版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1743294338713611',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserQualificationGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserQualificationGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserQualificationGetResponse::class,
    ],
    /**
    * @desc 获取广告主公开信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710511950860
    **/
    'openAdvertiserPublicInfoGetApi' => [
        'desc' => '获取广告主公开信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710511950860',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserPublicInfoGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserPublicInfoGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserPublicInfoGetResponse::class,
    ],
    /**
    * @desc 修改广告主信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710517205007
    **/
    'openAdvertiserUpdatePostApi' => [
        'desc' => '修改广告主信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710517205007',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserUpdatePostApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserUpdatePostParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserUpdatePostResponse::class,
    ],
    /**
    * @desc 提交主体资质（新版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1743294661429259
    **/
    'openAdvertiserQualificationSubmitPostApi' => [
        'desc' => '提交主体资质（新版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1743294661429259',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserQualificationSubmitPostApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserQualificationSubmitPostParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserQualificationSubmitPostResponse::class,
    ],
    /**
    * @desc 查询投放资质（新版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1761500990156815
    **/
    'openAdvertiserDeliveryQualificationListGetApi' => [
        'desc' => '查询投放资质（新版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1761500990156815',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserDeliveryQualificationListGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationListGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationListGetResponse::class,
    ],
    /**
    * @desc 获取广告主账户头像
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710512904192
    **/
    'openAdvertiserAvatarGetApi' => [
        'desc' => '获取广告主账户头像',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710512904192',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserAvatarGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserAvatarGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserAvatarGetResponse::class,
    ],
    /**
    * @desc 获取广告主信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
    **/
    'openAdvertiserInfoGetApi' => [
        'desc' => '获取广告主信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710508983311',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserInfoGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserInfoGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserInfoGetResponse::class,
    ],
    /**
    * @desc 查询推广产品资质
    * @doc  https://open.oceanengine.com/labels/7/docs/1776711148266572
    **/
    'openAdvertiserDeliveryPkgGetApi' => [
        'desc' => '查询推广产品资质',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1776711148266572',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserDeliveryPkgGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgGetResponse::class,
    ],
    /**
    * @desc 提交投放资质（新版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1761501324513352
    **/
    'openAdvertiserDeliveryQualificationSubmitPostApi' => [
        'desc' => '提交投放资质（新版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1761501324513352',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserDeliveryQualificationSubmitPostApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationSubmitPostParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationSubmitPostResponse::class,
    ],
    /**
    * @desc 查询推广产品资质规则配置
    * @doc  https://open.oceanengine.com/labels/7/docs/1776710970860551
    **/
    'openAdvertiserDeliveryPkgConfigGetApi' => [
        'desc' => '查询推广产品资质规则配置',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1776710970860551',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserDeliveryPkgConfigGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgConfigGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgConfigGetResponse::class,
    ],
    /**
    * @desc 上传资质图片
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710599659532
    **/
    'openFIleImageAdvertiserPostApi' => [
        'desc' => '上传资质图片',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710599659532',
        'call' => AdOceanSdk\File\Api\FIleImageAdvertiserPostApi::class,
        'params' => AdOceanSdk\File\Params\FIleImageAdvertiserPostParams::class,
        'response' => AdOceanSdk\File\Response\FIleImageAdvertiserPostResponse::class,
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
    * @desc 获取APP Access Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1713655428885516
    **/
    'openOauthAppAccessTokenPostApi' => [
        'desc' => '获取APP Access Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1713655428885516',
        'call' => AdOceanSdk\Oauth\Api\OauthAppAccessTokenPostApi::class,
        'params' => AdOceanSdk\Oauth\Params\OauthAppAccessTokenPostParams::class,
        'response' => AdOceanSdk\Oauth\Response\OauthAppAccessTokenPostResponse::class,
    ],
    /**
    * @desc 获取已授权账户
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710506574848
    **/
    'openOauthAdvertiserGetApi' => [
        'desc' => '获取已授权账户',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710506574848',
        'call' => AdOceanSdk\Oauth\Api\OauthAdvertiserGetApi::class,
        'params' => AdOceanSdk\Oauth\Params\OauthAdvertiserGetParams::class,
        'response' => AdOceanSdk\Oauth\Response\OauthAdvertiserGetResponse::class,
    ],
    /**
    * @desc 刷新Refresh Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710506097679
    **/
    'openOauthRefreshTokenPostApi' => [
        'desc' => '刷新Refresh Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710506097679',
        'call' => AdOceanSdk\Oauth\Api\OauthRefreshTokenPostApi::class,
        'params' => AdOceanSdk\Oauth\Params\OauthRefreshTokenPostParams::class,
        'response' => AdOceanSdk\Oauth\Response\OauthRefreshTokenPostResponse::class,
    ],
    /**
    * @desc 获取Access Token
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710505596940
    **/
    'openOauthAccessTokenGetApi' => [
        'desc' => '获取Access Token',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710505596940',
        'call' => AdOceanSdk\Oauth\Api\OauthAccessTokenGetApi::class,
        'params' => AdOceanSdk\Oauth\Params\OauthAccessTokenGetParams::class,
        'response' => AdOceanSdk\Oauth\Response\OauthAccessTokenGetResponse::class,
    ],
    /**
    * @desc 获取微信小程序列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1771203622020111
    **/
    'openWechatAppletListGetApi' => [
        'desc' => '获取微信小程序列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1771203622020111',
        'call' => AdOceanSdk\Tools\Api\WechatAppletListGetApi::class,
        'params' => AdOceanSdk\Tools\Params\WechatAppletListGetParams::class,
        'response' => AdOceanSdk\Tools\Response\WechatAppletListGetResponse::class,
    ],
];