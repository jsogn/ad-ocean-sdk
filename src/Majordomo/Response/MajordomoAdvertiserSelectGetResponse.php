<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class MajordomoAdvertiserSelectGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Majordomo\Data\MajordomoAdvertiserSelectGetResponseData $data json返回值
     */
    public \AdOceanSdk\Majordomo\Data\MajordomoAdvertiserSelectGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Majordomo\Data\MajordomoAdvertiserSelectGetResponseData
    {
        return $this->data;
    }
}