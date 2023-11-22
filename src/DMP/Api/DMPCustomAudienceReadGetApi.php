<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 人群包详细信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710571259916
 */
class DMPCustomAudienceReadGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/custom_audience/read/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DMP\Params\DMPCustomAudienceReadGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\DMPCustomAudienceReadGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\DMPCustomAudienceReadGetResponse::from($response->toArray());
    }
}