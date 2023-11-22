<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新建或修改配置，并保存到计划
 * @doc  https://open.oceanengine.com/labels/7/docs/1736244450483215
 */
class CreativeAutoGenerateConfigCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/auto_generate_config/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\CreativeAutoGenerateConfigCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeAutoGenerateConfigCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeAutoGenerateConfigCreatePostResponse::from($response->toArray());
    }
}