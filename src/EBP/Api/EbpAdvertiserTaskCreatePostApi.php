<?php

namespace AdOceanSdk\EBP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建获取升级版巨量引擎工作台账户任务
 * @doc  https://open.oceanengine.com/labels/7/docs/1829552494525707?origin=left_nav
 */
class EbpAdvertiserTaskCreatePostApi extends RequestApi
{
    protected string $address = '';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\EBP\Params\EbpAdvertiserTaskCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\EBP\Response\EbpAdvertiserTaskCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\EBP\Response\EbpAdvertiserTaskCreatePostResponse::from($response->toArray());
    }
}