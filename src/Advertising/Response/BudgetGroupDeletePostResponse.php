<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class BudgetGroupDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\BudgetGroupDeletePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertising\Data\BudgetGroupDeletePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\BudgetGroupDeletePostResponseData
    {
        return $this->data;
    }
}