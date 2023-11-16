<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class RequestResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    public ?array $data = [];

    public function getData(): ?array
    {
        return $this->data;
    }
}