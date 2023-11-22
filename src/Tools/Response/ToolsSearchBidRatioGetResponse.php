<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsSearchBidRatioGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSearchBidRatioGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Tools\Data\ToolsSearchBidRatioGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsSearchBidRatioGetResponseData
    {
        return $this->data;
    }
}