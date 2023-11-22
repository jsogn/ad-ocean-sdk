<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 人群包列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710570721295
 */
class CustomAudienceSelectGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/custom_audience/select/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DMP\Params\CustomAudienceSelectGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\CustomAudienceSelectGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\CustomAudienceSelectGetResponse::from($response->toArray());
    }
}