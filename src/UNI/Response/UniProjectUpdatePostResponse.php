<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class UniProjectUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\UNI\Data\UniProjectUpdatePostResponseData $data;

    public function getData(): \AdOceanSdk\UNI\Data\UniProjectUpdatePostResponseData
    {
        return $this->data;
    }
}