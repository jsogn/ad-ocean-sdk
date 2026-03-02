<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEbpVideoDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpVideoDeletePostResponseData $data json返回值
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpVideoDeletePostResponseData $data;

    public function getData(): \AdOceanSdk\Tools\Data\ToolsEbpVideoDeletePostResponseData
    {
        return $this->data;
    }
}