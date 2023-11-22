<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EventManagerTrackUrlUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var object $data 返回数据
     */
    public object $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\EventManagerTrackUrlUpdatePostResponseData
    {
        return $this->data;
    }
}