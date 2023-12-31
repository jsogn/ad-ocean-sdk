<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模板标签列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1736241004382219
 */
class CreativeTemplateTagsGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/template/tags/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeTemplateTagsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeTemplateTagsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeTemplateTagsGetResponse::from($response->toArray());
    }
}