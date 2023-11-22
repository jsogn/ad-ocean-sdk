<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 事件资产下创建监测链接组
 * @doc  https://open.oceanengine.com/labels/7/docs/1727898582816775
 */
class EventManagerTrackUrlCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/track_url/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerTrackUrlCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerTrackUrlCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerTrackUrlCreatePostResponse::from($response->toArray());
    }
}