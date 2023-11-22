<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询配置详情（广告升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1760943993851915
 */
class PromotionAutoGenerateConfigGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/auto_generate_config/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\PromotionAutoGenerateConfigGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionAutoGenerateConfigGetResponse::from($response->toArray());
    }
}