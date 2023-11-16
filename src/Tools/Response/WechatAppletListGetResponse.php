<?php

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Tools\Data\WechatAppletListGetResponseData;

class WechatAppletListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    public WechatAppletListGetResponseData $data;

    public function getData(): WechatAppletListGetResponseData
    {
        return $this->data;
    }
}