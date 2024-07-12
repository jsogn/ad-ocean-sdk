<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取已创建资产详情（新）
 * @doc  https://open.oceanengine.com/labels/7/docs/1800988620664954
 */
class ToolsEventAllAssetsDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/event/all_assets/detail/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEventAllAssetsDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEventAllAssetsDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEventAllAssetsDetailGetResponse::from($response->toArray());
    }
}