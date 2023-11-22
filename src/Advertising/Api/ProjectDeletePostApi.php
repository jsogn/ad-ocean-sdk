<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除项目
 * @doc  https://open.oceanengine.com/labels/7/docs/1740944781036608
 */
class ProjectDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectDeletePostResponse::from($response->toArray());
    }
}