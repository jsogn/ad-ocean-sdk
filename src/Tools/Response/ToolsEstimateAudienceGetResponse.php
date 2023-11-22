<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEstimateAudienceGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseData $data json返回值，其中参数如下：
     */
    public \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseData
    {
        return $this->data;
    }
}