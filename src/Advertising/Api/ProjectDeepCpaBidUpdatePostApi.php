<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新深层项目出价NEW
 * @doc  https://open.oceanengine.com/labels/34/docs/1858175093068809?origin=left_nav
 */
class ProjectDeepCpaBidUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/deep_cpa_bid/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectDeepCpaBidUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectDeepCpaBidUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectDeepCpaBidUpdatePostResponse::from($response->toArray());
    }
}