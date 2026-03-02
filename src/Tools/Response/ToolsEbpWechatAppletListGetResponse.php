<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEbpWechatAppletListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseData $data 资产信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseData $data;

    public function getData(): \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseData
    {
        return $this->data;
    }
}