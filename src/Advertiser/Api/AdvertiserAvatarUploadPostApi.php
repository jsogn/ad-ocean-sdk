<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Psr7\Utils;

/**
 * @desc 获取广告主账户头像ID
 * @doc  https://open.oceanengine.com/labels/7/docs/1794039016601604
 */
class AdvertiserAvatarUploadPostApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/avatar/upload/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::MULTIPART;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarUploadPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserAvatarUploadPostResponse
    {
        $formParams = [];

        foreach ($params as $key => $val) {
            if ($key === 'image_file') {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => str_contains($params['image_file'], 'http') ? file_get_contents($params['image_file']) : $params['image_file'],
                    'filename' => $params['filename'] ?? '',
                ];
            } else {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => $val
                ];
            }
        }

        $response = parent::call($formParams);

        return \AdOceanSdk\Advertiser\Response\AdvertiserAvatarUploadPostResponse::from($response->toArray());
    }
}