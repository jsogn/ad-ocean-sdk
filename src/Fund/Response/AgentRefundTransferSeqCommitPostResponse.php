<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AgentRefundTransferSeqCommitPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\AgentRefundTransferSeqCommitPostResponseData $data 返回数据
     */
    public \AdOceanSdk\Fund\Data\AgentRefundTransferSeqCommitPostResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\AgentRefundTransferSeqCommitPostResponseData
    {
        return $this->data;
    }
}