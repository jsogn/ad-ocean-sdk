<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 素材推送
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710604852236
 */
class FileMaterialBindPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/material/bind/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileMaterialBindPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileMaterialBindPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileMaterialBindPostResponse::from($response->toArray());
    }
}