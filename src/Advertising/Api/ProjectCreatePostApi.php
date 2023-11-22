<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建项目
 * @doc  https://open.oceanengine.com/labels/7/docs/1740868093375503
 */
class ProjectCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectCreatePostResponse::from($response->toArray());
    }
}