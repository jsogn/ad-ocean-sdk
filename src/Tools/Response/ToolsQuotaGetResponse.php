<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsQuotaGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsQuotaGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Tools\Data\ToolsQuotaGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsQuotaGetResponseData
    {
        return $this->data;
    }
}