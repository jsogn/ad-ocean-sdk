<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CreativeStrategyListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseData
    {
        return $this->data;
    }
}