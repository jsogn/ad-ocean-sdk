<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileVideoDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileVideoDeletePostResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FileVideoDeletePostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileVideoDeletePostResponseData
    {
        return $this->data;
    }
}