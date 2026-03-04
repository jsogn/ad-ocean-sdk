<?php

namespace AdOceanSdk\EBP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询获取工作台组织账户任务状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1829552777525449?origin=left_nav
 */
class EbpAdvertiserTaskListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/ebp/advertiser/task/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\EBP\Params\EbpAdvertiserTaskListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\EBP\Response\EbpAdvertiserTaskListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\EBP\Response\EbpAdvertiserTaskListGetResponse::from($response->toArray());
    }
}