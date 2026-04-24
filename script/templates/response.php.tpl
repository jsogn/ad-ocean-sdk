<?php

declare(strict_types=1);

namespace {{namespace}};

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class {{className}} extends Data implements ResponseInterface
{
    use ResponseTrait;

{{fields}}{{returnDocBlock}}    public function getData(): {{returnType}}
    {
        return $this->data;
    }
}