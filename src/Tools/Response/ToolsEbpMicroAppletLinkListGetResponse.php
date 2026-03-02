<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEbpMicroAppletLinkListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetResponseData $data 字节小程序详情
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetResponseData $data;

    public function getData(): \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetResponseData
    {
        return $this->data;
    }
}