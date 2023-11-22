<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileVideoAdPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileVideoAdPostResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FileVideoAdPostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileVideoAdPostResponseData
    {
        return $this->data;
    }
}