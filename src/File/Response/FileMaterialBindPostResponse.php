<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileMaterialBindPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileMaterialBindPostResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FileMaterialBindPostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileMaterialBindPostResponseData
    {
        return $this->data;
    }
}