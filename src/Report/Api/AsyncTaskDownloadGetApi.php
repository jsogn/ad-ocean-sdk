<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 下载任务结果
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710563878927
 */
class AsyncTaskDownloadGetApi extends RequestApi
{
    protected string $address = 'open_api/2/async_task/download/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\AsyncTaskDownloadGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\AsyncTaskDownloadGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\AsyncTaskDownloadGetResponse::from($response->toArray());
    }
}