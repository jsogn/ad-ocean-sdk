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
    * @desc 下载任务结果
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710563878927
    **/
    'openAsyncTaskDownloadGetApi' => [
        'desc' => '下载任务结果',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710563878927',
        'call' => AdOceanSdk\Report\Api\AsyncTaskDownloadGetApi::class,
        'params' => AdOceanSdk\Report\Params\AsyncTaskDownloadGetParams::class,
        'response' => AdOceanSdk\Report\Response\AsyncTaskDownloadGetResponse::class,
    ],
    /**
    * @desc 创建异步任务
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710562799616
    **/
    'openAsyncTaskCreatePostApi' => [
        'desc' => '创建异步任务',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710562799616',
        'call' => AdOceanSdk\Report\Api\AsyncTaskCreatePostApi::class,
        'params' => AdOceanSdk\Report\Params\AsyncTaskCreatePostParams::class,
        'response' => AdOceanSdk\Report\Response\AsyncTaskCreatePostResponse::class,
    ],
    /**
    * @desc 橙子建站落地页数据
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710565390348
    **/
    'openReportSitePageGetApi' => [
        'desc' => '橙子建站落地页数据',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710565390348',
        'call' => AdOceanSdk\Report\Api\ReportSitePageGetApi::class,
        'params' => AdOceanSdk\Report\Params\ReportSitePageGetParams::class,
        'response' => AdOceanSdk\Report\Response\ReportSitePageGetResponse::class,
    ],
    /**
    * @desc 自定义报表
    * @doc  https://open.oceanengine.com/labels/7/docs/1741387668314126
    **/
    'openReportCustomGetApi' => [
        'desc' => '自定义报表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741387668314126',
        'call' => AdOceanSdk\Report\Api\ReportCustomGetApi::class,
        'params' => AdOceanSdk\Report\Params\ReportCustomGetParams::class,
        'response' => AdOceanSdk\Report\Response\ReportCustomGetResponse::class,
    ],
    /**
    * @desc 获取自定义报表可用指标和维度
    * @doc  https://open.oceanengine.com/labels/7/docs/1755261744248832
    **/
    'openReportCustomConfigGetApi' => [
        'desc' => '获取自定义报表可用指标和维度',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755261744248832',
        'call' => AdOceanSdk\Report\Api\ReportCustomConfigGetApi::class,
        'params' => AdOceanSdk\Report\Params\ReportCustomConfigGetParams::class,
        'response' => AdOceanSdk\Report\Response\ReportCustomConfigGetResponse::class,
    ],
    /**
    * @desc 获取任务列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710563323916
    **/
    'openAsyncTaskGetApi' => [
        'desc' => '获取任务列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710563323916',
        'call' => AdOceanSdk\Report\Api\AsyncTaskGetApi::class,
        'params' => AdOceanSdk\Report\Params\AsyncTaskGetParams::class,
        'response' => AdOceanSdk\Report\Response\AsyncTaskGetResponse::class,
    ],
    /**
    * @desc 批量更新广告启用状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1741031308559364
    **/
    'openPromotionStatusUpdatePostApi' => [
        'desc' => '批量更新广告启用状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741031308559364',
        'call' => AdOceanSdk\Advertising\Api\PromotionStatusUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionStatusUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionStatusUpdatePostResponse::class,
    ],
    /**
    * @desc 创意详细信息（新）
    * @doc  https://open.oceanengine.com/labels/7/docs/1742668551117827
    **/
    'openCreativeDetailGetApi' => [
        'desc' => '创意详细信息（新）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1742668551117827',
        'call' => AdOceanSdk\Advertising\Api\CreativeDetailGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeDetailGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeDetailGetResponse::class,
    ],
    /**
    * @desc 新建/修改白盒配置（广告升级版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1760943644787716
    **/
    'openPromotionAutoGenerateConfigCreatePostApi' => [
        'desc' => '新建/修改白盒配置（广告升级版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1760943644787716',
        'call' => AdOceanSdk\Advertising\Api\PromotionAutoGenerateConfigCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigCreatePostResponse::class,
    ],
    /**
    * @desc 获取广告组
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710532657164
    **/
    'openCampaignGetApi' => [
        'desc' => '获取广告组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710532657164',
        'call' => AdOceanSdk\Advertising\Api\CampaignGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CampaignGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CampaignGetResponse::class,
    ],
    /**
    * @desc 批量更新广告投放时段
    * @doc  https://open.oceanengine.com/labels/7/docs/1769912402184199
    **/
    'openPromotionScheduleTimeUpdatePostApi' => [
        'desc' => '批量更新广告投放时段',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1769912402184199',
        'call' => AdOceanSdk\Advertising\Api\PromotionScheduleTimeUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionScheduleTimeUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionScheduleTimeUpdatePostResponse::class,
    ],
    /**
    * @desc 获取关联云图的广告主账户信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1768100113310735
    **/
    'openCDPBrandGetApi' => [
        'desc' => '获取关联云图的广告主账户信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1768100113310735',
        'call' => AdOceanSdk\Advertising\Api\CDPBrandGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CDPBrandGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CDPBrandGetResponse::class,
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
    * @desc 新建或修改配置，并保存到计划
    * @doc  https://open.oceanengine.com/labels/7/docs/1736244450483215
    **/
    'openCreativeAutoGenerateConfigCreatePostApi' => [
        'desc' => '新建或修改配置，并保存到计划',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736244450483215',
        'call' => AdOceanSdk\Advertising\Api\CreativeAutoGenerateConfigCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeAutoGenerateConfigCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeAutoGenerateConfigCreatePostResponse::class,
    ],
    /**
    * @desc 批量更新广告出价
    * @doc  https://open.oceanengine.com/labels/7/docs/1741031138305028
    **/
    'openPromotionBidUpdatePostApi' => [
        'desc' => '批量更新广告出价',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741031138305028',
        'call' => AdOceanSdk\Advertising\Api\PromotionBidUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionBidUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionBidUpdatePostResponse::class,
    ],
    /**
    * @desc 更改创意状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710543049740
    **/
    'openCreativeUpdateStatusPostApi' => [
        'desc' => '更改创意状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710543049740',
        'call' => AdOceanSdk\Advertising\Api\CreativeUpdateStatusPostApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeUpdateStatusPostParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeUpdateStatusPostResponse::class,
    ],
    /**
    * @desc 获取模板列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1736241054353421
    **/
    'openCreativeTemplateListGetApi' => [
        'desc' => '获取模板列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736241054353421',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateListGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateListGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateListGetResponse::class,
    ],
    /**
    * @desc 获取预算组列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1780644067911818
    **/
    'openBudgetGroupListGetApi' => [
        'desc' => '获取预算组列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780644067911818',
        'call' => AdOceanSdk\Advertising\Api\BudgetGroupListGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\BudgetGroupListGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\BudgetGroupListGetResponse::class,
    ],
    /**
    * @desc 获取模板详情
    * @doc  https://open.oceanengine.com/labels/7/docs/1736243716320256
    **/
    'openCreativeTemplateDetailGetGetApi' => [
        'desc' => '获取模板详情',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736243716320256',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateDetailGetGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateDetailGetGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateDetailGetGetResponse::class,
    ],
    /**
    * @desc 批量更新项目状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1740941413906432
    **/
    'openProjectStatusUpdatePostApi' => [
        'desc' => '批量更新项目状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740941413906432',
        'call' => AdOceanSdk\Advertising\Api\ProjectStatusUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectStatusUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectStatusUpdatePostResponse::class,
    ],
    /**
    * @desc 修改广告
    * @doc  https://open.oceanengine.com/labels/7/docs/1740952287987719
    **/
    'openPromotionUpdatePostApi' => [
        'desc' => '修改广告',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740952287987719',
        'call' => AdOceanSdk\Advertising\Api\PromotionUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionUpdatePostResponse::class,
    ],
    /**
    * @desc 批量更新项目投放时间
    * @doc  https://open.oceanengine.com/labels/7/docs/1779258970970184
    **/
    'openProjectScheduleTimeUpdatePostApi' => [
        'desc' => '批量更新项目投放时间',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1779258970970184',
        'call' => AdOceanSdk\Advertising\Api\ProjectScheduleTimeUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectScheduleTimeUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectScheduleTimeUpdatePostResponse::class,
    ],
    /**
    * @desc 获取创意列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710540735500
    **/
    'openCreativeGetApi' => [
        'desc' => '获取创意列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710540735500',
        'call' => AdOceanSdk\Advertising\Api\CreativeGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeGetResponse::class,
    ],
    /**
    * @desc 创建广告
    * @doc  https://open.oceanengine.com/labels/7/docs/1740946299496459
    **/
    'openPromotionCreatePostApi' => [
        'desc' => '创建广告',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740946299496459',
        'call' => AdOceanSdk\Advertising\Api\PromotionCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionCreatePostResponse::class,
    ],
    /**
    * @desc 批量删除广告
    * @doc  https://open.oceanengine.com/labels/7/docs/1741031376580675
    **/
    'openPromotionDeletePostApi' => [
        'desc' => '批量删除广告',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741031376580675',
        'call' => AdOceanSdk\Advertising\Api\PromotionDeletePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionDeletePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionDeletePostResponse::class,
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
    * @desc 获取创意审核建议
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710544068620
    **/
    'openCreativeRejectReasonGetApi' => [
        'desc' => '获取创意审核建议',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710544068620',
        'call' => AdOceanSdk\Advertising\Api\CreativeRejectReasonGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeRejectReasonGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeRejectReasonGetResponse::class,
    ],
    /**
    * @desc 获取模板（白盒策略）列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1758356001909828
    **/
    'openCreativeStrategyListGetApi' => [
        'desc' => '获取模板（白盒策略）列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1758356001909828',
        'call' => AdOceanSdk\Advertising\Api\CreativeStrategyListGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeStrategyListGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeStrategyListGetResponse::class,
    ],
    /**
    * @desc 获取模板标签列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1736241004382219
    **/
    'openCreativeTemplateTagsGetApi' => [
        'desc' => '获取模板标签列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1736241004382219',
        'call' => AdOceanSdk\Advertising\Api\CreativeTemplateTagsGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeTemplateTagsGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeTemplateTagsGetResponse::class,
    ],
    /**
    * @desc 批量更新广告素材启用状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1755355780973568
    **/
    'openMaterialStatusUpdatePostApi' => [
        'desc' => '批量更新广告素材启用状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755355780973568',
        'call' => AdOceanSdk\Advertising\Api\MaterialStatusUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\MaterialStatusUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\MaterialStatusUpdatePostResponse::class,
    ],
    /**
    * @desc 更新项目
    * @doc  https://open.oceanengine.com/labels/7/docs/1740936504522831
    **/
    'openProjectUpdatePostApi' => [
        'desc' => '更新项目',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740936504522831',
        'call' => AdOceanSdk\Advertising\Api\ProjectUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectUpdatePostResponse::class,
    ],
    /**
    * @desc 批量更新广告预算
    * @doc  https://open.oceanengine.com/labels/7/docs/1741030872454148
    **/
    'openPromotionBudgetUpdatePostApi' => [
        'desc' => '批量更新广告预算',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741030872454148',
        'call' => AdOceanSdk\Advertising\Api\PromotionBudgetUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionBudgetUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionBudgetUpdatePostResponse::class,
    ],
    /**
    * @desc 创建项目
    * @doc  https://open.oceanengine.com/labels/7/docs/1740868093375503
    **/
    'openProjectCreatePostApi' => [
        'desc' => '创建项目',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740868093375503',
        'call' => AdOceanSdk\Advertising\Api\ProjectCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectCreatePostResponse::class,
    ],
    /**
    * @desc 批量获取广告审核建议
    * @doc  https://open.oceanengine.com/labels/7/docs/1741031528693771
    **/
    'openPromotionRejectReasonGetApi' => [
        'desc' => '批量获取广告审核建议',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1741031528693771',
        'call' => AdOceanSdk\Advertising\Api\PromotionRejectReasonGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionRejectReasonGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionRejectReasonGetResponse::class,
    ],
    /**
    * @desc 批量删除项目
    * @doc  https://open.oceanengine.com/labels/7/docs/1740944781036608
    **/
    'openProjectDeletePostApi' => [
        'desc' => '批量删除项目',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740944781036608',
        'call' => AdOceanSdk\Advertising\Api\ProjectDeletePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectDeletePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectDeletePostResponse::class,
    ],
    /**
    * @desc 查询配置详情（广告升级版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1760943993851915
    **/
    'openPromotionAutoGenerateConfigGetApi' => [
        'desc' => '查询配置详情（广告升级版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1760943993851915',
        'call' => AdOceanSdk\Advertising\Api\PromotionAutoGenerateConfigGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigGetResponse::class,
    ],
    /**
    * @desc 获取素材派生数据（素材维度）
    * @doc  https://open.oceanengine.com/labels/7/docs/1755177023094787
    **/
    'openCreativeMaterialMetricsGetApi' => [
        'desc' => '获取素材派生数据（素材维度）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755177023094787',
        'call' => AdOceanSdk\Advertising\Api\CreativeMaterialMetricsGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\CreativeMaterialMetricsGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\CreativeMaterialMetricsGetResponse::class,
    ],
    /**
    * @desc 批量获取广告成本保障状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1755355980850191
    **/
    'openPromotionCostProtectStatusGetApi' => [
        'desc' => '批量获取广告成本保障状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755355980850191',
        'call' => AdOceanSdk\Advertising\Api\PromotionCostProtectStatusGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionCostProtectStatusGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionCostProtectStatusGetResponse::class,
    ],
    /**
    * @desc 批量修改深度出价
    * @doc  https://open.oceanengine.com/labels/7/docs/1755355890182159
    **/
    'openPromotionDeepBidUpdatePostApi' => [
        'desc' => '批量修改深度出价',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755355890182159',
        'call' => AdOceanSdk\Advertising\Api\PromotionDeepBidUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\PromotionDeepBidUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\PromotionDeepBidUpdatePostResponse::class,
    ],
    /**
    * @desc 批量删除预算组
    * @doc  https://open.oceanengine.com/labels/7/docs/1780643886635008
    **/
    'openBudgetGroupDeletePostApi' => [
        'desc' => '批量删除预算组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780643886635008',
        'call' => AdOceanSdk\Advertising\Api\BudgetGroupDeletePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\BudgetGroupDeletePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\BudgetGroupDeletePostResponse::class,
    ],
    /**
    * @desc 获取项目列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1740937147595776
    **/
    'openProjectListGetApi' => [
        'desc' => '获取项目列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740937147595776',
        'call' => AdOceanSdk\Advertising\Api\ProjectListGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectListGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectListGetResponse::class,
    ],
    /**
    * @desc 创建预算组
    * @doc  https://open.oceanengine.com/labels/7/docs/1780159359081540
    **/
    'openBudgetGroupCreatePostApi' => [
        'desc' => '创建预算组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780159359081540',
        'call' => AdOceanSdk\Advertising\Api\BudgetGroupCreatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\BudgetGroupCreatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\BudgetGroupCreatePostResponse::class,
    ],
    /**
    * @desc 批量更新项目预算
    * @doc  https://open.oceanengine.com/labels/7/docs/1755353873798155
    **/
    'openProjectBudgetUpdatePostApi' => [
        'desc' => '批量更新项目预算',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755353873798155',
        'call' => AdOceanSdk\Advertising\Api\ProjectBudgetUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectBudgetUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectBudgetUpdatePostResponse::class,
    ],
    /**
    * @desc 获取素材派生数据（计划维度）
    * @doc  https://open.oceanengine.com/labels/7/docs/1755177028152324
    **/
    'openAdMetricsGetGetApi' => [
        'desc' => '获取素材派生数据（计划维度）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755177028152324',
        'call' => AdOceanSdk\Advertising\Api\AdMetricsGetGetApi::class,
        'params' => AdOceanSdk\Advertising\Params\AdMetricsGetGetParams::class,
        'response' => AdOceanSdk\Advertising\Response\AdMetricsGetGetResponse::class,
    ],
    /**
    * @desc 批量更新项目投放时段
    * @doc  https://open.oceanengine.com/labels/7/docs/1779260654537728
    **/
    'openProjectWeekScheduleUpdatePostApi' => [
        'desc' => '批量更新项目投放时段',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1779260654537728',
        'call' => AdOceanSdk\Advertising\Api\ProjectWeekScheduleUpdatePostApi::class,
        'params' => AdOceanSdk\Advertising\Params\ProjectWeekScheduleUpdatePostParams::class,
        'response' => AdOceanSdk\Advertising\Response\ProjectWeekScheduleUpdatePostResponse::class,
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
    * @desc 删除人群包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710572836879
    **/
    'openDMPCustomAudienceDeletePostApi' => [
        'desc' => '删除人群包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710572836879',
        'call' => AdOceanSdk\DMP\Api\DMPCustomAudienceDeletePostApi::class,
        'params' => AdOceanSdk\DMP\Params\DMPCustomAudienceDeletePostParams::class,
        'response' => AdOceanSdk\DMP\Response\DMPCustomAudienceDeletePostResponse::class,
    ],
    /**
    * @desc 推送人群包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710572311552
    **/
    'openDMPCustomAudiencePushV2PostApi' => [
        'desc' => '推送人群包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710572311552',
        'call' => AdOceanSdk\DMP\Api\DMPCustomAudiencePushV2PostApi::class,
        'params' => AdOceanSdk\DMP\Params\DMPCustomAudiencePushV2PostParams::class,
        'response' => AdOceanSdk\DMP\Response\DMPCustomAudiencePushV2PostResponse::class,
    ],
    /**
    * @desc 发布人群包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710571768844
    **/
    'openDMPCustomAudiencePublishPostApi' => [
        'desc' => '发布人群包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710571768844',
        'call' => AdOceanSdk\DMP\Api\DMPCustomAudiencePublishPostApi::class,
        'params' => AdOceanSdk\DMP\Params\DMPCustomAudiencePublishPostParams::class,
        'response' => AdOceanSdk\DMP\Response\DMPCustomAudiencePublishPostResponse::class,
    ],
    /**
    * @desc 人群包列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710570721295
    **/
    'openCustomAudienceSelectGetApi' => [
        'desc' => '人群包列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710570721295',
        'call' => AdOceanSdk\DMP\Api\CustomAudienceSelectGetApi::class,
        'params' => AdOceanSdk\DMP\Params\CustomAudienceSelectGetParams::class,
        'response' => AdOceanSdk\DMP\Response\CustomAudienceSelectGetResponse::class,
    ],
    /**
    * @desc 数据源文件上传
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710568556544
    **/
    'openDMPDataSourceFileUploadPostApi' => [
        'desc' => '数据源文件上传',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710568556544',
        'call' => AdOceanSdk\DMP\Api\DMPDataSourceFileUploadPostApi::class,
        'params' => AdOceanSdk\DMP\Params\DMPDataSourceFileUploadPostParams::class,
        'response' => AdOceanSdk\DMP\Response\DMPDataSourceFileUploadPostResponse::class,
    ],
    /**
    * @desc 人群包详细信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710571259916
    **/
    'openDMPCustomAudienceReadGetApi' => [
        'desc' => '人群包详细信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710571259916',
        'call' => AdOceanSdk\DMP\Api\DMPCustomAudienceReadGetApi::class,
        'params' => AdOceanSdk\DMP\Params\DMPCustomAudienceReadGetParams::class,
        'response' => AdOceanSdk\DMP\Response\DMPCustomAudienceReadGetResponse::class,
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
    * @desc 批量删除视频素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710605373455
    **/
    'openFileVideoDeletePostApi' => [
        'desc' => '批量删除视频素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710605373455',
        'call' => AdOceanSdk\File\Api\FileVideoDeletePostApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoDeletePostParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoDeletePostResponse::class,
    ],
    /**
    * @desc 批量删除图片素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1761577471849479
    **/
    'openFileImageDeletePostApi' => [
        'desc' => '批量删除图片素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1761577471849479',
        'call' => AdOceanSdk\File\Api\FileImageDeletePostApi::class,
        'params' => AdOceanSdk\File\Params\FileImageDeletePostParams::class,
        'response' => AdOceanSdk\File\Response\FileImageDeletePostResponse::class,
    ],
    /**
    * @desc 批量暂停素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1779985717273613
    **/
    'openFileVideoPausePostApi' => [
        'desc' => '批量暂停素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1779985717273613',
        'call' => AdOceanSdk\File\Api\FileVideoPausePostApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoPausePostParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoPausePostResponse::class,
    ],
    /**
    * @desc 【代理商】明点无效素材查询
    * @doc  https://open.oceanengine.com/labels/7/docs/1779971491239040
    **/
    'openFileRebateMaterialSearchGetApi' => [
        'desc' => '【代理商】明点无效素材查询',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1779971491239040',
        'call' => AdOceanSdk\File\Api\FileRebateMaterialSearchGetApi::class,
        'params' => AdOceanSdk\File\Params\FileRebateMaterialSearchGetParams::class,
        'response' => AdOceanSdk\File\Response\FileRebateMaterialSearchGetResponse::class,
    ],
    /**
    * @desc 获取同主体下广告主视频素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710603509772
    **/
    'openFileVideoAdGetApi' => [
        'desc' => '获取同主体下广告主视频素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710603509772',
        'call' => AdOceanSdk\File\Api\FileVideoAdGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoAdGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoAdGetResponse::class,
    ],
    /**
    * @desc 更新视频
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710605909004
    **/
    'openFileVideoUpdatePostApi' => [
        'desc' => '更新视频',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710605909004',
        'call' => AdOceanSdk\File\Api\FileVideoUpdatePostApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoUpdatePostParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoUpdatePostResponse::class,
    ],
    /**
    * @desc 获取图片素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710601254912
    **/
    'openFileImageGetApi' => [
        'desc' => '获取图片素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710601254912',
        'call' => AdOceanSdk\File\Api\FileImageGetApi::class,
        'params' => AdOceanSdk\File\Params\FileImageGetParams::class,
        'response' => AdOceanSdk\File\Response\FileImageGetResponse::class,
    ],
    /**
    * @desc 下载清理任务结果
    * @doc  https://open.oceanengine.com/labels/7/docs/1764216974179400
    **/
    'openFileVideoMaterialClearTaskResultGetApi' => [
        'desc' => '下载清理任务结果',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1764216974179400',
        'call' => AdOceanSdk\File\Api\FileVideoMaterialClearTaskResultGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoMaterialClearTaskResultGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoMaterialClearTaskResultGetResponse::class,
    ],
    /**
    * @desc 素材推送
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710604852236
    **/
    'openFileMaterialBindPostApi' => [
        'desc' => '素材推送',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710604852236',
        'call' => AdOceanSdk\File\Api\FileMaterialBindPostApi::class,
        'params' => AdOceanSdk\File\Params\FileMaterialBindPostParams::class,
        'response' => AdOceanSdk\File\Response\FileMaterialBindPostResponse::class,
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
    * @desc 获取图文素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1773554026740736
    **/
    'openCarouselListGetApi' => [
        'desc' => '获取图文素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773554026740736',
        'call' => AdOceanSdk\File\Api\CarouselListGetApi::class,
        'params' => AdOceanSdk\File\Params\CarouselListGetParams::class,
        'response' => AdOceanSdk\File\Response\CarouselListGetResponse::class,
    ],
    /**
    * @desc 获取同主体下广告主图文素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1773560989475840
    **/
    'openCarouselAdGetApi' => [
        'desc' => '获取同主体下广告主图文素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773560989475840',
        'call' => AdOceanSdk\File\Api\CarouselAdGetApi::class,
        'params' => AdOceanSdk\File\Params\CarouselAdGetParams::class,
        'response' => AdOceanSdk\File\Response\CarouselAdGetResponse::class,
    ],
    /**
    * @desc 上传广告图片
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710600176640
    **/
    'openFileImageAdPostApi' => [
        'desc' => '上传广告图片',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710600176640',
        'call' => AdOceanSdk\File\Api\FileImageAdPostApi::class,
        'params' => AdOceanSdk\File\Params\FileImageAdPostParams::class,
        'response' => AdOceanSdk\File\Response\FileImageAdPostResponse::class,
    ],
    /**
    * @desc 更新图文信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1773554529716228
    **/
    'openCarouselUpdatePostApi' => [
        'desc' => '更新图文信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773554529716228',
        'call' => AdOceanSdk\File\Api\CarouselUpdatePostApi::class,
        'params' => AdOceanSdk\File\Params\CarouselUpdatePostParams::class,
        'response' => AdOceanSdk\File\Response\CarouselUpdatePostResponse::class,
    ],
    /**
    * @desc 查询素材标签信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1763768835703812
    **/
    'openFileMaterialDetailGetApi' => [
        'desc' => '查询素材标签信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1763768835703812',
        'call' => AdOceanSdk\File\Api\FileMaterialDetailGetApi::class,
        'params' => AdOceanSdk\File\Params\FileMaterialDetailGetParams::class,
        'response' => AdOceanSdk\File\Response\FileMaterialDetailGetResponse::class,
    ],
    /**
    * @desc 获取低效素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1733880964883467
    **/
    'openFileVideoEfficiencyGetApi' => [
        'desc' => '获取低效素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1733880964883467',
        'call' => AdOceanSdk\File\Api\FileVideoEfficiencyGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoEfficiencyGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoEfficiencyGetResponse::class,
    ],
    /**
    * @desc 上传图文内的音频素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1780005237921792
    **/
    'openFileAudioAdPostApi' => [
        'desc' => '上传图文内的音频素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780005237921792',
        'call' => AdOceanSdk\File\Api\FileAudioAdPostApi::class,
        'params' => AdOceanSdk\File\Params\FileAudioAdPostParams::class,
        'response' => AdOceanSdk\File\Response\FileAudioAdPostResponse::class,
    ],
    /**
    * @desc 获取同主体下广告主图片素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710602952719
    **/
    'openFileImageAdGetApi' => [
        'desc' => '获取同主体下广告主图片素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710602952719',
        'call' => AdOceanSdk\File\Api\FileImageAdGetApi::class,
        'params' => AdOceanSdk\File\Params\FileImageAdGetParams::class,
        'response' => AdOceanSdk\File\Response\FileImageAdGetResponse::class,
    ],
    /**
    * @desc 创建素材清理任务
    * @doc  https://open.oceanengine.com/labels/7/docs/1764209655140366
    **/
    'openFileVideoMaterialClearTaskCreatePostApi' => [
        'desc' => '创建素材清理任务',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1764209655140366',
        'call' => AdOceanSdk\File\Api\FileVideoMaterialClearTaskCreatePostApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoMaterialClearTaskCreatePostParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoMaterialClearTaskCreatePostResponse::class,
    ],
    /**
    * @desc 上传视频
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710600730639
    **/
    'openFileVideoAdPostApi' => [
        'desc' => '上传视频',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710600730639',
        'call' => AdOceanSdk\File\Api\FileVideoAdPostApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoAdPostParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoAdPostResponse::class,
    ],
    /**
    * @desc 上传图文
    * @doc  https://open.oceanengine.com/labels/7/docs/1773552433235140
    **/
    'openCarouselCreatePostApi' => [
        'desc' => '上传图文',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773552433235140',
        'call' => AdOceanSdk\File\Api\CarouselCreatePostApi::class,
        'params' => AdOceanSdk\File\Params\CarouselCreatePostParams::class,
        'response' => AdOceanSdk\File\Response\CarouselCreatePostResponse::class,
    ],
    /**
    * @desc 批量删除图文
    * @doc  https://open.oceanengine.com/labels/7/docs/1773561744826380
    **/
    'openCarouselDeletePostApi' => [
        'desc' => '批量删除图文',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773561744826380',
        'call' => AdOceanSdk\File\Api\CarouselDeletePostApi::class,
        'params' => AdOceanSdk\File\Params\CarouselDeletePostParams::class,
        'response' => AdOceanSdk\File\Response\CarouselDeletePostResponse::class,
    ],
    /**
    * @desc 获取素材标签列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1761499216182279
    **/
    'openFileMaterialListGetApi' => [
        'desc' => '获取素材标签列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1761499216182279',
        'call' => AdOceanSdk\File\Api\FileMaterialListGetApi::class,
        'params' => AdOceanSdk\File\Params\FileMaterialListGetParams::class,
        'response' => AdOceanSdk\File\Response\FileMaterialListGetResponse::class,
    ],
    /**
    * @desc 获取视频素材
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710601820172
    **/
    'openFileVideoGetApi' => [
        'desc' => '获取视频素材',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710601820172',
        'call' => AdOceanSdk\File\Api\FileVideoGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoGetResponse::class,
    ],
    /**
    * @desc 获取抖音主页视频
    * @doc  https://open.oceanengine.com/labels/7/docs/1729982871844879
    **/
    'openFileVideoAwemeGetApi' => [
        'desc' => '获取抖音主页视频',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1729982871844879',
        'call' => AdOceanSdk\File\Api\FileVideoAwemeGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoAwemeGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoAwemeGetResponse::class,
    ],
    /**
    * @desc 获取清理任务列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1764210394714119
    **/
    'openFileVideoMaterialClearTaskGetApi' => [
        'desc' => '获取清理任务列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1764210394714119',
        'call' => AdOceanSdk\File\Api\FileVideoMaterialClearTaskGetApi::class,
        'params' => AdOceanSdk\File\Params\FileVideoMaterialClearTaskGetParams::class,
        'response' => AdOceanSdk\File\Response\FileVideoMaterialClearTaskGetResponse::class,
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
    * @desc 取消微信小游戏/小程序共享关系
    * @doc  https://open.oceanengine.com/labels/7/docs/1773102677218368
    **/
    'openToolsBpAssetManagementShareCancelPostApi' => [
        'desc' => '取消微信小游戏/小程序共享关系',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773102677218368',
        'call' => AdOceanSdk\Tools\Api\ToolsBpAssetManagementShareCancelPostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsBpAssetManagementShareCancelPostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareCancelPostResponse::class,
    ],
    /**
    * @desc 修改橙子建站站点
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710618300431
    **/
    'openToolsSiteUpdatePostApi' => [
        'desc' => '修改橙子建站站点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710618300431',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteUpdatePostResponse::class,
    ],
    /**
    * @desc 获取可创建事件列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1709793059412996
    **/
    'openEventManagerAvailableEventsGetApi' => [
        'desc' => '获取可创建事件列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1709793059412996',
        'call' => AdOceanSdk\Tools\Api\EventManagerAvailableEventsGetApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerAvailableEventsGetParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerAvailableEventsGetResponse::class,
    ],
    /**
    * @desc 查询受众预估结果
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710675422208
    **/
    'openToolsEstimateAudienceGetApi' => [
        'desc' => '查询受众预估结果',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710675422208',
        'call' => AdOceanSdk\Tools\Api\ToolsEstimateAudienceGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsEstimateAudienceGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsEstimateAudienceGetResponse::class,
    ],
    /**
    * @desc 素材前置预审结果获取
    * @doc  https://open.oceanengine.com/labels/7/docs/1722273278471172
    **/
    'openToolsPreAuditGetApi' => [
        'desc' => '素材前置预审结果获取',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1722273278471172',
        'call' => AdOceanSdk\Tools\Api\ToolsPreAuditGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsPreAuditGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsPreAuditGetResponse::class,
    ],
    /**
    * @desc 事件资产下创建监测链接组
    * @doc  https://open.oceanengine.com/labels/7/docs/1727898582816775
    **/
    'openEventManagerTrackUrlCreatePostApi' => [
        'desc' => '事件资产下创建监测链接组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1727898582816775',
        'call' => AdOceanSdk\Tools\Api\EventManagerTrackUrlCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerTrackUrlCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerTrackUrlCreatePostResponse::class,
    ],
    /**
    * @desc 查看微信小游戏/小程序共享范围
    * @doc  https://open.oceanengine.com/labels/7/docs/1773105971421187
    **/
    'openToolsBpAssetManagementShareGetApi' => [
        'desc' => '查看微信小游戏/小程序共享范围',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773105971421187',
        'call' => AdOceanSdk\Tools\Api\ToolsBpAssetManagementShareGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsBpAssetManagementShareGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareGetResponse::class,
    ],
    /**
    * @desc 获取定向包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710731761676
    **/
    'openAudiencePackageGetApi' => [
        'desc' => '获取定向包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710731761676',
        'call' => AdOceanSdk\Tools\Api\AudiencePackageGetApi::class,
        'params' => AdOceanSdk\Tools\Params\AudiencePackageGetParams::class,
        'response' => AdOceanSdk\Tools\Response\AudiencePackageGetResponse::class,
    ],
    /**
    * @desc 查询在投计划配额
    * @doc  https://open.oceanengine.com/labels/7/docs/1731070251873293
    **/
    'openToolsQuotaGetApi' => [
        'desc' => '查询在投计划配额',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1731070251873293',
        'call' => AdOceanSdk\Tools\Api\ToolsQuotaGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsQuotaGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsQuotaGetResponse::class,
    ],
    /**
    * @desc 获取抖音授权关系
    * @doc  https://open.oceanengine.com/labels/7/docs/1729983667746823
    **/
    'openToolsAwemeAuthListGetApi' => [
        'desc' => '获取抖音授权关系',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1729983667746823',
        'call' => AdOceanSdk\Tools\Api\ToolsAwemeAuthListGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsAwemeAuthListGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsAwemeAuthListGetResponse::class,
    ],
    /**
    * @desc 查询广告计划学习期状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710684841984
    **/
    'openToolsAdStatExtraInfoGetApi' => [
        'desc' => '查询广告计划学习期状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710684841984',
        'call' => AdOceanSdk\Tools\Api\ToolsAdStatExtraInfoGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsAdStatExtraInfoGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsAdStatExtraInfoGetResponse::class,
    ],
    /**
    * @desc 事件资产下更新监测链接组
    * @doc  https://open.oceanengine.com/labels/7/docs/1727899035395079
    **/
    'openEventManagerTrackUrlUpdatePostApi' => [
        'desc' => '事件资产下更新监测链接组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1727899035395079',
        'call' => AdOceanSdk\Tools\Api\EventManagerTrackUrlUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerTrackUrlUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerTrackUrlUpdatePostResponse::class,
    ],
    /**
    * @desc 更改橙子建站站点状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710618884096
    **/
    'openToolsSiteUpdateStatusPostApi' => [
        'desc' => '更改橙子建站站点状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710618884096',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteUpdateStatusPostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteUpdateStatusPostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteUpdateStatusPostResponse::class,
    ],
    /**
    * @desc 获取广告预览二维码（升级版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1763117461145604
    **/
    'openToolsAdPreviewQrcodeGetApi' => [
        'desc' => '获取广告预览二维码（升级版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1763117461145604',
        'call' => AdOceanSdk\Tools\Api\ToolsAdPreviewQrcodeGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsAdPreviewQrcodeGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsAdPreviewQrcodeGetResponse::class,
    ],
    /**
    * @desc 建站工具-建站转赠
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710623352844
    **/
    'openToolsSiteHandselPostApi' => [
        'desc' => '建站工具-建站转赠',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710623352844',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteHandselPostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteHandselPostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteHandselPostResponse::class,
    ],
    /**
    * @desc 获取已创建资产列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1705976384784395
    **/
    'openToolsEventAssetsGetApi' => [
        'desc' => '获取已创建资产列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1705976384784395',
        'call' => AdOceanSdk\Tools\Api\ToolsEventAssetsGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsEventAssetsGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsEventAssetsGetResponse::class,
    ],
    /**
    * @desc 获取快投推荐出价系数
    * @doc  https://open.oceanengine.com/labels/7/docs/1740289237468175
    **/
    'openToolsSearchBidRatioGetApi' => [
        'desc' => '获取快投推荐出价系数',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1740289237468175',
        'call' => AdOceanSdk\Tools\Api\ToolsSearchBidRatioGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSearchBidRatioGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSearchBidRatioGetResponse::class,
    ],
    /**
    * @desc 获取事件资产下的监测链接组
    * @doc  https://open.oceanengine.com/labels/7/docs/1727901957092365
    **/
    'openEventManagerTrackUrlGetApi' => [
        'desc' => '获取事件资产下的监测链接组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1727901957092365',
        'call' => AdOceanSdk\Tools\Api\EventManagerTrackUrlGetApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerTrackUrlGetParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerTrackUrlGetResponse::class,
    ],
    /**
    * @desc 创建橙子建站站点
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710617712640
    **/
    'openToolsSiteCreatePostApi' => [
        'desc' => '创建橙子建站站点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710617712640',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteCreatePostResponse::class,
    ],
    /**
    * @desc 更新动态创意词包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710718730240
    **/
    'openToolsCreativeWordUpdatePostApi' => [
        'desc' => '更新动态创意词包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710718730240',
        'call' => AdOceanSdk\Tools\Api\ToolsCreativeWordUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsCreativeWordUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsCreativeWordUpdatePostResponse::class,
    ],
    /**
    * @desc 创建微信小程序
    * @doc  https://open.oceanengine.com/labels/7/docs/1771744149686286
    **/
    'openToolsWechatAppletCreatePostApi' => [
        'desc' => '创建微信小程序',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1771744149686286',
        'call' => AdOceanSdk\Tools\Api\ToolsWechatAppletCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsWechatAppletCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsWechatAppletCreatePostResponse::class,
    ],
    /**
    * @desc 获取橙子建站站点详细信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710620022799
    **/
    'openToolsSiteReadGetApi' => [
        'desc' => '获取橙子建站站点详细信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710620022799',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteReadGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteReadGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteReadGetResponse::class,
    ],
    /**
    * @desc 获取微信小程序列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1771203622020111
    **/
    'openToolsWechatAppletListGetApi' => [
        'desc' => '获取微信小程序列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1771203622020111',
        'call' => AdOceanSdk\Tools\Api\ToolsWechatAppletListGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsWechatAppletListGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsWechatAppletListGetResponse::class,
    ],
    /**
    * @desc 设置微信小游戏/小程序共享
    * @doc  https://open.oceanengine.com/labels/7/docs/1773089427219584
    **/
    'openToolsBpAssetManagementSharePostApi' => [
        'desc' => '设置微信小游戏/小程序共享',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1773089427219584',
        'call' => AdOceanSdk\Tools\Api\ToolsBpAssetManagementSharePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsBpAssetManagementSharePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsBpAssetManagementSharePostResponse::class,
    ],
    /**
    * @desc 获取视频智能封面
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710602404864
    **/
    'openToolsVideoCoverSuggestGetApi' => [
        'desc' => '获取视频智能封面',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710602404864',
        'call' => AdOceanSdk\Tools\Api\ToolsVideoCoverSuggestGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsVideoCoverSuggestGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsVideoCoverSuggestGetResponse::class,
    ],
    /**
    * @desc 日志查询
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710682956815
    **/
    'openToolsLogSearchGetApi' => [
        'desc' => '日志查询',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710682956815',
        'call' => AdOceanSdk\Tools\Api\ToolsLogSearchGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsLogSearchGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsLogSearchGetResponse::class,
    ],
    /**
    * @desc 创建事件资产
    * @doc  https://open.oceanengine.com/labels/7/docs/1709792943937547
    **/
    'openEventManagerAssetsCreatePostApi' => [
        'desc' => '创建事件资产',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1709792943937547',
        'call' => AdOceanSdk\Tools\Api\EventManagerAssetsCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerAssetsCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerAssetsCreatePostResponse::class,
    ],
    /**
    * @desc 建议日预算及预期成本
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710676657164
    **/
    'openToolsBidSuggestGetApi' => [
        'desc' => '建议日预算及预期成本',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710676657164',
        'call' => AdOceanSdk\Tools\Api\ToolsBidSuggestGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsBidSuggestGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsBidSuggestGetResponse::class,
    ],
    /**
    * @desc 删除动态创意词包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710719368207
    **/
    'openToolsCreativeWordDeletePostApi' => [
        'desc' => '删除动态创意词包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710719368207',
        'call' => AdOceanSdk\Tools\Api\ToolsCreativeWordDeletePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsCreativeWordDeletePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsCreativeWordDeletePostResponse::class,
    ],
    /**
    * @desc 创建动态创意词包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710717478927
    **/
    'openToolsCreativeWordCreatePostApi' => [
        'desc' => '创建动态创意词包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710717478927',
        'call' => AdOceanSdk\Tools\Api\ToolsCreativeWordCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsCreativeWordCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsCreativeWordCreatePostResponse::class,
    ],
    /**
    * @desc 更新微信小程序
    * @doc  https://open.oceanengine.com/labels/7/docs/1771744756803659
    **/
    'openToolsWechatAppletUpdatePostApi' => [
        'desc' => '更新微信小程序',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1771744756803659',
        'call' => AdOceanSdk\Tools\Api\ToolsWechatAppletUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsWechatAppletUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsWechatAppletUpdatePostResponse::class,
    ],
    /**
    * @desc 事件管理资产查看共享范围
    * @doc  https://open.oceanengine.com/labels/7/docs/1738862504734731
    **/
    'openEventManagerShareGetApi' => [
        'desc' => '事件管理资产查看共享范围',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1738862504734731',
        'call' => AdOceanSdk\Tools\Api\EventManagerShareGetApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerShareGetParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerShareGetResponse::class,
    ],
    /**
    * @desc 资产下创建事件
    * @doc  https://open.oceanengine.com/labels/7/docs/1709792900524035
    **/
    'openEventManagerEventsCreatePostApi' => [
        'desc' => '资产下创建事件',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1709792900524035',
        'call' => AdOceanSdk\Tools\Api\EventManagerEventsCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerEventsCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerEventsCreatePostResponse::class,
    ],
    /**
    * @desc 查询动态创意词包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710718137356
    **/
    'openToolsCreativeWordSelectGetApi' => [
        'desc' => '查询动态创意词包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710718137356',
        'call' => AdOceanSdk\Tools\Api\ToolsCreativeWordSelectGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsCreativeWordSelectGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsCreativeWordSelectGetResponse::class,
    ],
    /**
    * @desc 更新落地页组信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710630182912
    **/
    'openToolsLandingGroupUpdatePostApi' => [
        'desc' => '更新落地页组信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710630182912',
        'call' => AdOceanSdk\Tools\Api\ToolsLandingGroupUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsLandingGroupUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsLandingGroupUpdatePostResponse::class,
    ],
    /**
    * @desc 获取橙子建站站点列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710620579852
    **/
    'openToolsSiteGetApi' => [
        'desc' => '获取橙子建站站点列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710620579852',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteGetResponse::class,
    ],
    /**
    * @desc 创建定向包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710735901711
    **/
    'openAudiencePackageCreatePostApi' => [
        'desc' => '创建定向包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710735901711',
        'call' => AdOceanSdk\Tools\Api\AudiencePackageCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\AudiencePackageCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\AudiencePackageCreatePostResponse::class,
    ],
    /**
    * @desc 查询建议出价（巨量广告升级版）
    * @doc  https://open.oceanengine.com/labels/7/docs/1771363823169544
    **/
    'openToolsBidsSuggestGetApi' => [
        'desc' => '查询建议出价（巨量广告升级版）',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1771363823169544',
        'call' => AdOceanSdk\Tools\Api\ToolsBidsSuggestGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsBidsSuggestGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsBidsSuggestGetResponse::class,
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
    /**
    * @desc 获取账户下原生锚点
    * @doc  https://open.oceanengine.com/labels/7/docs/1757715831323652
    **/
    'openNativeAnchorGetApi' => [
        'desc' => '获取账户下原生锚点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1757715831323652',
        'call' => AdOceanSdk\Tools\Api\NativeAnchorGetApi::class,
        'params' => AdOceanSdk\Tools\Params\NativeAnchorGetParams::class,
        'response' => AdOceanSdk\Tools\Response\NativeAnchorGetResponse::class,
    ],
    /**
    * @desc 删除定向包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710732991488
    **/
    'openAudiencePackageDeletePostApi' => [
        'desc' => '删除定向包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710732991488',
        'call' => AdOceanSdk\Tools\Api\AudiencePackageDeletePostApi::class,
        'params' => AdOceanSdk\Tools\Params\AudiencePackageDeletePostParams::class,
        'response' => AdOceanSdk\Tools\Response\AudiencePackageDeletePostResponse::class,
    ],
    /**
    * @desc 更新原生锚点
    * @doc  https://open.oceanengine.com/labels/7/docs/1780079786680328
    **/
    'openNativeAnchorUpdatePostApi' => [
        'desc' => '更新原生锚点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780079786680328',
        'call' => AdOceanSdk\Tools\Api\NativeAnchorUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\NativeAnchorUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\NativeAnchorUpdatePostResponse::class,
    ],
    /**
    * @desc 获取资产下已创建事件列表
    * @doc  https://open.oceanengine.com/labels/7/docs/1709793086075972
    **/
    'openEventManagerEventConfigsGetApi' => [
        'desc' => '获取资产下已创建事件列表',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1709793086075972',
        'call' => AdOceanSdk\Tools\Api\EventManagerEventConfigsGetApi::class,
        'params' => AdOceanSdk\Tools\Params\EventManagerEventConfigsGetParams::class,
        'response' => AdOceanSdk\Tools\Response\EventManagerEventConfigsGetResponse::class,
    ],
    /**
    * @desc 通过优化目标获取橙子落地页站点信息
    * @doc  https://open.oceanengine.com/labels/7/docs/1755162848410635
    **/
    'openToolsOrangeSiteGetApi' => [
        'desc' => '通过优化目标获取橙子落地页站点信息',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1755162848410635',
        'call' => AdOceanSdk\Tools\Api\ToolsOrangeSiteGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsOrangeSiteGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsOrangeSiteGetResponse::class,
    ],
    /**
    * @desc 创建原生锚点
    * @doc  https://open.oceanengine.com/labels/7/docs/1757798123491403
    **/
    'openNativeAnchorCreatePostApi' => [
        'desc' => '创建原生锚点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1757798123491403',
        'call' => AdOceanSdk\Tools\Api\NativeAnchorCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\NativeAnchorCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\NativeAnchorCreatePostResponse::class,
    ],
    /**
    * @desc 删除原生锚点
    * @doc  https://open.oceanengine.com/labels/7/docs/1780079261760524
    **/
    'openNativeAnchorDeletePostApi' => [
        'desc' => '删除原生锚点',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780079261760524',
        'call' => AdOceanSdk\Tools\Api\NativeAnchorDeletePostApi::class,
        'params' => AdOceanSdk\Tools\Params\NativeAnchorDeletePostParams::class,
        'response' => AdOceanSdk\Tools\Response\NativeAnchorDeletePostResponse::class,
    ],
    /**
    * @desc 获取字节小程序
    * @doc  https://open.oceanengine.com/labels/7/docs/1778249831680135
    **/
    'openToolsMicroAppListGetApi' => [
        'desc' => '获取字节小程序',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1778249831680135',
        'call' => AdOceanSdk\Tools\Api\ToolsMicroAppListGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsMicroAppListGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsMicroAppListGetResponse::class,
    ],
    /**
    * @desc 素材前置预审送审
    * @doc  https://open.oceanengine.com/labels/7/docs/1722273263150083
    **/
    'openToolsPreAuditSendPostApi' => [
        'desc' => '素材前置预审送审',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1722273263150083',
        'call' => AdOceanSdk\Tools\Api\ToolsPreAuditSendPostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsPreAuditSendPostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsPreAuditSendPostResponse::class,
    ],
    /**
    * @desc 更新定向包
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710732349455
    **/
    'openAudiencePackageUpdatePostApi' => [
        'desc' => '更新定向包',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710732349455',
        'call' => AdOceanSdk\Tools\Api\AudiencePackageUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\AudiencePackageUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\AudiencePackageUpdatePostResponse::class,
    ],
    /**
    * @desc 获取橙子建站站点预览地址
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710619437056
    **/
    'openToolsSitePreviewGetApi' => [
        'desc' => '获取橙子建站站点预览地址',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710619437056',
        'call' => AdOceanSdk\Tools\Api\ToolsSitePreviewGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSitePreviewGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSitePreviewGetResponse::class,
    ],
    /**
    * @desc 获取预估点击成本
    * @doc  https://open.oceanengine.com/labels/7/docs/1717213696709710
    **/
    'openToolsEstimatedPriceGetApi' => [
        'desc' => '获取预估点击成本',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1717213696709710',
        'call' => AdOceanSdk\Tools\Api\ToolsEstimatedPriceGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsEstimatedPriceGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsEstimatedPriceGetResponse::class,
    ],
    /**
    * @desc 获取落地页组
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710629043212
    **/
    'openToolsLandingGroupGetApi' => [
        'desc' => '获取落地页组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710629043212',
        'call' => AdOceanSdk\Tools\Api\ToolsLandingGroupGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsLandingGroupGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsLandingGroupGetResponse::class,
    ],
    /**
    * @desc 创建落地页组
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710628472844
    **/
    'openToolsLandingGroupCreatePostApi' => [
        'desc' => '创建落地页组',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710628472844',
        'call' => AdOceanSdk\Tools\Api\ToolsLandingGroupCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsLandingGroupCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsLandingGroupCreatePostResponse::class,
    ],
    /**
    * @desc 更新字节小程序
    * @doc  https://open.oceanengine.com/labels/7/docs/1780614097935372
    **/
    'openToolsMicroAppUpdatePostApi' => [
        'desc' => '更新字节小程序',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780614097935372',
        'call' => AdOceanSdk\Tools\Api\ToolsMicroAppUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsMicroAppUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsMicroAppUpdatePostResponse::class,
    ],
    /**
    * @desc 创建字节小程序
    * @doc  https://open.oceanengine.com/labels/7/docs/1780613896121344
    **/
    'openToolsMicroAppCreatePostApi' => [
        'desc' => '创建字节小程序',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1780613896121344',
        'call' => AdOceanSdk\Tools\Api\ToolsMicroAppCreatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsMicroAppCreatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsMicroAppCreatePostResponse::class,
    ],
    /**
    * @desc 建站工具-建站复制
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710623908864
    **/
    'openToolsSiteCopyPostApi' => [
        'desc' => '建站工具-建站复制',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710623908864',
        'call' => AdOceanSdk\Tools\Api\ToolsSiteCopyPostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsSiteCopyPostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsSiteCopyPostResponse::class,
    ],
    /**
    * @desc 查询广告质量度
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710677262351
    **/
    'openToolsAdQualityGetApi' => [
        'desc' => '查询广告质量度',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710677262351',
        'call' => AdOceanSdk\Tools\Api\ToolsAdQualityGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsAdQualityGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsAdQualityGetResponse::class,
    ],
    /**
    * @desc 更新落地页组站点状态
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710629600256
    **/
    'openToolsLandingGroupSiteOptStatusUpdatePostApi' => [
        'desc' => '更新落地页组站点状态',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710629600256',
        'call' => AdOceanSdk\Tools\Api\ToolsLandingGroupSiteOptStatusUpdatePostApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsLandingGroupSiteOptStatusUpdatePostParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsLandingGroupSiteOptStatusUpdatePostResponse::class,
    ],
    /**
    * @desc 行动号召字段内容获取
    * @doc  https://open.oceanengine.com/labels/7/docs/1696710684229644
    **/
    'openToolsActionTextGetApi' => [
        'desc' => '行动号召字段内容获取',
        'doc' => 'https://open.oceanengine.com/labels/7/docs/1696710684229644',
        'call' => AdOceanSdk\Tools\Api\ToolsActionTextGetApi::class,
        'params' => AdOceanSdk\Tools\Params\ToolsActionTextGetParams::class,
        'response' => AdOceanSdk\Tools\Response\ToolsActionTextGetResponse::class,
    ],
];