<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsEbpAssetAuthCancelPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var json $data json返回值
     */
    public json $data;

    public function getData(): \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthCancelPostResponseData
    {
        return $this->data;
    }
}