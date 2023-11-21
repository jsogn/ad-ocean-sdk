<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 上传资质图片
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710599659532
 */
class FIleImageAdvertiserPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/image/advertiser/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FIleImageAdvertiserPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FIleImageAdvertiserPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FIleImageAdvertiserPostResponse::from($response->toArray());
    }
}