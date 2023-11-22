<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserTransferableFundGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserTransferableFundGetResponseData $data json返回值
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserTransferableFundGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertiser\Data\AdvertiserTransferableFundGetResponseData
    {
        return $this->data;
    }
}