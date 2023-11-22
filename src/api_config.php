<?php

return [
    /**
    * @desc 创建转账交易号
    * @doc  https://open.oceanengine.com/labels/7/docs/1758606134468620
    **/
    'openCustomerCenterFundTransferSeqCreatePostApi' => [
        'desc' => '创建转账交易号',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1758606134468620',
        'call' => AdOceanSdk\Fund\Api\CustomerCenterFundTransferSeqCreatePostApi::class,
        'params' => AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCreatePostParams::class,
        'response' => AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCreatePostResponse::class,
    ],
    /**
    * @desc 提交转账交易号（方舟）
    * @doc  https://open.oceanengine.com/labels/7/docs/1766755371753487
    **/
    'openAgentTransferSeqCommitPostApi' => [
        'desc' => '提交转账交易号（方舟）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1766755371753487',
        'call' => AdOceanSdk\Fund\Api\AgentTransferSeqCommitPostApi::class,
        'params' => AdOceanSdk\Fund\Params\AgentTransferSeqCommitPostParams::class,
        'response' => AdOceanSdk\Fund\Response\AgentTransferSeqCommitPostResponse::class,
    ],
    /**
    * @desc 提交退款交易号（方舟）
    * @doc  https://open.oceanengine.com/labels/7/docs/1766755445237824
    **/
    'openAgentRefundTransferSeqCommitPostApi' => [
        'desc' => '提交退款交易号（方舟）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1766755445237824',
        'call' => AdOceanSdk\Fund\Api\AgentRefundTransferSeqCommitPostApi::class,
        'params' => AdOceanSdk\Fund\Params\AgentRefundTransferSeqCommitPostParams::class,
        'response' => AdOceanSdk\Fund\Response\AgentRefundTransferSeqCommitPostResponse::class,
    ],
    /**
    * @desc 获取可转账户列表（客户中心&广告主）
    * @doc  https://open.oceanengine.com/labels/7/docs/1758605359659008
    **/
    'openCustomerCenterAdvertiserTransferableListGetApi' => [
        'desc' => '获取可转账户列表（客户中心&广告主）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1758605359659008',
        'call' => AdOceanSdk\Fund\Api\CustomerCenterAdvertiserTransferableListGetApi::class,
        'params' => AdOceanSdk\Fund\Params\CustomerCenterAdvertiserTransferableListGetParams::class,
        'response' => AdOceanSdk\Fund\Response\CustomerCenterAdvertiserTransferableListGetResponse::class,
    ],
    /**
    * @desc 提交转账交易号
    * @doc  https://open.oceanengine.com/labels/7/docs/1758606542833678
    **/
    'openCustomerCenterFundTransferSeqCommitPostApi' => [
        'desc' => '提交转账交易号',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1758606542833678',
        'call' => AdOceanSdk\Fund\Api\CustomerCenterFundTransferSeqCommitPostApi::class,
        'params' => AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCommitPostParams::class,
        'response' => AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCommitPostResponse::class,
    ],
    /**
    * @desc 获取返货共享钱包余额
    * @doc  https://open.oceanengine.com/labels/7/docs/1703323812831239
    **/
    'openFundSharedWalletBalanceGetApi' => [
        'desc' => '获取返货共享钱包余额',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1703323812831239',
        'call' => AdOceanSdk\Fund\Api\FundSharedWalletBalanceGetApi::class,
        'params' => AdOceanSdk\Fund\Params\FundSharedWalletBalanceGetParams::class,
        'response' => AdOceanSdk\Fund\Response\FundSharedWalletBalanceGetResponse::class,
    ],
    /**
    * @desc 创建退款交易号（方舟）
    * @doc  https://open.oceanengine.com/labels/7/docs/1766755414170636
    **/
    'openAgentRefundTransferSeqCreatePostApi' => [
        'desc' => '创建退款交易号（方舟）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1766755414170636',
        'call' => AdOceanSdk\Fund\Api\AgentRefundTransferSeqCreatePostApi::class,
        'params' => AdOceanSdk\Fund\Params\AgentRefundTransferSeqCreatePostParams::class,
        'response' => AdOceanSdk\Fund\Response\AgentRefundTransferSeqCreatePostResponse::class,
    ],
    /**
    * @desc 创建转账交易号（方舟）
    * @doc  https://open.oceanengine.com/labels/7/docs/1766755293435980
    **/
    'openAgentTransferSeqCreatePostApi' => [
        'desc' => '创建转账交易号（方舟）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1766755293435980',
        'call' => AdOceanSdk\Fund\Api\AgentTransferSeqCreatePostApi::class,
        'params' => AdOceanSdk\Fund\Params\AgentTransferSeqCreatePostParams::class,
        'response' => AdOceanSdk\Fund\Response\AgentTransferSeqCreatePostResponse::class,
    ],
    /**
    * @desc 获取账户日预算
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710531128335
    **/
    'openAdvertiserBudgetGetApi' => [
        'desc' => '获取账户日预算',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710531128335',
        'call' => AdOceanSdk\Advertising\Api\AdvertiserBudgetGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\AdvertiserBudgetGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\AdvertiserBudgetGetResponse::class,
    ],
    /**
    * @desc 创意详细信息（新）
    * @doc  https://open.oceanengine.com/labels/7/docs/1742668551117827
    **/
    'openAdvertiserCreativeDetailGetApi' => [
        'desc' => '创意详细信息（新）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1742668551117827',
        'call' => AdOceanSdk\Advertising\Api\CreativeDetailGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeDetailGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeDetailGetResponse::class,
    ],
    /**
    * @desc 获取模板标签列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1736241004382219
    **/
    'openAdvertiserCreativeTemplateTagsGetApi' => [
        'desc' => '获取模板标签列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736241004382219',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateTagsGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateTagsGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateTagsGetResponse::class,
    ],
    /**
    * @desc 获取素材派生数据（素材维度）
    * @doc  https://open.oceanengine.com/labels/7/docs/1755177023094787
    **/
    'openAdvertiserCreativeMaterialMetricsGetApi' => [
        'desc' => '获取素材派生数据（素材维度）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755177023094787',
        'call' => AdOceanSdk\Advertising\Api\CreativeMaterialMetricsGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeMaterialMetricsGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeMaterialMetricsGetResponse::class,
    ],
    /**
    * @desc 更改创意状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710543049740
    **/
    'openAdvertiserCreativeUpdateStatusPostApi' => [
        'desc' => '更改创意状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710543049740',
        'call' => AdOceanSdk\Advertising\Api\CreativeUpdateStatusPostApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeUpdateStatusPostParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeUpdateStatusPostResponse::class,
    ],
    /**
    * @desc 更新账户日预算
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710531631116
    **/
    'openAdvertiserBudgetUpdatePostApi' => [
        'desc' => '更新账户日预算',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710531631116',
        'call' => AdOceanSdk\Advertising\Api\AdvertiserBudgetUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\AdvertiserBudgetUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\AdvertiserBudgetUpdatePostResponse::class,
    ],
    /**
    * @desc 新建或修改配置，并保存到计划
    * @doc  https://open.oceanengine.com/labels/7/docs/1736244450483215
    **/
    'openAdvertiserCreativeAutoGenerateConfigCreatePostApi' => [
        'desc' => '新建或修改配置，并保存到计划',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736244450483215',
        'call' => AdOceanSdk\Advertising\Api\CreativeAutoGenerateConfigCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeAutoGenerateConfigCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeAutoGenerateConfigCreatePostResponse::class,
    ],
    /**
    * @desc 获取创意列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710540735500
    **/
    'openAdvertiserCreativeGetApi' => [
        'desc' => '获取创意列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710540735500',
        'call' => AdOceanSdk\Advertising\Api\CreativeGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeGetResponse::class,
    ],
    /**
    * @desc 获取广告组
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710532657164
    **/
    'openAdvertiserCampaignGetApi' => [
        'desc' => '获取广告组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710532657164',
        'call' => AdOceanSdk\Advertising\Api\CampaignGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CampaignGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CampaignGetResponse::class,
    ],
    /**
    * @desc 获取素材派生数据（计划维度）
    * @doc  https://open.oceanengine.com/labels/7/docs/1755177028152324
    **/
    'openAdvertiserAdMetricsGetGetApi' => [
        'desc' => '获取素材派生数据（计划维度）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755177028152324',
        'call' => AdOceanSdk\Advertising\Api\AdMetricsGetGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\AdMetricsGetGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\AdMetricsGetGetResponse::class,
    ],
    /**
    * @desc 获取模板详情
    * @doc  https://open.oceanengine.com/labels/7/docs/1736243716320256
    **/
    'openAdvertiserCreativeTemplateDetailGetGetApi' => [
        'desc' => '获取模板详情',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736243716320256',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateDetailGetGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateDetailGetGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateDetailGetGetResponse::class,
    ],
    /**
    * @desc 获取模板列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1736241054353421
    **/
    'openAdvertiserCreativeTemplateListGetApi' => [
        'desc' => '获取模板列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736241054353421',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateListGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateListGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateListGetResponse::class,
    ],
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
    * @desc 查询账户可转余额
    * @doc  https://open.oceanengine.com/labels/7/docs/1725634464247879
    **/
    'openAdvertiserTransferableFundGetApi' => [
        'desc' => '查询账户可转余额',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1725634464247879',
        'call' => AdOceanSdk\Advertiser\Api\AdvertiserTransferableFundGetApi::class,
        'params' => AdOceanSdk\Advertiser\Params\AdvertiserTransferableFundGetParams::class,
        'response' => AdOceanSdk\Advertiser\Response\AdvertiserTransferableFundGetResponse::class,
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