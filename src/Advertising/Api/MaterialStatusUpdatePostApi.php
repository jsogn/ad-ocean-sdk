<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新广告素材启用状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1755355780973568
 */
class MaterialStatusUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/material/status/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\MaterialStatusUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\MaterialStatusUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\MaterialStatusUpdatePostResponse::from($response->toArray());
    }
}