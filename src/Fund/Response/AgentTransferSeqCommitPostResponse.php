<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AgentTransferSeqCommitPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\AgentTransferSeqCommitPostResponseData $data 返回数据
     */
    public \AdOceanSdk\Fund\Data\AgentTransferSeqCommitPostResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\AgentTransferSeqCommitPostResponseData
    {
        return $this->data;
    }
}