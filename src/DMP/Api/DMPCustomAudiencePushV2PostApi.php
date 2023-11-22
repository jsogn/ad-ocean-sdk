<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 推送人群包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710572311552
 */
class DMPCustomAudiencePushV2PostApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/custom_audience/push_v2/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DMP\Params\DMPCustomAudiencePushV2PostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\DMPCustomAudiencePushV2PostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\DMPCustomAudiencePushV2PostResponse::from($response->toArray());
    }
}