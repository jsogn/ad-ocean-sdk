<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1740941413906432
 */
class ProjectStatusUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/status/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectStatusUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectStatusUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectStatusUpdatePostResponse::from($response->toArray());
    }
}