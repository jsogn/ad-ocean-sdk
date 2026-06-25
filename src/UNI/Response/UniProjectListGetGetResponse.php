<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class UniProjectListGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseData $data json返回值
     */
    public \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseData $data;

    public function getData(): \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseData
    {
        return $this->data;
    }
}