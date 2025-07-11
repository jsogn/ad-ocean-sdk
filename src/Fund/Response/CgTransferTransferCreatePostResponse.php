<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CgTransferTransferCreatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\CgTransferTransferCreatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\CgTransferTransferCreatePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\CgTransferTransferCreatePostResponseData
    {
        return $this->data;
    }
}