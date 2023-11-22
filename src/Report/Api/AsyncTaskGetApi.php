<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取任务列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710563323916
 */
class AsyncTaskGetApi extends RequestApi
{
    protected string $address = 'open_api/2/async_task/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\AsyncTaskGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\AsyncTaskGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\AsyncTaskGetResponse::from($response->toArray());
    }
}