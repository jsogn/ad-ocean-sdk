<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FIleImageAdvertiserPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FIleImageAdvertiserPostResponseData $data json返回值
     */
    public \AdOceanSdk\File\Data\FIleImageAdvertiserPostResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FIleImageAdvertiserPostResponseData
    {
        return $this->data;
    }
}