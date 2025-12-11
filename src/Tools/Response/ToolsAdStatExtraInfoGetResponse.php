<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsAdStatExtraInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsAdStatExtraInfoGetResponseData> $data 计划学习期状态列表
     */
    public array $data;
    
    /**
     * @return array<\AdOceanSdk\Tools\Data\ToolsAdStatExtraInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}