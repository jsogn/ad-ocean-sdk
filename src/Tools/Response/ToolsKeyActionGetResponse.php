<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsKeyActionGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsKeyActionGetResponseData $data json返回值
     */
    public \AdOceanSdk\Tools\Data\ToolsKeyActionGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsKeyActionGetResponseData
    {
        return $this->data;
    }
}