<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsAdminInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseData
    {
        return $this->data;
    }
}