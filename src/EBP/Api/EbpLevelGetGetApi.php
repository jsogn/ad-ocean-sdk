<?php

namespace AdOceanSdk\EBP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取工作台组织关系（升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1829551362400384?origin=left_nav
 */
class EbpLevelGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/ebp/level/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\EBP\Params\EbpLevelGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\EBP\Response\EbpLevelGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\EBP\Response\EbpLevelGetGetResponse::from($response->toArray());
    }
}