<?php

namespace AdOceanSdk\Majordomo\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取纵横组织下资产账户列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710519607296
 */
class MajordomoAdvertiserSelectGetApi extends RequestApi
{
    protected string $address = 'open_api/2/majordomo/advertiser/select/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Majordomo\Params\MajordomoAdvertiserSelectGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Majordomo\Response\MajordomoAdvertiserSelectGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Majordomo\Response\MajordomoAdvertiserSelectGetResponse::from($response->toArray());
    }
}