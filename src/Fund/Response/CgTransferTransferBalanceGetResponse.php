<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CgTransferTransferBalanceGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseData
    {
        return $this->data;
    }
}