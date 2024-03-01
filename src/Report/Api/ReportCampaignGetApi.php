<?php

namespace AdOceanSdk\Report\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 广告组数据
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710551161856
 */
class ReportCampaignGetApi extends RequestApi
{
    protected string $address = 'open_api/2/report/campaign/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Report\Params\ReportCampaignGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Report\Response\ReportCampaignGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Report\Response\ReportCampaignGetResponse::from($response->toArray());
    }
}