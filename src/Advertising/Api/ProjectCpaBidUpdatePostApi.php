<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目出价NEW
 * @doc  https://open.oceanengine.com/labels/34/docs/1858174581876745?origin=left_nav
 */
class ProjectCpaBidUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/cpa_bid/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectCpaBidUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectCpaBidUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectCpaBidUpdatePostResponse::from($response->toArray());
    }
}