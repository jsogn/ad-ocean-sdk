<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class UniProjectCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\UNI\Data\UniProjectCreatePostResponseData $data;

    public function getData(): \AdOceanSdk\UNI\Data\UniProjectCreatePostResponseData
    {
        return $this->data;
    }
}