<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 事件资产下更新监测链接组
 * @doc  https://open.oceanengine.com/labels/7/docs/1727899035395079
 */
class EventManagerTrackUrlUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/track_url/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerTrackUrlUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerTrackUrlUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerTrackUrlUpdatePostResponse::from($response->toArray());
    }
}