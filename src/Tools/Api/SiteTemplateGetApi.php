<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取站点模版列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273219292292
 */
class SiteTemplateGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site_template/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\SiteTemplateGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\SiteTemplateGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\SiteTemplateGetResponse::from($response->toArray());
    }
}