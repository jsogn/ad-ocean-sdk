<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建异步任务
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710562799616
 */
class AsyncTaskCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/async_task/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Report\Params\AsyncTaskCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\AsyncTaskCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\AsyncTaskCreatePostResponse::from($response->toArray());
    }
}