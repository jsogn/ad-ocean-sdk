<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模板列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1736241054353421
 */
class CreativeTemplateListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/template/list/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeTemplateListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeTemplateListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeTemplateListGetResponse::from($response->toArray());
    }
}