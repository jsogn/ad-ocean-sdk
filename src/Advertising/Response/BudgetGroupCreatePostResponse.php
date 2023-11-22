<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class BudgetGroupCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\BudgetGroupCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertising\Data\BudgetGroupCreatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\BudgetGroupCreatePostResponseData
    {
        return $this->data;
    }
}