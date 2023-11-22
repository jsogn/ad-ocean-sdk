<?php

return [
    /**
    * @desc 二级代理商列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710517693452
    **/
    'openAgentChildAgentSelectGetApi' => [
        'desc' => '二级代理商列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710517693452',
        'call' => AdOceanSdk\Agent\Api\AgentChildAgentSelectGetApi::class,
        'params' => AdOceanSdk\Agent\Params\AgentChildAgentSelectGetParams::class,
        'response' => AdOceanSdk\Agent\Response\AgentChildAgentSelectGetResponse::class,
    ],
    /**
    * @desc 广告主账户复制
    * @doc  https://open.oceanengine.com/labels/7/docs/1775097300794371
    **/
    'openAgentAdvertiserCopyPostApi' => [
        'desc' => '广告主账户复制',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1775097300794371',
        'call' => AdOceanSdk\Agent\Api\AgentAdvertiserCopyPostApi::class,
        'params' => AdOceanSdk\Agent\Params\AgentAdvertiserCopyPostParams::class,
        'response' => AdOceanSdk\Agent\Response\AgentAdvertiserCopyPostResponse::class,
    ],
    /**
    * @desc 获取代理商信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710518158351
    **/
    'openAgentInfoGetApi' => [
        'desc' => '获取代理商信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710518158351',
        'call' => AdOceanSdk\Agent\Api\AgentInfoGetApi::class,
        'params' => AdOceanSdk\Agent\Params\AgentInfoGetParams::class,
        'response' => AdOceanSdk\Agent\Response\AgentInfoGetResponse::class,
    ],
    /**
    * @desc 代理商管理账户列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710516003852
    **/
    'openAgentAdvertiserSelectGetApi' => [
        'desc' => '代理商管理账户列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710516003852',
        'call' => AdOceanSdk\Agent\Api\AgentAdvertiserSelectGetApi::class,
        'params' => AdOceanSdk\Agent\Params\AgentAdvertiserSelectGetParams::class,
        'response' => AdOceanSdk\Agent\Response\AgentAdvertiserSelectGetResponse::class,
    ],
    /**
    * @desc 获取主体下的账户列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1741479196149775
    **/
    'openBusinessPlatformCompanyAccountGetApi' => [
        'desc' => '获取主体下的账户列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741479196149775',
        'call' => AdOceanSdk\Majordomo\Api\BusinessPlatformCompanyAccountGetApi::class,
        'params' => AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyAccountGetParams::class,
        'response' => AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyAccountGetResponse::class,
    ],
    /**
    * @desc 获取纵横组织下资产账户列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710519607296
    **/
    'openMajordomoAdvertiserSelectGetApi' => [
        'desc' => '获取纵横组织下资产账户列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710519607296',
        'call' => AdOceanSdk\Majordomo\Api\MajordomoAdvertiserSelectGetApi::class,
        'params' => AdOceanSdk\Majordomo\Params\MajordomoAdvertiserSelectGetParams::class,
        'response' => AdOceanSdk\Majordomo\Response\MajordomoAdvertiserSelectGetResponse::class,
    ],
    /**
    * @desc 获取纵横组织下资产账户列表（分页）
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710520884224
    **/
    'openCustomerCenterAdvertiserListGetApi' => [
        'desc' => '获取纵横组织下资产账户列表（分页）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710520884224',
        'call' => AdOceanSdk\Majordomo\Api\CustomerCenterAdvertiserListGetApi::class,
        'params' => AdOceanSdk\Majordomo\Params\CustomerCenterAdvertiserListGetParams::class,
        'response' => AdOceanSdk\Majordomo\Response\CustomerCenterAdvertiserListGetResponse::class,
    ],
    /**
    * @desc 获取纵横组织下所有主体信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1741478619724813
    **/
    'openBusinessPlatformCompanyInfoGetApi' => [
        'desc' => '获取纵横组织下所有主体信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741478619724813',
        'call' => AdOceanSdk\Majordomo\Api\BusinessPlatformCompanyInfoGetApi::class,
        'params' => AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyInfoGetParams::class,
        'response' => AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyInfoGetResponse::class,
    ],
    /**
    * @desc 查询合作组织
    * @doc  https://open.oceanengine.com/labels/7/docs/1710414874245133
    **/
    'openBusinessPlatformPartnerOrganizationListGetApi' => [
        'desc' => '查询合作组织',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1710414874245133',
        'call' => AdOceanSdk\Majordomo\Api\BusinessPlatformPartnerOrganizationListGetApi::class,
        'params' => AdOceanSdk\Majordomo\Params\BusinessPlatformPartnerOrganizationListGetParams::class,
        'response' => AdOceanSdk\Majordomo\Response\BusinessPlatformPartnerOrganizationListGetResponse::class,
    ],
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
    * @desc 提交/编辑推广产品资质
    * @doc  https://open.oceanengine.com/labels/7/docs/1776711210685572
    **/
    'openAdvertiserDeliveryPkgSubmitPostApi' => [
        'desc' => '提交/编辑推广产品资质',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1776711210685572',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserDeliveryPkgSubmitPostApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgSubmitPostParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgSubmitPostResponse::class,
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
    * @desc 查询账号余额
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710526192652
    **/
    'openAdvertiserFundGetApi' => [
        'desc' => '查询账号余额',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710526192652',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserFundGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserFundGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserFundGetResponse::class,
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
    * @desc 查询账号流水明细
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710527205388
    **/
    'openAdvertiserFundTransactionGetApi' => [
        'desc' => '查询账号流水明细',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710527205388',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserFundTransactionGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserFundTransactionGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserFundTransactionGetResponse::class,
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