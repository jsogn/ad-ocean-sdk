<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DpaEbpProductStatusBatchUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductStatusBatchUpdatePostResponseData $data 返回数据
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductStatusBatchUpdatePostResponseData $data;

    public function getData(): \AdOceanSdk\DPA\Data\DpaEbpProductStatusBatchUpdatePostResponseData
    {
        return $this->data;
    }
}