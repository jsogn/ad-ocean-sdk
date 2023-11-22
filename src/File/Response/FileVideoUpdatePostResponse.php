<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileVideoUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileVideoUpdatePostResponseData $data 返回数据
     */
    public \AdOceanSdk\File\Data\FileVideoUpdatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileVideoUpdatePostResponseData
    {
        return $this->data;
    }
}