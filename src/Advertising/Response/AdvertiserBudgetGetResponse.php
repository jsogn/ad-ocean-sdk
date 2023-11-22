<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserBudgetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserBudgetGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserBudgetGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\AdvertiserBudgetGetResponseData
    {
        return $this->data;
    }
}