<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模版预览链接
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273233146891
 */
class SiteTemplatePreviewGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site_template/preview/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\SiteTemplatePreviewGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\SiteTemplatePreviewGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\SiteTemplatePreviewGetResponse::from($response->toArray());
    }
}