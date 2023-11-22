<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告预览二维码（升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1763117461145604
 */
class ToolsAdPreviewQrcodeGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ad_preview/qrcode_get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsAdPreviewQrcodeGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAdPreviewQrcodeGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAdPreviewQrcodeGetResponse::from($response->toArray());
    }
}