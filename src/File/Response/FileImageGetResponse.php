<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileImageGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileImageGetResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FileImageGetResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileImageGetResponseData
    {
        return $this->data;
    }
}