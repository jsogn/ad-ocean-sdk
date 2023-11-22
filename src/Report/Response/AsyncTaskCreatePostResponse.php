<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AsyncTaskCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Report\Data\AsyncTaskCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Report\Data\AsyncTaskCreatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Report\Data\AsyncTaskCreatePostResponseData
    {
        return $this->data;
    }
}