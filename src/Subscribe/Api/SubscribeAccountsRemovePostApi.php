<?php

namespace AdOceanSdk\Subscribe\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 取消 Adv 订阅
 * @doc  https://open.oceanengine.com/labels/7/docs/1818566670161920
 */
class SubscribeAccountsRemovePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/subscribe/accounts/remove/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Subscribe\Params\SubscribeAccountsRemovePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Subscribe\Response\SubscribeAccountsRemovePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Subscribe\Response\SubscribeAccountsRemovePostResponse::from($response->toArray());
    }
}