<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 广告主数据
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710550620160
 */
class ReportAdvertiserGetApi extends RequestApi
{
    protected string $address = 'open_api/2/report/advertiser/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportAdvertiserGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportAdvertiserGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportAdvertiserGetResponse::from($response->toArray());
    }
}