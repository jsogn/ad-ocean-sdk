<?php
declare(strict_types=1);

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\Tools\Params\WechatAppletListGetParams;
use AdOceanSdk\Tools\Response\WechatAppletListGetResponse;

/**
 * @desc 获取微信小程序列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1771203622020111
 */
class WechatAppletListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/wechat_applet/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;
    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::QUERY;

    public function call(WechatAppletListGetParams|RequestParamInterface|array $params = []): WechatAppletListGetResponse
    {
        $response = parent::call($params);

        return WechatAppletListGetResponse::from($response->toArray());
    }
}