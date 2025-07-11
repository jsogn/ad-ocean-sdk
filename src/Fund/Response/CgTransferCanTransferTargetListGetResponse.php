<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CgTransferCanTransferTargetListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\CgTransferCanTransferTargetListGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\CgTransferCanTransferTargetListGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\CgTransferCanTransferTargetListGetResponseData
    {
        return $this->data;
    }
}