<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 引流下单转化信息获取
 * @doc  https://open.oceanengine.com/labels/7/docs/1774836168252548
 */
class AdvConvertOleConvertPostApi extends RequestApi
{
    protected string $address = 'open_api/2/adv_convert/ole/convert/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\AdvConvertOleConvertPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\AdvConvertOleConvertPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\AdvConvertOleConvertPostResponse::from($response->toArray());
    }
}