<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserCreativeUpdateStatusPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeUpdateStatusPostResponseData $data 返回数据
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeUpdateStatusPostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\AdvertiserCreativeUpdateStatusPostResponseData
    {
        return $this->data;
    }
}