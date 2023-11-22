<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询广告计划学习期状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710684841984
 */
class ToolsAdStatExtraInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/ad_stat_extra_info/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsAdStatExtraInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAdStatExtraInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAdStatExtraInfoGetResponse::from($response->toArray());
    }
}