<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsActionTextGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<string> $data 行动号召可选值列表
     */
    public array $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsActionTextGetResponseData
    {
        return $this->data;
    }
}