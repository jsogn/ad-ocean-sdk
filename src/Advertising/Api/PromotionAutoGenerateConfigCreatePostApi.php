<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新建/修改白盒配置（广告升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1760943644787716
 */
class PromotionAutoGenerateConfigCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/auto_generate_config/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigCreatePostResponse::from($response->toArray());
    }
}