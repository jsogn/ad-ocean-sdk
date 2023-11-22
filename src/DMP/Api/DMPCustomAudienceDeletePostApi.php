<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除人群包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710572836879
 */
class DMPCustomAudienceDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/custom_audience/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DMP\Params\DMPCustomAudienceDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\DMPCustomAudienceDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\DMPCustomAudienceDeletePostResponse::from($response->toArray());
    }
}