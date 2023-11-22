<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class PromotionBidUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionBidUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertising\Data\PromotionBidUpdatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\PromotionBidUpdatePostResponseData
    {
        return $this->data;
    }
}