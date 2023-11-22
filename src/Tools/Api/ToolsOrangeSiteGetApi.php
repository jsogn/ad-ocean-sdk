<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 通过优化目标获取橙子落地页站点信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1755162848410635
 */
class ToolsOrangeSiteGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/orange_site/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsOrangeSiteGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsOrangeSiteGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsOrangeSiteGetResponse::from($response->toArray());
    }
}