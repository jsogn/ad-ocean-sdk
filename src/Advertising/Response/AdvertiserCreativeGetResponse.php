<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserCreativeGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseData $data json返回值, 字典类型, 包含下面字段
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseData
    {
        return $this->data;
    }
}