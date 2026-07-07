<?php

namespace AdOceanSdk\Subscribe\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询订阅 Adv
 * @doc  https://open.oceanengine.com/labels/7/docs/1818567348129040
 */
class SubscribeAccountsListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/subscribe/accounts/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Subscribe\Params\SubscribeAccountsListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Subscribe\Response\SubscribeAccountsListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Subscribe\Response\SubscribeAccountsListGetResponse::from($response->toArray());
    }
}