<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 多合一数据报表接口
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710554400780
 */
class ReportIntergratedGetApi extends RequestApi
{
    protected string $address = 'open_api/2/report/integrated/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportIntergratedGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportIntergratedGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportIntergratedGetResponse::from($response->toArray());
    }
}