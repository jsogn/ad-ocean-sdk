<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 发布人群包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710571768844
 */
class DMPCustomAudiencePublishPostApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/custom_audience/publish/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DMP\Params\DMPCustomAudiencePublishPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\DMPCustomAudiencePublishPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\DMPCustomAudiencePublishPostResponse::from($response->toArray());
    }
}