<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取账户下资产列表（新）
 * @doc  https://open.oceanengine.com/labels/7/docs/1800985709803914
 */
class ToolsEventAllAssetsListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/event/all_assets/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEventAllAssetsListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEventAllAssetsListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEventAllAssetsListGetResponse::from($response->toArray());
    }
}