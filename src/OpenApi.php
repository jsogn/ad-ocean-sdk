<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;

/**
 * class OpenApi
 * 开放接口调度类
 * @method \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCreatePostResponse openCustomerCenterFundTransferSeqCreatePostApi(\AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCreatePostParams|array $params) 创建转账交易号 https://open.oceanengine.com/labels/7/docs/1758606134468620
 * @method \AdOceanSdk\Fund\Response\AgentTransferSeqCommitPostResponse openAgentTransferSeqCommitPostApi(\AdOceanSdk\Fund\Params\AgentTransferSeqCommitPostParams|array $params) 提交转账交易号（方舟） https://open.oceanengine.com/labels/7/docs/1766755371753487
 * @method \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCommitPostResponse openAgentRefundTransferSeqCommitPostApi(\AdOceanSdk\Fund\Params\AgentRefundTransferSeqCommitPostParams|array $params) 提交退款交易号（方舟） https://open.oceanengine.com/labels/7/docs/1766755445237824
 * @method \AdOceanSdk\Fund\Response\CustomerCenterAdvertiserTransferableListGetResponse openCustomerCenterAdvertiserTransferableListGetApi(\AdOceanSdk\Fund\Params\CustomerCenterAdvertiserTransferableListGetParams|array $params) 获取可转账户列表（客户中心&广告主） https://open.oceanengine.com/labels/7/docs/1758605359659008
 * @method \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCommitPostResponse openCustomerCenterFundTransferSeqCommitPostApi(\AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCommitPostParams|array $params) 提交转账交易号 https://open.oceanengine.com/labels/7/docs/1758606542833678
 * @method \AdOceanSdk\Fund\Response\FundSharedWalletBalanceGetResponse openFundSharedWalletBalanceGetApi(\AdOceanSdk\Fund\Params\FundSharedWalletBalanceGetParams|array $params) 获取返货共享钱包余额 https://open.oceanengine.com/labels/7/docs/1703323812831239
 * @method \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCreatePostResponse openAgentRefundTransferSeqCreatePostApi(\AdOceanSdk\Fund\Params\AgentRefundTransferSeqCreatePostParams|array $params) 创建退款交易号（方舟） https://open.oceanengine.com/labels/7/docs/1766755414170636
 * @method \AdOceanSdk\Fund\Response\AgentTransferSeqCreatePostResponse openAgentTransferSeqCreatePostApi(\AdOceanSdk\Fund\Params\AgentTransferSeqCreatePostParams|array $params) 创建转账交易号（方舟） https://open.oceanengine.com/labels/7/docs/1766755293435980
 * @method \AdOceanSdk\Report\Response\AsyncTaskDownloadGetResponse openAsyncTaskDownloadGetApi(\AdOceanSdk\Report\Params\AsyncTaskDownloadGetParams|array $params) 下载任务结果 https://open.oceanengine.com/labels/7/docs/1696710563878927
 * @method \AdOceanSdk\Report\Response\AsyncTaskCreatePostResponse openAsyncTaskCreatePostApi(\AdOceanSdk\Report\Params\AsyncTaskCreatePostParams|array $params) 创建异步任务 https://open.oceanengine.com/labels/7/docs/1696710562799616
 * @method \AdOceanSdk\Report\Response\ReportSitePageGetResponse openReportSitePageGetApi(\AdOceanSdk\Report\Params\ReportSitePageGetParams|array $params) 橙子建站落地页数据 https://open.oceanengine.com/labels/7/docs/1696710565390348
 * @method \AdOceanSdk\Report\Response\ReportCustomGetResponse openReportCustomGetApi(\AdOceanSdk\Report\Params\ReportCustomGetParams|array $params) 自定义报表 https://open.oceanengine.com/labels/7/docs/1741387668314126
 * @method \AdOceanSdk\Report\Response\ReportCustomConfigGetResponse openReportCustomConfigGetApi(\AdOceanSdk\Report\Params\ReportCustomConfigGetParams|array $params) 获取自定义报表可用指标和维度 https://open.oceanengine.com/labels/7/docs/1755261744248832
 * @method \AdOceanSdk\Report\Response\AsyncTaskGetResponse openAsyncTaskGetApi(\AdOceanSdk\Report\Params\AsyncTaskGetParams|array $params) 获取任务列表 https://open.oceanengine.com/labels/7/docs/1696710563323916
 * @method \AdOceanSdk\Advertising\Response\PromotionStatusUpdatePostResponse openPromotionStatusUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionStatusUpdatePostParams|array $params) 批量更新广告启用状态 https://open.oceanengine.com/labels/7/docs/1741031308559364
 * @method \AdOceanSdk\Advertising\Response\CreativeDetailGetResponse openCreativeDetailGetApi(\AdOceanSdk\Advertising\Params\CreativeDetailGetParams|array $params) 创意详细信息（新） https://open.oceanengine.com/labels/7/docs/1742668551117827
 * @method \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigCreatePostResponse openPromotionAutoGenerateConfigCreatePostApi(\AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigCreatePostParams|array $params) 新建/修改白盒配置（广告升级版） https://open.oceanengine.com/labels/7/docs/1760943644787716
 * @method \AdOceanSdk\Advertising\Response\CampaignGetResponse openCampaignGetApi(\AdOceanSdk\Advertising\Params\CampaignGetParams|array $params) 获取广告组 https://open.oceanengine.com/labels/7/docs/1696710532657164
 * @method \AdOceanSdk\Advertising\Response\PromotionScheduleTimeUpdatePostResponse openPromotionScheduleTimeUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionScheduleTimeUpdatePostParams|array $params) 批量更新广告投放时段 https://open.oceanengine.com/labels/7/docs/1769912402184199
 * @method \AdOceanSdk\Advertising\Response\CDPBrandGetResponse openCDPBrandGetApi(\AdOceanSdk\Advertising\Params\CDPBrandGetParams|array $params) 获取关联云图的广告主账户信息 https://open.oceanengine.com/labels/7/docs/1768100113310735
 * @method \AdOceanSdk\Advertising\Response\AdvertiserBudgetGetResponse openAdvertiserBudgetGetApi(\AdOceanSdk\Advertising\Params\AdvertiserBudgetGetParams|array $params) 获取账户日预算 https://open.oceanengine.com/labels/7/docs/1696710531128335
 * @method \AdOceanSdk\Advertising\Response\CreativeAutoGenerateConfigCreatePostResponse openCreativeAutoGenerateConfigCreatePostApi(\AdOceanSdk\Advertising\Params\CreativeAutoGenerateConfigCreatePostParams|array $params) 新建或修改配置，并保存到计划 https://open.oceanengine.com/labels/7/docs/1736244450483215
 * @method \AdOceanSdk\Advertising\Response\PromotionBidUpdatePostResponse openPromotionBidUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionBidUpdatePostParams|array $params) 批量更新广告出价 https://open.oceanengine.com/labels/7/docs/1741031138305028
 * @method \AdOceanSdk\Advertising\Response\CreativeUpdateStatusPostResponse openCreativeUpdateStatusPostApi(\AdOceanSdk\Advertising\Params\CreativeUpdateStatusPostParams|array $params) 更改创意状态 https://open.oceanengine.com/labels/7/docs/1696710543049740
 * @method \AdOceanSdk\Advertising\Response\CreativeTemplateListGetResponse openCreativeTemplateListGetApi(\AdOceanSdk\Advertising\Params\CreativeTemplateListGetParams|array $params) 获取模板列表 https://open.oceanengine.com/labels/7/docs/1736241054353421
 * @method \AdOceanSdk\Advertising\Response\BudgetGroupListGetResponse openBudgetGroupListGetApi(\AdOceanSdk\Advertising\Params\BudgetGroupListGetParams|array $params) 获取预算组列表 https://open.oceanengine.com/labels/7/docs/1780644067911818
 * @method \AdOceanSdk\Advertising\Response\CreativeTemplateDetailGetGetResponse openCreativeTemplateDetailGetGetApi(\AdOceanSdk\Advertising\Params\CreativeTemplateDetailGetGetParams|array $params) 获取模板详情 https://open.oceanengine.com/labels/7/docs/1736243716320256
 * @method \AdOceanSdk\Advertising\Response\ProjectStatusUpdatePostResponse openProjectStatusUpdatePostApi(\AdOceanSdk\Advertising\Params\ProjectStatusUpdatePostParams|array $params) 批量更新项目状态 https://open.oceanengine.com/labels/7/docs/1740941413906432
 * @method \AdOceanSdk\Advertising\Response\PromotionUpdatePostResponse openPromotionUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionUpdatePostParams|array $params) 修改广告 https://open.oceanengine.com/labels/7/docs/1740952287987719
 * @method \AdOceanSdk\Advertising\Response\ProjectScheduleTimeUpdatePostResponse openProjectScheduleTimeUpdatePostApi(\AdOceanSdk\Advertising\Params\ProjectScheduleTimeUpdatePostParams|array $params) 批量更新项目投放时间 https://open.oceanengine.com/labels/7/docs/1779258970970184
 * @method \AdOceanSdk\Advertising\Response\CreativeGetResponse openCreativeGetApi(\AdOceanSdk\Advertising\Params\CreativeGetParams|array $params) 获取创意列表 https://open.oceanengine.com/labels/7/docs/1696710540735500
 * @method \AdOceanSdk\Advertising\Response\PromotionCreatePostResponse openPromotionCreatePostApi(\AdOceanSdk\Advertising\Params\PromotionCreatePostParams|array $params) 创建广告 https://open.oceanengine.com/labels/7/docs/1740946299496459
 * @method \AdOceanSdk\Advertising\Response\PromotionDeletePostResponse openPromotionDeletePostApi(\AdOceanSdk\Advertising\Params\PromotionDeletePostParams|array $params) 批量删除广告 https://open.oceanengine.com/labels/7/docs/1741031376580675
 * @method \AdOceanSdk\Advertising\Response\AdvertiserBudgetUpdatePostResponse openAdvertiserBudgetUpdatePostApi(\AdOceanSdk\Advertising\Params\AdvertiserBudgetUpdatePostParams|array $params) 更新账户日预算 https://open.oceanengine.com/labels/7/docs/1696710531631116
 * @method \AdOceanSdk\Advertising\Response\CreativeRejectReasonGetResponse openCreativeRejectReasonGetApi(\AdOceanSdk\Advertising\Params\CreativeRejectReasonGetParams|array $params) 获取创意审核建议 https://open.oceanengine.com/labels/7/docs/1696710544068620
 * @method \AdOceanSdk\Advertising\Response\CreativeStrategyListGetResponse openCreativeStrategyListGetApi(\AdOceanSdk\Advertising\Params\CreativeStrategyListGetParams|array $params) 获取模板（白盒策略）列表 https://open.oceanengine.com/labels/7/docs/1758356001909828
 * @method \AdOceanSdk\Advertising\Response\CreativeTemplateTagsGetResponse openCreativeTemplateTagsGetApi(\AdOceanSdk\Advertising\Params\CreativeTemplateTagsGetParams|array $params) 获取模板标签列表 https://open.oceanengine.com/labels/7/docs/1736241004382219
 * @method \AdOceanSdk\Advertising\Response\MaterialStatusUpdatePostResponse openMaterialStatusUpdatePostApi(\AdOceanSdk\Advertising\Params\MaterialStatusUpdatePostParams|array $params) 批量更新广告素材启用状态 https://open.oceanengine.com/labels/7/docs/1755355780973568
 * @method \AdOceanSdk\Advertising\Response\ProjectUpdatePostResponse openProjectUpdatePostApi(\AdOceanSdk\Advertising\Params\ProjectUpdatePostParams|array $params) 更新项目 https://open.oceanengine.com/labels/7/docs/1740936504522831
 * @method \AdOceanSdk\Advertising\Response\PromotionBudgetUpdatePostResponse openPromotionBudgetUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionBudgetUpdatePostParams|array $params) 批量更新广告预算 https://open.oceanengine.com/labels/7/docs/1741030872454148
 * @method \AdOceanSdk\Advertising\Response\ProjectCreatePostResponse openProjectCreatePostApi(\AdOceanSdk\Advertising\Params\ProjectCreatePostParams|array $params) 创建项目 https://open.oceanengine.com/labels/7/docs/1740868093375503
 * @method \AdOceanSdk\Advertising\Response\PromotionRejectReasonGetResponse openPromotionRejectReasonGetApi(\AdOceanSdk\Advertising\Params\PromotionRejectReasonGetParams|array $params) 批量获取广告审核建议 https://open.oceanengine.com/labels/7/docs/1741031528693771
 * @method \AdOceanSdk\Advertising\Response\ProjectDeletePostResponse openProjectDeletePostApi(\AdOceanSdk\Advertising\Params\ProjectDeletePostParams|array $params) 批量删除项目 https://open.oceanengine.com/labels/7/docs/1740944781036608
 * @method \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigGetResponse openPromotionAutoGenerateConfigGetApi(\AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigGetParams|array $params) 查询配置详情（广告升级版） https://open.oceanengine.com/labels/7/docs/1760943993851915
 * @method \AdOceanSdk\Advertising\Response\CreativeMaterialMetricsGetResponse openCreativeMaterialMetricsGetApi(\AdOceanSdk\Advertising\Params\CreativeMaterialMetricsGetParams|array $params) 获取素材派生数据（素材维度） https://open.oceanengine.com/labels/7/docs/1755177023094787
 * @method \AdOceanSdk\Advertising\Response\PromotionCostProtectStatusGetResponse openPromotionCostProtectStatusGetApi(\AdOceanSdk\Advertising\Params\PromotionCostProtectStatusGetParams|array $params) 批量获取广告成本保障状态 https://open.oceanengine.com/labels/7/docs/1755355980850191
 * @method \AdOceanSdk\Advertising\Response\PromotionDeepBidUpdatePostResponse openPromotionDeepBidUpdatePostApi(\AdOceanSdk\Advertising\Params\PromotionDeepBidUpdatePostParams|array $params) 批量修改深度出价 https://open.oceanengine.com/labels/7/docs/1755355890182159
 * @method \AdOceanSdk\Advertising\Response\BudgetGroupDeletePostResponse openBudgetGroupDeletePostApi(\AdOceanSdk\Advertising\Params\BudgetGroupDeletePostParams|array $params) 批量删除预算组 https://open.oceanengine.com/labels/7/docs/1780643886635008
 * @method \AdOceanSdk\Advertising\Response\ProjectListGetResponse openProjectListGetApi(\AdOceanSdk\Advertising\Params\ProjectListGetParams|array $params) 获取项目列表 https://open.oceanengine.com/labels/7/docs/1740937147595776
 * @method \AdOceanSdk\Advertising\Response\BudgetGroupCreatePostResponse openBudgetGroupCreatePostApi(\AdOceanSdk\Advertising\Params\BudgetGroupCreatePostParams|array $params) 创建预算组 https://open.oceanengine.com/labels/7/docs/1780159359081540
 * @method \AdOceanSdk\Advertising\Response\ProjectBudgetUpdatePostResponse openProjectBudgetUpdatePostApi(\AdOceanSdk\Advertising\Params\ProjectBudgetUpdatePostParams|array $params) 批量更新项目预算 https://open.oceanengine.com/labels/7/docs/1755353873798155
 * @method \AdOceanSdk\Advertising\Response\AdMetricsGetGetResponse openAdMetricsGetGetApi(\AdOceanSdk\Advertising\Params\AdMetricsGetGetParams|array $params) 获取素材派生数据（计划维度） https://open.oceanengine.com/labels/7/docs/1755177028152324
 * @method \AdOceanSdk\Advertising\Response\ProjectWeekScheduleUpdatePostResponse openProjectWeekScheduleUpdatePostApi(\AdOceanSdk\Advertising\Params\ProjectWeekScheduleUpdatePostParams|array $params) 批量更新项目投放时段 https://open.oceanengine.com/labels/7/docs/1779260654537728
 * @method \AdOceanSdk\Agent\Response\AgentChildAgentSelectGetResponse openAgentChildAgentSelectGetApi(\AdOceanSdk\Agent\Params\AgentChildAgentSelectGetParams|array $params) 二级代理商列表 https://open.oceanengine.com/labels/7/docs/1696710517693452
 * @method \AdOceanSdk\Agent\Response\AgentAdvertiserCopyPostResponse openAgentAdvertiserCopyPostApi(\AdOceanSdk\Agent\Params\AgentAdvertiserCopyPostParams|array $params) 广告主账户复制 https://open.oceanengine.com/labels/7/docs/1775097300794371
 * @method \AdOceanSdk\Agent\Response\AgentInfoGetResponse openAgentInfoGetApi(\AdOceanSdk\Agent\Params\AgentInfoGetParams|array $params) 获取代理商信息 https://open.oceanengine.com/labels/7/docs/1696710518158351
 * @method \AdOceanSdk\Agent\Response\AgentAdvertiserSelectGetResponse openAgentAdvertiserSelectGetApi(\AdOceanSdk\Agent\Params\AgentAdvertiserSelectGetParams|array $params) 代理商管理账户列表 https://open.oceanengine.com/labels/7/docs/1696710516003852
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyAccountGetResponse openBusinessPlatformCompanyAccountGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyAccountGetParams|array $params) 获取主体下的账户列表 https://open.oceanengine.com/labels/7/docs/1741479196149775
 * @method \AdOceanSdk\Majordomo\Response\MajordomoAdvertiserSelectGetResponse openMajordomoAdvertiserSelectGetApi(\AdOceanSdk\Majordomo\Params\MajordomoAdvertiserSelectGetParams|array $params) 获取纵横组织下资产账户列表 https://open.oceanengine.com/labels/7/docs/1696710519607296
 * @method \AdOceanSdk\Majordomo\Response\CustomerCenterAdvertiserListGetResponse openCustomerCenterAdvertiserListGetApi(\AdOceanSdk\Majordomo\Params\CustomerCenterAdvertiserListGetParams|array $params) 获取纵横组织下资产账户列表（分页） https://open.oceanengine.com/labels/7/docs/1696710520884224
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyInfoGetResponse openBusinessPlatformCompanyInfoGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyInfoGetParams|array $params) 获取纵横组织下所有主体信息 https://open.oceanengine.com/labels/7/docs/1741478619724813
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformPartnerOrganizationListGetResponse openBusinessPlatformPartnerOrganizationListGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformPartnerOrganizationListGetParams|array $params) 查询合作组织 https://open.oceanengine.com/labels/7/docs/1710414874245133
 * @method \AdOceanSdk\DMP\Response\DMPCustomAudienceDeletePostResponse openDMPCustomAudienceDeletePostApi(\AdOceanSdk\DMP\Params\DMPCustomAudienceDeletePostParams|array $params) 删除人群包 https://open.oceanengine.com/labels/7/docs/1696710572836879
 * @method \AdOceanSdk\DMP\Response\DMPCustomAudiencePushV2PostResponse openDMPCustomAudiencePushV2PostApi(\AdOceanSdk\DMP\Params\DMPCustomAudiencePushV2PostParams|array $params) 推送人群包 https://open.oceanengine.com/labels/7/docs/1696710572311552
 * @method \AdOceanSdk\DMP\Response\DMPCustomAudiencePublishPostResponse openDMPCustomAudiencePublishPostApi(\AdOceanSdk\DMP\Params\DMPCustomAudiencePublishPostParams|array $params) 发布人群包 https://open.oceanengine.com/labels/7/docs/1696710571768844
 * @method \AdOceanSdk\DMP\Response\CustomAudienceSelectGetResponse openCustomAudienceSelectGetApi(\AdOceanSdk\DMP\Params\CustomAudienceSelectGetParams|array $params) 人群包列表 https://open.oceanengine.com/labels/7/docs/1696710570721295
 * @method \AdOceanSdk\DMP\Response\DMPDataSourceFileUploadPostResponse openDMPDataSourceFileUploadPostApi(\AdOceanSdk\DMP\Params\DMPDataSourceFileUploadPostParams|array $params) 数据源文件上传 https://open.oceanengine.com/labels/7/docs/1696710568556544
 * @method \AdOceanSdk\DMP\Response\DMPCustomAudienceReadGetResponse openDMPCustomAudienceReadGetApi(\AdOceanSdk\DMP\Params\DMPCustomAudienceReadGetParams|array $params) 人群包详细信息 https://open.oceanengine.com/labels/7/docs/1696710571259916
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserAvatarSubmitPostResponse openAdvertiserAvatarSubmitPostApi(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarSubmitPostParams|array $params) 更新广告主账户头像 https://open.oceanengine.com/labels/7/docs/1696710512435215
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserQualificationGetResponse openAdvertiserQualificationGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserQualificationGetParams|array $params) 获取主体资质（新版） https://open.oceanengine.com/labels/7/docs/1743294338713611
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgSubmitPostResponse openAdvertiserDeliveryPkgSubmitPostApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgSubmitPostParams|array $params) 提交/编辑推广产品资质 https://open.oceanengine.com/labels/7/docs/1776711210685572
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserPublicInfoGetResponse openAdvertiserPublicInfoGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserPublicInfoGetParams|array $params) 获取广告主公开信息 https://open.oceanengine.com/labels/7/docs/1696710511950860
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserUpdatePostResponse openAdvertiserUpdatePostApi(\AdOceanSdk\Advertiser\Params\AdvertiserUpdatePostParams|array $params) 修改广告主信息 https://open.oceanengine.com/labels/7/docs/1696710517205007
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserQualificationSubmitPostResponse openAdvertiserQualificationSubmitPostApi(\AdOceanSdk\Advertiser\Params\AdvertiserQualificationSubmitPostParams|array $params) 提交主体资质（新版） https://open.oceanengine.com/labels/7/docs/1743294661429259
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationListGetResponse openAdvertiserDeliveryQualificationListGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationListGetParams|array $params) 查询投放资质（新版） https://open.oceanengine.com/labels/7/docs/1761500990156815
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserAvatarGetResponse openAdvertiserAvatarGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarGetParams|array $params) 获取广告主账户头像 https://open.oceanengine.com/labels/7/docs/1696710512904192
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserFundGetResponse openAdvertiserFundGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserFundGetParams|array $params) 查询账号余额 https://open.oceanengine.com/labels/7/docs/1696710526192652
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserInfoGetResponse openAdvertiserInfoGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserInfoGetParams|array $params) 获取广告主信息 https://open.oceanengine.com/labels/7/docs/1696710508983311
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgGetResponse openAdvertiserDeliveryPkgGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgGetParams|array $params) 查询推广产品资质 https://open.oceanengine.com/labels/7/docs/1776711148266572
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationSubmitPostResponse openAdvertiserDeliveryQualificationSubmitPostApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationSubmitPostParams|array $params) 提交投放资质（新版） https://open.oceanengine.com/labels/7/docs/1761501324513352
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserTransferableFundGetResponse openAdvertiserTransferableFundGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserTransferableFundGetParams|array $params) 查询账户可转余额 https://open.oceanengine.com/labels/7/docs/1725634464247879
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserFundTransactionGetResponse openAdvertiserFundTransactionGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserFundTransactionGetParams|array $params) 查询账号流水明细 https://open.oceanengine.com/labels/7/docs/1696710527205388
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgConfigGetResponse openAdvertiserDeliveryPkgConfigGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgConfigGetParams|array $params) 查询推广产品资质规则配置 https://open.oceanengine.com/labels/7/docs/1776710970860551
 * @method \AdOceanSdk\File\Response\FileVideoDeletePostResponse openFileVideoDeletePostApi(\AdOceanSdk\File\Params\FileVideoDeletePostParams|array $params) 批量删除视频素材 https://open.oceanengine.com/labels/7/docs/1696710605373455
 * @method \AdOceanSdk\File\Response\FileImageDeletePostResponse openFileImageDeletePostApi(\AdOceanSdk\File\Params\FileImageDeletePostParams|array $params) 批量删除图片素材 https://open.oceanengine.com/labels/7/docs/1761577471849479
 * @method \AdOceanSdk\File\Response\FileVideoPausePostResponse openFileVideoPausePostApi(\AdOceanSdk\File\Params\FileVideoPausePostParams|array $params) 批量暂停素材 https://open.oceanengine.com/labels/7/docs/1779985717273613
 * @method \AdOceanSdk\File\Response\FileRebateMaterialSearchGetResponse openFileRebateMaterialSearchGetApi(\AdOceanSdk\File\Params\FileRebateMaterialSearchGetParams|array $params) 【代理商】明点无效素材查询 https://open.oceanengine.com/labels/7/docs/1779971491239040
 * @method \AdOceanSdk\File\Response\FileVideoAdGetResponse openFileVideoAdGetApi(\AdOceanSdk\File\Params\FileVideoAdGetParams|array $params) 获取同主体下广告主视频素材 https://open.oceanengine.com/labels/7/docs/1696710603509772
 * @method \AdOceanSdk\File\Response\FileVideoUpdatePostResponse openFileVideoUpdatePostApi(\AdOceanSdk\File\Params\FileVideoUpdatePostParams|array $params) 更新视频 https://open.oceanengine.com/labels/7/docs/1696710605909004
 * @method \AdOceanSdk\File\Response\FileImageGetResponse openFileImageGetApi(\AdOceanSdk\File\Params\FileImageGetParams|array $params) 获取图片素材 https://open.oceanengine.com/labels/7/docs/1696710601254912
 * @method \AdOceanSdk\File\Response\FileVideoMaterialClearTaskResultGetResponse openFileVideoMaterialClearTaskResultGetApi(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskResultGetParams|array $params) 下载清理任务结果 https://open.oceanengine.com/labels/7/docs/1764216974179400
 * @method \AdOceanSdk\File\Response\FileMaterialBindPostResponse openFileMaterialBindPostApi(\AdOceanSdk\File\Params\FileMaterialBindPostParams|array $params) 素材推送 https://open.oceanengine.com/labels/7/docs/1696710604852236
 * @method \AdOceanSdk\File\Response\FIleImageAdvertiserPostResponse openFIleImageAdvertiserPostApi(\AdOceanSdk\File\Params\FIleImageAdvertiserPostParams|array $params) 上传资质图片 https://open.oceanengine.com/labels/7/docs/1696710599659532
 * @method \AdOceanSdk\File\Response\CarouselListGetResponse openCarouselListGetApi(\AdOceanSdk\File\Params\CarouselListGetParams|array $params) 获取图文素材 https://open.oceanengine.com/labels/7/docs/1773554026740736
 * @method \AdOceanSdk\File\Response\CarouselAdGetResponse openCarouselAdGetApi(\AdOceanSdk\File\Params\CarouselAdGetParams|array $params) 获取同主体下广告主图文素材 https://open.oceanengine.com/labels/7/docs/1773560989475840
 * @method \AdOceanSdk\File\Response\FileImageAdPostResponse openFileImageAdPostApi(\AdOceanSdk\File\Params\FileImageAdPostParams|array $params) 上传广告图片 https://open.oceanengine.com/labels/7/docs/1696710600176640
 * @method \AdOceanSdk\File\Response\CarouselUpdatePostResponse openCarouselUpdatePostApi(\AdOceanSdk\File\Params\CarouselUpdatePostParams|array $params) 更新图文信息 https://open.oceanengine.com/labels/7/docs/1773554529716228
 * @method \AdOceanSdk\File\Response\FileMaterialDetailGetResponse openFileMaterialDetailGetApi(\AdOceanSdk\File\Params\FileMaterialDetailGetParams|array $params) 查询素材标签信息 https://open.oceanengine.com/labels/7/docs/1763768835703812
 * @method \AdOceanSdk\File\Response\FileVideoEfficiencyGetResponse openFileVideoEfficiencyGetApi(\AdOceanSdk\File\Params\FileVideoEfficiencyGetParams|array $params) 获取低效素材 https://open.oceanengine.com/labels/7/docs/1733880964883467
 * @method \AdOceanSdk\File\Response\FileAudioAdPostResponse openFileAudioAdPostApi(\AdOceanSdk\File\Params\FileAudioAdPostParams|array $params) 上传图文内的音频素材 https://open.oceanengine.com/labels/7/docs/1780005237921792
 * @method \AdOceanSdk\File\Response\FileImageAdGetResponse openFileImageAdGetApi(\AdOceanSdk\File\Params\FileImageAdGetParams|array $params) 获取同主体下广告主图片素材 https://open.oceanengine.com/labels/7/docs/1696710602952719
 * @method \AdOceanSdk\File\Response\FileVideoMaterialClearTaskCreatePostResponse openFileVideoMaterialClearTaskCreatePostApi(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskCreatePostParams|array $params) 创建素材清理任务 https://open.oceanengine.com/labels/7/docs/1764209655140366
 * @method \AdOceanSdk\File\Response\FileVideoAdPostResponse openFileVideoAdPostApi(\AdOceanSdk\File\Params\FileVideoAdPostParams|array $params) 上传视频 https://open.oceanengine.com/labels/7/docs/1696710600730639
 * @method \AdOceanSdk\File\Response\CarouselCreatePostResponse openCarouselCreatePostApi(\AdOceanSdk\File\Params\CarouselCreatePostParams|array $params) 上传图文 https://open.oceanengine.com/labels/7/docs/1773552433235140
 * @method \AdOceanSdk\File\Response\CarouselDeletePostResponse openCarouselDeletePostApi(\AdOceanSdk\File\Params\CarouselDeletePostParams|array $params) 批量删除图文 https://open.oceanengine.com/labels/7/docs/1773561744826380
 * @method \AdOceanSdk\File\Response\FileMaterialListGetResponse openFileMaterialListGetApi(\AdOceanSdk\File\Params\FileMaterialListGetParams|array $params) 获取素材标签列表 https://open.oceanengine.com/labels/7/docs/1761499216182279
 * @method \AdOceanSdk\File\Response\FileVideoGetResponse openFileVideoGetApi(\AdOceanSdk\File\Params\FileVideoGetParams|array $params) 获取视频素材 https://open.oceanengine.com/labels/7/docs/1696710601820172
 * @method \AdOceanSdk\File\Response\FileVideoAwemeGetResponse openFileVideoAwemeGetApi(\AdOceanSdk\File\Params\FileVideoAwemeGetParams|array $params) 获取抖音主页视频 https://open.oceanengine.com/labels/7/docs/1729982871844879
 * @method \AdOceanSdk\File\Response\FileVideoMaterialClearTaskGetResponse openFileVideoMaterialClearTaskGetApi(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskGetParams|array $params) 获取清理任务列表 https://open.oceanengine.com/labels/7/docs/1764210394714119
 * @method \AdOceanSdk\Oauth\Response\OauthUserInfoGetResponse openOauthUserInfoGetApi(\AdOceanSdk\Oauth\Params\OauthUserInfoGetParams|array $params) 获取授权User信息 https://open.oceanengine.com/labels/7/docs/1696710507039756
 * @method \AdOceanSdk\Oauth\Response\OauthAppAccessTokenPostResponse openOauthAppAccessTokenPostApi(\AdOceanSdk\Oauth\Params\OauthAppAccessTokenPostParams|array $params) 获取APP Access Token https://open.oceanengine.com/labels/7/docs/1713655428885516
 * @method \AdOceanSdk\Oauth\Response\OauthAdvertiserGetResponse openOauthAdvertiserGetApi(\AdOceanSdk\Oauth\Params\OauthAdvertiserGetParams|array $params) 获取已授权账户 https://open.oceanengine.com/labels/7/docs/1696710506574848
 * @method \AdOceanSdk\Oauth\Response\OauthRefreshTokenPostResponse openOauthRefreshTokenPostApi(\AdOceanSdk\Oauth\Params\OauthRefreshTokenPostParams|array $params) 刷新Refresh Token https://open.oceanengine.com/labels/7/docs/1696710506097679
 * @method \AdOceanSdk\Oauth\Response\OauthAccessTokenGetResponse openOauthAccessTokenGetApi(\AdOceanSdk\Oauth\Params\OauthAccessTokenGetParams|array $params) 获取Access Token https://open.oceanengine.com/labels/7/docs/1696710505596940
 * @method \AdOceanSdk\Tools\Response\ToolsVideoCoverSuggestGetResponse openToolsVideoCoverSuggestGetApi(\AdOceanSdk\Tools\Params\ToolsVideoCoverSuggestGetParams|array $params) 获取视频智能封面 https://open.oceanengine.com/labels/7/docs/1696710602404864
 * @method \AdOceanSdk\Tools\Response\WechatAppletListGetResponse openWechatAppletListGetApi(\AdOceanSdk\Tools\Params\WechatAppletListGetParams|array $params) 获取微信小程序列表 https://open.oceanengine.com/labels/7/docs/1771203622020111
 */
readonly class OpenApi
{
    private RequestClientInterface $client;

    private array $apiMap;

    public function __construct(RequestClientInterface $client)
    {
        $this->client = $client;
        $this->apiMap = include 'api_config.php';
    }

    public function __call(string $name, array $args)
    {
        $apiConfig = $this->apiMap[$name];
        $params    = $args[0] ?? [];

        /** @var RequestApi $requestApi */
        $requestApi = $apiConfig['call']::make();

        return $requestApi->setClient($this->client)->call($params);
    }
}