<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版组织-创建/编辑升级版商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200828633995?origin=left_nav
 */
class DpaEbpClueProductSavePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/clue_product/save/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpClueProductSavePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpClueProductSavePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpClueProductSavePostResponse::from($response->toArray());
    }
}