<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模板详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1736243716320256
 */
class AdvertiserCreativeTemplateDetailGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/template/detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserCreativeTemplateDetailGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserCreativeTemplateDetailGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserCreativeTemplateDetailGetGetResponse::from($response->toArray());
    }
}