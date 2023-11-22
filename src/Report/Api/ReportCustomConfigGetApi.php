<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取自定义报表可用指标和维度
 * @doc  https://open.oceanengine.com/labels/7/docs/1755261744248832
 */
class ReportCustomConfigGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/report/custom/config/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportCustomConfigGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportCustomConfigGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportCustomConfigGetResponse::from($response->toArray());
    }
}