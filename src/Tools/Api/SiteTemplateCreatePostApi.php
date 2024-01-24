<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 基于站点创建模板
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273160450059
 */
class SiteTemplateCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site_template/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\SiteTemplateCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\SiteTemplateCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\SiteTemplateCreatePostResponse::from($response->toArray());
    }
}