<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EventManagerOptimizedGoalV2GetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseData $data json返回值
     */
    public \AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseData
    {
        return $this->data;
    }
}