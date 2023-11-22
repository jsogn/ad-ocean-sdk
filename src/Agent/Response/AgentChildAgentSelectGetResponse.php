<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AgentChildAgentSelectGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Agent\Data\AgentChildAgentSelectGetResponseData $data json返回值
     */
    public \AdOceanSdk\Agent\Data\AgentChildAgentSelectGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Agent\Data\AgentChildAgentSelectGetResponseData
    {
        return $this->data;
    }
}