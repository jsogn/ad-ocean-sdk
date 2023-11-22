<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CustomerCenterAdvertiserListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetResponseData $data json返回值
     */
    public \AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetResponseData
    {
        return $this->data;
    }
}