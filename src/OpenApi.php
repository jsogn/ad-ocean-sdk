<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;

/**
 * class OpenApi
 * 开放接口调度类
 * @method \AdOceanSdk\Agent\Response\AgentChildAgentSelectGetResponse openAgentChildAgentSelectGetApi(\AdOceanSdk\Agent\Params\AgentChildAgentSelectGetParams|array $params) 二级代理商列表 https://open.oceanengine.com/labels/7/docs/1696710517693452
 * @method \AdOceanSdk\Agent\Response\AgentAdvertiserCopyPostResponse openAgentAdvertiserCopyPostApi(\AdOceanSdk\Agent\Params\AgentAdvertiserCopyPostParams|array $params) 广告主账户复制 https://open.oceanengine.com/labels/7/docs/1775097300794371
 * @method \AdOceanSdk\Agent\Response\AgentInfoGetResponse openAgentInfoGetApi(\AdOceanSdk\Agent\Params\AgentInfoGetParams|array $params) 获取代理商信息 https://open.oceanengine.com/labels/7/docs/1696710518158351
 * @method \AdOceanSdk\Agent\Response\AgentAdvertiserSelectGetResponse openAgentAdvertiserSelectGetApi(\AdOceanSdk\Agent\Params\AgentAdvertiserSelectGetParams|array $params) 代理商管理账户列表 https://open.oceanengine.com/labels/7/docs/1696710516003852
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyAccountGetResponse openBusinessPlatformCompanyAccountGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyAccountGetParams|array $params) 获取主体下的账户列表 https://open.oceanengine.com/labels/7/docs/1741479196149775
 * @method \AdOceanSdk\Majordomo\Response\MajordomoAdvertiserSelectGetResponse openMajordomoAdvertiserSelectGetApi(\AdOceanSdk\Majordomo\Params\MajordomoAdvertiserSelectGetParams|array $params) 获取纵横组织下资产账户列表 https://open.oceanengine.com/labels/7/docs/1696710519607296
 * @method \AdOceanSdk\Majordomo\Response\CustomerCenterAdvertiserListGetResponse openCustomerCenterAdvertiserListGetApi(\AdOceanSdk\Majordomo\Params\CustomerCenterAdvertiserListGetParams|array $params) 获取纵横组织下资产账户列表（分页） https://open.oceanengine.com/labels/7/docs/1696710520884224
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyInfoGetResponse openBusinessPlatformCompanyInfoGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyInfoGetParams|array $params) 获取纵横组织下所有主体信息 https://open.oceanengine.com/labels/7/docs/1741478619724813
 * @method \AdOceanSdk\Majordomo\Response\BusinessPlatformPartnerOrganizationListGetResponse openBusinessPlatformPartnerOrganizationListGetApi(\AdOceanSdk\Majordomo\Params\BusinessPlatformPartnerOrganizationListGetParams|array $params) 查询合作组织 https://open.oceanengine.com/labels/7/docs/1710414874245133
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
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserFundTransactionGetResponse openAdvertiserFundTransactionGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserFundTransactionGetParams|array $params) 查询账号流水明细 https://open.oceanengine.com/labels/7/docs/1696710527205388
 * @method \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgConfigGetResponse openAdvertiserDeliveryPkgConfigGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgConfigGetParams|array $params) 查询推广产品资质规则配置 https://open.oceanengine.com/labels/7/docs/1776710970860551
 * @method \AdOceanSdk\File\Response\FIleImageAdvertiserPostResponse openFIleImageAdvertiserPostApi(\AdOceanSdk\File\Params\FIleImageAdvertiserPostParams|array $params) 上传资质图片 https://open.oceanengine.com/labels/7/docs/1696710599659532
 * @method \AdOceanSdk\Oauth\Response\OauthUserInfoGetResponse openOauthUserInfoGetApi(\AdOceanSdk\Oauth\Params\OauthUserInfoGetParams|array $params) 获取授权User信息 https://open.oceanengine.com/labels/7/docs/1696710507039756
 * @method \AdOceanSdk\Oauth\Response\OauthAppAccessTokenPostResponse openOauthAppAccessTokenPostApi(\AdOceanSdk\Oauth\Params\OauthAppAccessTokenPostParams|array $params) 获取APP Access Token https://open.oceanengine.com/labels/7/docs/1713655428885516
 * @method \AdOceanSdk\Oauth\Response\OauthAdvertiserGetResponse openOauthAdvertiserGetApi(\AdOceanSdk\Oauth\Params\OauthAdvertiserGetParams|array $params) 获取已授权账户 https://open.oceanengine.com/labels/7/docs/1696710506574848
 * @method \AdOceanSdk\Oauth\Response\OauthRefreshTokenPostResponse openOauthRefreshTokenPostApi(\AdOceanSdk\Oauth\Params\OauthRefreshTokenPostParams|array $params) 刷新Refresh Token https://open.oceanengine.com/labels/7/docs/1696710506097679
 * @method \AdOceanSdk\Oauth\Response\OauthAccessTokenGetResponse openOauthAccessTokenGetApi(\AdOceanSdk\Oauth\Params\OauthAccessTokenGetParams|array $params) 获取Access Token https://open.oceanengine.com/labels/7/docs/1696710505596940
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