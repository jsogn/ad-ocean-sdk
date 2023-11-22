<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告组
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710532657164
 */
class CampaignGetApi extends RequestApi
{
    protected string $address = 'open_api/2/campaign/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CampaignGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CampaignGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CampaignGetResponse::from($response->toArray());
    }
}