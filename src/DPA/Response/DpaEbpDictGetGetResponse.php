<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DpaEbpDictGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpDictGetGetResponseData $data json返回值
     */
    public \AdOceanSdk\DPA\Data\DpaEbpDictGetGetResponseData $data;

    public function getData(): \AdOceanSdk\DPA\Data\DpaEbpDictGetGetResponseData
    {
        return $this->data;
    }
}