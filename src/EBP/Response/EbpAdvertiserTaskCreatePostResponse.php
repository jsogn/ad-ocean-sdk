<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EbpAdvertiserTaskCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\EBP\Data\EbpAdvertiserTaskCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\EBP\Data\EbpAdvertiserTaskCreatePostResponseData $data;

    public function getData(): \AdOceanSdk\EBP\Data\EbpAdvertiserTaskCreatePostResponseData
    {
        return $this->data;
    }
}