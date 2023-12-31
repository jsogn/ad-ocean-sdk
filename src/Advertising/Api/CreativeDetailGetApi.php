<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创意详细信息（新）
 * @doc  https://open.oceanengine.com/labels/7/docs/1742668551117827
 */
class CreativeDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/creative/detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeDetailGetResponse::from($response->toArray());
    }
}