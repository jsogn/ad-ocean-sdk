<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取橙子建站站点预览地址
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710619437056
 */
class ToolsSitePreviewGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/preview/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsSitePreviewGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSitePreviewGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSitePreviewGetResponse::from($response->toArray());
    }
}