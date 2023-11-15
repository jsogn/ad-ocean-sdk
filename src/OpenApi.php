<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;

/**
 * class OpenApi
 * 开放接口调度类
 * @method \AdOceanSdk\Account\Advertiser\Response\AdvertiserInfoGetResponse openAdvertiserInfoGetApi(\AdOceanSdk\Account\Advertiser\Params\AdvertiserInfoGetParams|array $params) 获取广告主信息接口 https://open.oceanengine.com/labels/7/docs/1696710508983311
 * @method \AdOceanSdk\Oauth\Response\AdvertiserGetResponse openAdvertiserGetApi(\AdOceanSdk\Oauth\Params\AdvertiserGetParams|array $params) 获取已授权账户 https://open.oceanengine.com/labels/7/docs/1696710506574848
 * @method \AdOceanSdk\Oauth\Response\AccessTokenGetResponse openAccessTokenGetApi(\AdOceanSdk\Oauth\Params\AccessTokenGetParams|array $params) 获取Access Token https://open.oceanengine.com/labels/7/docs/1696710505596940
 * @method \AdOceanSdk\Oauth\Response\RefreshTokenPostResponse openRefreshTokenPostApi(\AdOceanSdk\Oauth\Params\RefreshTokenPostParams|array $params) 刷新Refresh Token https://open.oceanengine.com/labels/7/docs/1696710506097679
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