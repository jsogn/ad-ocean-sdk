<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class UniProjectAwemeAuthorizedGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectAwemeAuthorizedGetResponseData $data json返回值
     */
    public \AdOceanSdk\UNI\Data\UniProjectAwemeAuthorizedGetResponseData $data;

    public function getData(): \AdOceanSdk\UNI\Data\UniProjectAwemeAuthorizedGetResponseData
    {
        return $this->data;
    }
}