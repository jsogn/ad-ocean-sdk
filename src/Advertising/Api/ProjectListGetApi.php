<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取项目列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1740937147595776
 */
class ProjectListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\ProjectListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectListGetResponse::from($response->toArray());
    }
}