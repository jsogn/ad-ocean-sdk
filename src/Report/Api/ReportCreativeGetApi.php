<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 广告创意数据
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710552261644
 */
class ReportCreativeGetApi extends RequestApi
{
    protected string $address = 'open_api/2/report/creative/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportCreativeGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportCreativeGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportCreativeGetResponse::from($response->toArray());
    }
}