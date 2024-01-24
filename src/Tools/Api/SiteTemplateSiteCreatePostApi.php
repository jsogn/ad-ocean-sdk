<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 基于模板创建站点
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273197263875
 */
class SiteTemplateSiteCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site_template/site/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\SiteTemplateSiteCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\SiteTemplateSiteCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\SiteTemplateSiteCreatePostResponse::from($response->toArray());
    }
}