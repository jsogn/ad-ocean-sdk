<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CgTransferCanTransferBalanceGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseData
    {
        return $this->data;
    }
}