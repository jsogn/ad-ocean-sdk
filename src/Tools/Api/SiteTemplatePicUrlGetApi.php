<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模板/站点URL
 * @doc  https://open.oceanengine.com/labels/7/docs/1772995231995911
 */
class SiteTemplatePicUrlGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site_template/pic_url/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\SiteTemplatePicUrlGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\SiteTemplatePicUrlGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\SiteTemplatePicUrlGetResponse::from($response->toArray());
    }
}