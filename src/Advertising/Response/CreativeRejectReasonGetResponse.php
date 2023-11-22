<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CreativeRejectReasonGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseData $data 返回值
     */
    public \AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseData
    {
        return $this->data;
    }
}