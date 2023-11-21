<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 提交主体资质（新版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1743294661429259
 */
class AdvertiserQualificationSubmitPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/qualification/submit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserQualificationSubmitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserQualificationSubmitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserQualificationSubmitPostResponse::from($response->toArray());
    }
}