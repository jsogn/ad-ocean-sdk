<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CustomerCenterFundTransferSeqCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\CustomerCenterFundTransferSeqCreatePostResponseData $data 返回数据
     */
    public \AdOceanSdk\Fund\Data\CustomerCenterFundTransferSeqCreatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\CustomerCenterFundTransferSeqCreatePostResponseData
    {
        return $this->data;
    }
}