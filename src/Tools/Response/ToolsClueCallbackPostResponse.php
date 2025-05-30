<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsClueCallbackPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    /**
     * @var array $data json返回值
     */
    public array $data;

    public function getData(): array
    {
        return $this->data;
    }
}