<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取创意审核建议
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710544068620
 */
class CreativeRejectReasonGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/reject_reason/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeRejectReasonGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeRejectReasonGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeRejectReasonGetResponse::from($response->toArray());
    }
}