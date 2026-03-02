<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DpaEbpProductDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDeletePostResponseData $data json返回值
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDeletePostResponseData $data;

    public function getData(): \AdOceanSdk\DPA\Data\DpaEbpProductDeletePostResponseData
    {
        return $this->data;
    }
}