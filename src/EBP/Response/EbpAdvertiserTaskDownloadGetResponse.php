<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EbpAdvertiserTaskDownloadGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var json $data json返回值
     */
    public json $data;

    public function getData(): \AdOceanSdk\EBP\Data\EbpAdvertiserTaskDownloadGetResponseData
    {
        return $this->data;
    }
}