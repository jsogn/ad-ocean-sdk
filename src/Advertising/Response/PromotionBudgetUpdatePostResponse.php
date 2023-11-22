<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class PromotionBudgetUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionBudgetUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertising\Data\PromotionBudgetUpdatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\PromotionBudgetUpdatePostResponseData
    {
        return $this->data;
    }
}