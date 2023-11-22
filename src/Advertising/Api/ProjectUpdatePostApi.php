<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新项目
 * @doc  https://open.oceanengine.com/labels/7/docs/1740936504522831
 */
class ProjectUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectUpdatePostResponse::from($response->toArray());
    }
}