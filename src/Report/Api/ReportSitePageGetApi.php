<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 橙子建站落地页数据
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710565390348
 */
class ReportSitePageGetApi extends RequestApi
{
    protected string $address = 'open_api/2/report/site/page/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportSitePageGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportSitePageGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportSitePageGetResponse::from($response->toArray());
    }
}