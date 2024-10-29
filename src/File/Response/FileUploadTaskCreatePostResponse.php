<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileUploadTaskCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileUploadTaskCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FileUploadTaskCreatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileUploadTaskCreatePostResponseData
    {
        return $this->data;
    }
}