<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 自定义报表
 * @doc  https://open.oceanengine.com/labels/7/docs/1741387668314126
 */
class ReportCustomGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/report/custom/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportCustomGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportCustomGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportCustomGetResponse::from($response->toArray());
    }
}