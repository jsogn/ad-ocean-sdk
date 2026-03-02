<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEbpMicroGameLinkListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetResponseData $data 详情结果
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetResponseData $data;

    public function getData(): \AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetResponseData
    {
        return $this->data;
    }
}