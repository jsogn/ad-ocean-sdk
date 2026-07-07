<?php

namespace AdOceanSdk\Subscribe\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新增 Adv 订阅
 * @doc  https://open.oceanengine.com/labels/7/docs/1818567687958707
 */
class SubscribeAccountsAddPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/subscribe/accounts/add/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Subscribe\Params\SubscribeAccountsAddPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Subscribe\Response\SubscribeAccountsAddPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Subscribe\Response\SubscribeAccountsAddPostResponse::from($response->toArray());
    }
}