<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AgentTransferTransactionRecordGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetResponseData
    {
        return $this->data;
    }
}